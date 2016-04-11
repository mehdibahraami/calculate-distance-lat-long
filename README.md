#Calculate Distance and Latitude/Longitude
In this class of PHP in `calculateLatLong` function you can calculating latitude and longitude from focal latitude `$lat1` and longitude `$lon1` with a specific distance `$distance` from specified angle `$bearing`.

Also in this class in `calculateDistance` function you can calculating distance between two latitude `$lat1 & $lat2` and longitude `$lon1 & $lon2`.

##Example
For `calculateLatLong` function:
```PHP
//Input
$lat1 = 35.7726822; //Latitude
$lon1 = 51.4379137; //Longitude
$distance = 5; //Kilometer
$bearing = 90; //Degree

//Output
[
  35.7726694869,
  51.4933355083
]
```

For `calculateDistance` function:
```PHP
//Input
$lat1 = 35.7726822; //Latitude1
$lon1 = 51.4379137; //Longitude1
$lat2 = 35.7726694869; //Latitude2
$lon2 = 51.4933355083; //Longitude2

//Output
4.99975944401 //Kilometer
```

##Notices
In this class distance calculate Based on the `Kilometer`.

If you need it based on `Miles`, Change $d in `calculateLatLong` function to:

```PHP
$d = ($distance/1.609344) / 6371;
```

and Change $distance in `calculateDistance` function to:

```PHP
$distance = $dist * 60 * 1.1515;
```

##Resources
[GeoDataSource](https://www.geodatasource.com/developers/php)

[Calculate Latitude and Longitude from Distance and Bearing for Javascript](http://www.etechpulse.com/2014/02/calculate-latitude-and-longitude-based.html)
