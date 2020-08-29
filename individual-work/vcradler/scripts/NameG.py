import json
import requests as r




apiK = 'b00d8fbb62e5bb596b31883fc3b458ae-user1'


url = 'http://api.nameapi.org/rest/v5.3/genderizer/persongenderizer?apiKey='
fname = input('Please input a first name :\n')
lname = input('Please input a last name :\n')

d = {
  "context" : {
     "priority" : "REALTIME",
     "properties" : [ ]
   },
  "inputPerson" : {
    "type" : "NaturalInputPerson",
    "personName" : {
      "nameFields" : [ {
        "string" : fname,
        "fieldType" : "GIVENNAME"
      }, {
        "string" : lname,
        "fieldType" : "SURNAME"
      } ]
    },
    "gender" : "UNKNOWN"
  }
} 


headers={'Content-type':'application/json', 'Accept':'application/json'}
gender = r.post(url+apiK, json=d, headers=headers)



print(gender.status_code)


print(gender.json())
