<?php







class DB_PostgisController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
    
    
    
    
    
     //load geojson data  
     public function load($area, $subject, $longBR,  $latBR,  $longTL, $latTL)
    {
             $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();

             
             $table_name = $area . "_" . $subject;
             
           /*
             if ($area == "city") 
                 { 
                    $table_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $table_name = "oc_" . $subject;
                    
                 }
             */
             
            $collection = $geodatabase->$table_name;

            /*
                if(!empty($latTL) && !empty($longTL) && !empty($latBR) && !empty($longBR)){

                   //$query = GeoQuery::findbybox(-117.91733264923096,33.676568503347546,-117.90239810943604,33.68606772497501);
                  $query = GeoQuery::findbybox($longBR,  $latBR,  $longTL, $latTL);
                  $count_ = $collection->count($query);
                }
               else {
                   // in case of not box coordinate provide, will find all record
                   $query=null;
                   $count_ = $collection->count();
               }
            */
            
            $query = GeoQuery::findbybox($longBR,  $latBR,  $longTL, $latTL);
                $count_ = $collection->count($query);
           // $count_ = $collection->getSize();
           
                
                 $_max_row_count = Config::get('Max_Row_Count');
            
            if (($count_ > 0) and ($count_ < $_max_row_count)) {
                
                
                            if(!empty($latTL) && !empty($longTL) && !empty($latBR) && !empty($longBR)){
                                        $cursor = $collection->find($query);
                            } else {
                                $cursor = $collection->find();
                            }

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

                                echo $result;
                           
                
            }else {
               
                   echo $count_;
                
            }//else 
                
            
    }// load 
    
    
    
    
    
}//class




