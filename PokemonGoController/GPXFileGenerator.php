<?php
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];

	$gpx = '<gpx creator="Xcode" version="1.1"><wpt lat="'.$longitude.'" lon="'.$latitude.'"><name>PokemonLocation</name></wpt></gpx>';
	
	// if you don't have permission to write file, execute the command below
	// chmod 777 /Users/zwb/Developer/iOS/PokemonHandler/PokemonHandler/pokemonLocation.gpx
	$result = file_put_contents("/Users/zwb/Developer/iOS/PokemonHandler/PokemonHandler/pokemonLocation.gpx", $gpx);

	if ($result) {
		echo '{"success": 1, "errorCode" : 0, "errorMsg" : ""}';
	} else {
		echo '{"success": 0, "errorCode" : -1, "errorMsg" : "write file error!"}';
	}