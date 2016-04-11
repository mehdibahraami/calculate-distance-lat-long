# calculate-distance-lat-long
This PHP class can calculate latitude and longitude from another latitude and longitude with a specific distance and bearing, and in another function you can calculate the distance between two latitude and longitude using Math functions in PHP.

In this class distance calculate Based on the kilometer.

If you need it based on miles, Change $d in calculateLatLong to:

$d = ($distance/1.609344) / 6371;


and Change $distance in calculateDistance to:

$distance = $dist * 60 * 1.1515;
