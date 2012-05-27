<?php
include('haversine.php');

// Same point
echo haversine(0,0,0,0)."\n";

// Right angles from the equator
echo haversine(0,0,90,0)."\n";
echo haversine(0,0,0,90)."\n";

// Pole to pole
echo haversine(-90,0,90,0)."\n";
echo haversine(90,0,-90,0)."\n";

// Try to trick it at the same distance around the equator
echo haversine(0,180,0,-180)."\n";
echo haversine(0,-180,0,180)."\n";

// more equal distances
echo haversine(0,180,0,90)."\n";
echo haversine(0,90,0,0)."\n";


// Pick a random point
$lat1 = rand(-90000, 90000)/1000;
$lon1 = rand(-180000,180000)/1000;

/*
Issues with?
-50.948
129.052
*/

// Antipodiean version should always be ~20015.086796021
echo haversine($lat1,$lon1,(-1*$lat1),180-(-1*$lon1))."\n";



?>