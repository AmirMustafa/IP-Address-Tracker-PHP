# Get IP Address, Country, Country Code, City, Latitude and Longitude (v5)

[![Build Status](https://img.shields.io/travis/facebook/php-graph-sdk/5.4.svg)](#)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/facebook/facebook-php-sdk-v4/badges/quality-score.png?b=5.4)](#)
[![Latest Stable Version](http://img.shields.io/badge/Latest%20Stable-5.4.4-blue.svg)](#)


Many a time in their project in delivery pages, developers need to know the IP Address for tracking the location, country, city and so on.<br><br>
Through this IP code you will be able get visitor's IP Address, country, country code, city, Latitudes and longitudes. 

## Installation

1. Clone the Repository.<br>
2. Fork this Repository for your future use<br>
3. Read the Snippet or code (i.e. index.php) in localhost receive IP in one way and in server receive IP in other way.
4. Just exeuting the index.php page will give the above informations

## Snippets

```<?php

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
```

## Preview

![Screenshot of Resultant Information of visitors](https://cloud.githubusercontent.com/assets/15896579/24589042/9bf19fe0-17f1-11e7-8d14-f9abaa437416.JPG?raw=true "Screenshot of Resultant Information of visitors")
<br/><br/><br/>

## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
