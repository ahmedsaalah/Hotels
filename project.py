from flask import Flask, render_template, request, redirect, jsonify, url_for, flash
#from sqlalchemy import create_engine, asc,desc
#from sqlalchemy.orm import sessionmaker

from flask import session as login_session
import random
import string
import httplib2
import json
from flask import make_response
import requests
from pprint import pprint
from functools import wraps
#import pymysql.cursors
from hotel import Hotel
from room import Room
import requests

from requests.auth import HTTPBasicAuth

from bs4 import BeautifulSoup
from datetime import datetime

def days_between(d1, d2):
    d1 = datetime.strptime(d1, "%Y-%m-%d")
    d2 = datetime.strptime(d2, "%Y-%m-%d")
    return abs((d2 - d1).days)

app = Flask(__name__)


@app.route('/')
def routeToMain():
    """ Main Page """
    return render_template('travel.html')


def hotelAvailability(code,hotelCode):
    
    url = 'https://api-test.hotelspro.com/api/v2/hotel-availability/?search_code=%s&hotel_code=%s' % (code,hotelCode)
    r = requests.get(url, auth=HTTPBasicAuth('Tejwaal', 'supwOdB1pI32Q6Dq'))
    data = json.loads(r.text)
    count = data["count"]
    rooms = []
    if count == 0 :
        return 0
    else:
        pprint("=============================================count" )
        pprint(count )
        for index in range(len(data["results"])):
            code = data["results"][index]["code"]
            meal_type = data["results"][index]["meal_type"]
            nonrefundable = data["results"][index]["nonrefundable"]
            
            room_category = data["results"][index]["rooms"][0]["room_category"]
            room_description = data["results"][index]["rooms"][0]["room_description"]
            room_type = data["results"][index]["rooms"][0]["room_type"]
            nightly_prices = []
            keys = data["results"][index]["rooms"][0]["nightly_prices"].keys()
            for index2 in range(len(keys)):
                price = data["results"][index]["rooms"][0]["nightly_prices"][keys[index2]]
                
                nightly_prices.insert(index2,price)

            room = Room(nonrefundable,meal_type,room_category,room_description,code,nightly_prices,room_type)   
            rooms.insert(index,room)

    return rooms



@app.route('/checkprovision', methods=['GET'])
def checkprovision():
    pprint("request.form['code']")
    return "ahmed"






@app.route('/details/<string:code>/<string:hotelCode>/<string:price>', methods=['GET'])
def getDetails(code,hotelCode,price):
    # hkhod el two codes a-tcheck  avaiable b3d kda provision w atla3 hotelobject 
    """ Main Page """
    # respond = hotelAvailability(code,hotelCode)

    Hotel = HotelDetails(hotelCode,code)
    city = login_session['city']
    days = login_session['days']
    price = float(price) /int(days)


    
    return render_template('HotelDetails.html',Hotel =Hotel,price=price,city =city )


    

@app.route('/hotels', methods=['GET', 'POST'])
def hotelSearch():

    fullname = request.form['city']
    Checkin = request.form['checkin']
    Checkout = request.form['checkout']
    Checkin =  reformateDate(Checkin)
    Checkout = reformateDate(Checkout)
    Adults = request.form['adults']
    Childs = request.form['child']
    AgesOfChild = request.form['childages']
    Ages = AgesOfChild.split(',')
    AgesList = []
    pax = Adults 
    for index in range(0,int(Childs)):
        pax = pax + ',' + Ages[index]

        # AgesList.insert(index, int(Ages[index]))
        
    days=days_between(Checkin,Checkout)
    city,code = fullnameToCityAndCode(fullname)
    Hotels = []
    if city != "not found" :
        code = code.lower()
        destination_code = getDestination_code(city,code)
        Hotels,code = getHotelsinThisCity(Checkin , Checkout , pax ,destination_code)
 

    
    
    
    
    login_session['city'] = city
    login_session['days'] = days
    login_session['Checkin'] = Checkout
    login_session['Checkout'] = Checkin
    
    
    return render_template('searchResults.html',Hotels=Hotels,fullname=fullname,
    Checkin=Checkin,Checkout=Checkout,Adults=Adults,Childs=Childs,city=city,days=days,code=code)





def reformateDate(Date):
    arr = Date.split('/')

    newDate = arr[2] + '-' + arr[0] + '-' + arr[1]

    return newDate





def getHotelsinThisCity(Checkin , Checkout , pax ,destination_code):
    url = 'https://api-test.hotelspro.com/api/v2/search/?currency=USD&client_nationality=cn&pax=%s&checkin=%s&checkout=%s&destination_code=%s' % (pax,Checkin,Checkout,destination_code)
    r = requests.get(url, auth=HTTPBasicAuth('Tejwaal', 'supwOdB1pI32Q6Dq'))
    data = json.loads(r.text)
    
    Hotels = []
    code = data["code"]
    for index in range(len(data["results"])):
        
        products = data["results"][index]["products"]
        

        hotelcode = data["results"][index]["hotel_code"]
        price  = data["results"][int(index)]["products"][0]["price"]



        Temp = HotelDetailsForsearch(hotelcode,price)
        
        if  Temp != "No Details":
            hotel = Temp
            Hotels.insert(index,hotel)


    return Hotels,code




def HotelDetailsForsearch(hotelcode,price):


        url = 'http://cosmos.metglobal.tech/api/static/v1/hotels/%s/' % hotelcode
        rhotel = requests.get(url, auth=HTTPBasicAuth('TejwaalCosmos', 'lUGft5ApQkfFp9wR'))
        
        if len(rhotel.text) == 2:
            return "No Details"
        
        datahotel = json.loads(rhotel.text)
        

        latitude=datahotel[0]["latitude"]
        stars=int(datahotel[0]["stars"])
        longitude=datahotel[0]["longitude"]
        address=datahotel[0]["address"]
        name=datahotel[0]["name"]
        
        
        
        phone=datahotel[0]["phone"]
        descriptions=datahotel[0]["descriptions"]["hotel_information"]
        descriptions = BeautifulSoup(descriptions).text

        
        images = []
        for index2 in range(len(datahotel[0]["images"])):
            images.insert( index2, datahotel[0]["images"][index2]["original"])
            break 
       


        
        rooms=[]
        themes =[]
        
        hotel = Hotel(latitude,longitude,themes,name,price,phone,address,descriptions,images,stars,hotelcode,rooms)
        return hotel
        





def HotelDetails(hotelcode,code):
        rooms= []
        
        respond = hotelAvailability(code,hotelcode)
        if respond == 0 :
            return "No Details"
        rooms = respond
        pprint("==============================================sssssssss==============")
        pprint(len(rooms))
        url = 'http://cosmos.metglobal.tech/api/static/v1/hotels/%s/' % hotelcode
        rhotel = requests.get(url, auth=HTTPBasicAuth('TejwaalCosmos', 'lUGft5ApQkfFp9wR'))
        
        if len(rhotel.text) == 2:
            return "No Details"
        
        datahotel = json.loads(rhotel.text)
        

        latitude=datahotel[0]["latitude"]
        stars=int(datahotel[0]["stars"])
        longitude=datahotel[0]["longitude"]
        address=datahotel[0]["address"]
        name=datahotel[0]["name"]
        
        
        
        phone=datahotel[0]["phone"]
        descriptions=datahotel[0]["descriptions"]["hotel_information"]
        descriptions = BeautifulSoup(descriptions).text

        
        images = []
        for index2 in range(len(datahotel[0]["images"])):
            images.insert( index2, datahotel[0]["images"][index2]["original"])
       


        
        themes = []
        for index3 in range(len(datahotel[0]["themes"])):
            url = 'http://cosmos.metglobal.tech/api/static/v1/hotel-themes/%s/?format=json' % datahotel[0]["themes"][index3]
            rthemes = requests.get(url, auth=HTTPBasicAuth('TejwaalCosmos', 'lUGft5ApQkfFp9wR'))
            themesdata = json.loads(rthemes.text)
            themes.insert( index3, themesdata[0]["name"])

        for index3 in range(len(datahotel[0]["facilities"])):
            url = 'http://cosmos.metglobal.tech/api/static/v1/facilities/%s/' % datahotel[0]["facilities"][index3]
            rthemes = requests.get(url, auth=HTTPBasicAuth('TejwaalCosmos', 'lUGft5ApQkfFp9wR'))
            themesdata = json.loads(rthemes.text)
            themes.insert( index3, themesdata[0]["name"])
            
        
        hotel = Hotel(latitude,longitude,themes,name,0,phone,address,descriptions,images,stars,hotelcode,rooms)
        return hotel



  


def getDestination_code(city,code):

    url = "http://cosmos.metglobal.tech/api/static/v1/destinations/?q=%s&country=%s" % (city,code)
    r = requests.get(url, auth=HTTPBasicAuth('TejwaalCosmos', 'lUGft5ApQkfFp9wR'))
    
    data = json.loads(r.text)
    
    return data["results"][0]["code"]
   
        
    



def fullnameToCityAndCode(full):
    url ='http://yasen.hotellook.com/autocomplete?lang=en-US&limit=10&term=%s' % full
    
    r = requests.get(url)

    data = json.loads(r.text)
    
    for index in range(len(data["cities"])):
        if data["cities"][index]["fullname"] == full :

            return data["cities"][index]["city"],data["cities"][index]["countryCode"]

    return "not found","not found"


if __name__ == '__main__':
    app.secret_key = 'super_secret_key'
    app.debug = True
    app.run(host='0.0.0.0', port=5000)
    
