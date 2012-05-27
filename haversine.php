<?php
// Brian Suda
// brian@suda.co.uk

/*

This is a very simple function used in the optional.is/contest to determine the winner based on the shortest distance from a randomly selected point on the globe. To be completely transparent in the process, the equation used has been open-sourced and posted online.

*/


function spherical_law_of_cosines($lat1,$lon1,$lat2,$lon2,$R=6371){
	return acos(
			sin(($lat1 * M_PI / 180))*
			sin(($lat2 * M_PI / 180))+
			cos(($lat1 * M_PI / 180))*
			cos(($lat2 * M_PI / 180))*
			cos(($lon2-$lon1) * M_PI / 180)
			)*$R;
}

function haversine($lat1,$lon1,$lat2,$lon2,$R=6371){
	$dLat = ($lat2 * M_PI / 180)-($lat1 * M_PI / 180);
	$dLon = ($lon2 * M_PI / 180)-($lon1 * M_PI / 180);
	
	$lat1 = ($lat1 * M_PI / 180);
	$lat2 = ($lat2 * M_PI / 180);

	$a = (sin($dLat/2) * sin($dLat/2)) +  cos($lat1) * cos($lat2)* (sin($dLon/2) * sin($dLon/2)); 
	$c = 2 * atan2(sqrt($a), sqrt(1-$a)); 
	$d = $R * $c;
	
	return $d;
}

?>