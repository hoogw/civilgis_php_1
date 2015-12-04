<?php


// connect
$m = new MongoClient();

// select a database
$db = $m->civilgis;

// select a collection (analogous to a relational database's table)
//$collection = $db->parks;
//$collection = $db->parcels;
$collection = $db->zoning;
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

class GeoQuery {
public static function findbybox($longBR = null,  $latBR = null,  $longTL = null,$latTL = null ) {
		
// TL top-left  BR bottom-right
            $cond = array();	 // must stay, otherwise return will out of scope     
    
            if(!empty($latTL) && !empty($longTL) && !empty($latBR) && !empty($longBR)) {
			
                                    $latTL = floatval($latTL);
                                    $longTL = floatval($longTL);
                                    $latBR = floatval($latBR);
                                    $longBR = floatval($longBR);
                        
			
                                    // TL top-left  BR bottom-right
					$lowerLeft = array($longBR,$latBR);
                                        $upperLeft = array($longBR,$latTL);
                                    
					$upperRight = array($longTL, $latTL);
                                        $lowerRight = array($longTL, $latBR);
                                        
                                        $rectangleCoordinates = array(array($lowerLeft,$upperLeft,$upperRight,$lowerRight,$lowerLeft));
                                        $polygonGeometry =array('$geometry'=>array('type'=>'Polygon', 'coordinates'=>$rectangleCoordinates));
                                        
					$cond = array('geometry'=>array('$geoWithin'=>$polygonGeometry));
					
		
		}//if
		
                return $cond;
                
                
	}// function
}//class



$query = GeoQuery::findbybox(-117.91733264923096,33.676568503347546,-117.90239810943604,33.68606772497501);


$count_ = $collection->count($query);
$cursor = $collection->find($query)->limit(200);



// iterate through the results
$result = "{ \"type\": \"FeatureCollection\",\"features\": [";

foreach ($cursor as $document) {
    
    $result = $result.json_encode($document).",";
  
}


$result= substr($result, 0, -1);
$result = $result."]}";

echo $result;
//echo $count_;
 
?>