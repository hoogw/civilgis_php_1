<?php


// connect
$m = new MongoClient();

// select a database
$db = $m->civilgis;

// select a collection (analogous to a relational database's table)
$collection = $db->parks;
//$collection = $db->parcels;
//$collection = $db->zoning;
//$collection = $db->general_landuse;

// add a record
//$document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
//$collection->insert($document);

// add another record, with a different "shape"
//$document = array( "title" => "XKCD", "online" => true );
//$collection->insert($document);

// find everything in the collection
//$cursor = $collection->find();
//$cursor = $collection->find(array('properties.OWNA_'=>38));
//$cursor = $collection->find(array('properties.OWNA_'=>38));

$query="";
$cursor = $collection->find();
$count_all = $collection->count();



//$test = "a,b,c,d,";

// iterate through the results
$result = "{ \"type\": \"FeatureCollection\",\"features\": [";

foreach ($cursor as $document) {
    //echo $document["properties"] . "\n";
     //print_r($document);
     //echo json_encode($document);
    $result = $result.json_encode($document).",";
  
}


$result= substr($result, 0, -1);
$result = $result."]}";

//echo $result;
echo $count_all;

 
?>