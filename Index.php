<?php
/**
 * Created by Mehdi Bahrami
 */


class Geographical
{
    public function calculateLatLong($lat1, $lon1, $distance, $bearing)
    {
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $b = deg2rad($bearing);
        $d = $distance / 6371;
        $lat2 = asin((sin($lat1) * cos($d)) + ((cos($lat1) * sin($d)) * cos($b)));
        $lon2 = $lon1 + atan2(((sin($b) * sin($d)) * cos($lat1)), (cos($d) - (sin($lat1) * sin($lat2))));

        return ([rad2deg($lat2),rad2deg($lon2)]);
    }

    public function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $distance = $dist * 60 * 1.1515 * 1.609344;

        return $distance;
    }

}
