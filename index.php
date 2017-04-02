<?php

    include("geo_ip_files/geoipcity.inc");
    include("geo_ip_files/geoipregionvars.php");

    $giCity = geoip_open("geo_ip_files/GeoLiteCity.dat", GEOIP_STANDARD);

    //$ip =$_SERVER['REMOTE_ADDR'];                         //use this in server to get IP
    $ip = file_get_contents('https://api.ipify.org');       //use this in localhost to get IP
    $record = geoip_record_by_addr($giCity, $ip);

    echo "Getting Country and City detail by IP Address <br /><br />";
    echo "IP: " . $ip . "<br /><br />";                     //IP Address

    echo "Country Code: " . $record->country_code .  "<br />" .     //Country
    "Country Code3: " . $record->country_code . "<br />" .          //Country Code
    "Country Name: " . $record->country_name . "<br />" .
    "Region Code: " . $record->region . "<br />" .
    "Region Name: " . $GEOIP_REGION_NAME[$record->country_code][$record->region] . "<br />" .
    "City: " . $record->city . "<br />" .                           //City
    "Postal Code: " . $record->postal_code . "<br />" .
    "Latitude: " . $record->latitude . "<`enter code here`br />" .  //Latitude
    "Longitude: " . $record->longitude . "<br />" ;                 //Longitude
    //"Metro Code: " . $record->metro_code . "<br />" .
   // "Area Code: " . $record->area_code . "<br />" ; 

   // echo $record->latitude;

?>