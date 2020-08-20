<?php	

$json = '{
  "context" : {
     "priority" : "REALTIME",
     "properties" : [ ]
   },
  "inputPerson" : {
    "type" : "NaturalInputPerson",
    "personName" : {
      "nameFields" : [ {
        "string" : "' . $_GET["first_name"] .  '",
        "fieldType" : "GIVENNAME"
      }, {
        "string" : "' . $_GET["last_name"] .  '",
        "fieldType" : "SURNAME"
      } ]
    },
    "gender" : "UNKNOWN"
  }
} ';                                                                             
                                                                                                                     
$ch = curl_init('http://api.nameapi.org/rest/v5.3/genderizer/persongenderizer?apiKey=f563e5803835ad5913ebdb291380c4b4-user1');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($json))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

$decoded_json = json_decode ( $result );

echo $_GET["first_name"] . " ". $_GET["last_name"] . " is a " . $decoded_json->gender . ".<br><br>";

$confidence = $decoded_json->confidence * 100;

echo "This is with a " . number_format($confidence, 0) . "% confidence level.<br>";
curl_close($ch);
	
?>