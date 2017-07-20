
class Hotel ():
    '''
    This class consists of main attributes of the hotels
    '''
    def __init__(self, lat, longt,themes,
                 name, price,phone,address,descriptions,photos,stars,code,rooms):
        """        constructor

        """
        self.lat = lat
        self.longt = longt
        self.address = address
        self.name = name
        self.price = price
        self.phone = phone
        self.descriptions = descriptions
        self.photos = photos
        self.stars = stars
        self.themes = themes
        self.code = code
        self.rooms =rooms
