#!/bin/bash
# prompt user for name to gender check
echo Enter a name to gender check:
read varname
echo Checking the gender of $varname

postdata='{"inputPerson":{"type":"NaturalInputPerson","personName":{"nameFields":[{"string":"'"${varname}"'","fieldType":"FULLNAME"}]}}}'
echo $postdata

curl -H "Content-Type: application/json" \
    -X POST -d \
    $postdata \
    http://rc50-api.nameapi.org/rest/v5.0/genderizer/persongenderizer?apiKey=ce463368c31826cb65a2cb62a1e1f262-user1
