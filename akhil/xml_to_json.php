<?php 
	
	$xml_string = '<company>
    <name>Outlandish Ideas</name>
    <link href="http://outlandishideas.co.uk">Website</link>
    <person>Abi</person>
    <person>Harry</person>
    <person>Rasmus</person>
    <person>Tamlyn</person>
    <address street="yes">
        <street>Longford Street</street>
        <city>London</city>
    </address>
</company>';
	
	// $xml = simplexml_load_file("myfile.xml");
	// echo xml2js($xml);
	$xml   = simplexml_load_string($xml_string);
	$json  = json_encode($xml);
	$array = json_decode($json,TRUE);
	echo "<pre>"; print_r($array); die;

?>