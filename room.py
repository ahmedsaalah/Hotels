from hotel import Hotel
class Room ():
    '''
    This class consists of main attributes of the rooms
    '''
    def __init__(self, nonrefundable, mealtype,room_category,
                 room_description, code,nightly_prices,room_type):
        """        constructor

        """
        self.nonrefundable = nonrefundable
        self.mealtype = mealtype
        self.room_category = room_category
        self.room_description = room_description
        self.room_type = room_type
        self.code = code
        self.nightly_prices=nightly_prices
