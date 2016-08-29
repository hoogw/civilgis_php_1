<?php

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
                                        
                                        // geoWithin missing those polygon at the edge. Should use geoIntersects
					//$cond = array('geometry'=>array('$geoWithin'=>$polygonGeometry));
                                        $cond = array('geometry'=>array('$geoIntersects'=>$polygonGeometry));
					
		
		}//if
		
                return $cond;
                
                
	}// function
}//class








class ApiController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
    
    
    
    
    
    
    
    
    public function maplistcontent($area)
    {
         $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
       
       
        // get list of all "chicago_xxx"
        // db.getCollectionNames().filter(function (c) { return c.indexOf('chicago_') == 0; })
        
        $collectionNameAll = $geodatabase->getCollectionNames();

        
        
        // iterate through this array to filter out the collection name with "area_"
        $j = 0;
        $area = $area."_";
        $collectionNamefiltered = array();
        foreach ($collectionNameAll as $collectionName) 
            {
            
                    $pos = strpos($collectionName,$area );

                    
                    if ($pos === false) {
                           // not found area_ in collection name, do nothing
                               }
                    
                    else {
                        $j=$j+1;
                        
                        $row = array();  
                        array_push($row,$j);
                        //array_push($row,(string)$j);
                        
                        array_push($row,$collectionName);
                         $collectionNamefiltered[] = $row;
                         //array_push($collectionNamefiltered,$collectionName);
                        }  
                       
            }// for

        //output format [["1","oc_address"],["2","oc_bounds"],["3","oc_cities"],["4","oc_education_facility"],["5","oc_fire_grid"],["6","oc_fire_stations"],["7","oc_hospitals"],["8","oc_hwy_majorrd"],["9","oc_rails"],["10","oc_streets"],["11","oc_water"]]      
                           
         echo json_encode($collectionNamefiltered);  // send data as json format
                            
                            
                            
                            
                                
    }// maplistcontent
    
    
    
    
    
    
    
    
    
    public function listcontent($area)
    {
      // $tabledata_name = $area . "_" .  $subject;
       $mysqli_conn = DatabaseFactory::getFactory()->getMysqliConnection();
     
       
        $requestData= $_REQUEST;
       
       
       // get all the column name
                            $sql = "SELECT table_name FROM information_schema.COLUMNS ";
                            $sql .=   " where table_schema = '". Config::get('DB_NAME'). "'" ; 
                            $sql .=  "  and table_name like '".$area."_%' ";
                            $sql .=  "  group by table_name";
                            
                            $result = mysqli_query($mysqli_conn,$sql);
                     
                           $totalData = mysqli_num_rows($result);
                            $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
                            
                            if( !empty($requestData['search']['value']) ) 
                                {
                                    
                                    // if there is a search parameter
                                 
                                    $sql = "SELECT table_name  ";
                                    $sql.= " FROM information_schema.COLUMNS ";
                                    $sql .=   " where table_schema = '". Config::get('DB_NAME'). "'" ; 
                                    $sql .=  "  and table_name like '".$area."_%' ";
                                   
                                    $sql.=" and table_name LIKE '%".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
                                   
                                    $sql .=  "  group by table_name";
                                    
                                    //$query=mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees");
                                    $result=mysqli_query($mysqli_conn, $sql);
                                            
                                            
                                    $totalFiltered = mysqli_num_rows($result); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
                                    //$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
                                    $sql .= " ORDER BY table_name"."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";                                    

                                    //$query=mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees"); // again run query with limit
                                    $result=mysqli_query($mysqli_conn, $sql);
                                    
                                } else 
                                    {	
                                    //$sql = "SELECT Name, Position_Title, Department, Employee_Annual_Salary ";
                                    $sql  = "SELECT table_name  ";
                                    $sql .= " FROM information_schema.COLUMNS ";
                                    $sql .=   " where table_schema = '". Config::get('DB_NAME'). "'" ; 
                                    $sql .=  "  and table_name like '".$area."_%' ";
                                    $sql .=  "  group by table_name ";
                                    
                                    // order by must be after group by
                                    // because columns are fixed, so no need to get columns, columns are always table_name.
                                    //$sql .= " ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";                                   
                                    $sql .= " ORDER BY table_name "."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
                                    
                                   // $sql .= " ORDER BY table_name ";
                                     
                                     
                                    //$query=mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees");
                                    $result=mysqli_query($mysqli_conn, $sql);
                                    }
                            
                            
                     
                                
                            $data = array();
                            
                            while( $row=mysqli_fetch_array($result) ) 
                                    {  
                                          
                                            $data[] = $row;
                                    }
                              
                                    
                                    // free the result set
                                    mysqli_free_result($result);
                                    
                            $json_data = array(
                                                    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                                                    "recordsTotal"    => intval( $totalData ),  // total number of records
                                                    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
                                                    "data"            => $data   // total data array
                                                    );
                            echo json_encode($json_data);  // send data as json format
                            
                            
                            
                            
                                
    }// listcontent
    
    
    
    public function maptableheader($area, $subject)
    {
       $maptable_name = $area . "_" .  $subject;
       $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
     
        /*
             if ($area == "city") 
                 { 
                    $maptable_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $maptable_name = "oc_" . $subject;
                    
                 }
         */  
         
             
            $collection = $geodatabase->$maptable_name;
       
       
       
       
       
       
       // get all the column name
            
            $columns = array(); 
            
            
          // -------------  findone() ---------------  
            $cursor_one = $collection->findOne();     
            $propertiesObj = $cursor_one["properties"]; 
                    
           ksort($propertiesObj);
           foreach($propertiesObj as $key => $value)
               {
                     $columns[] = $key;
                }
           
                        
                        $columns[] ="geoFID";
                        $columns[] ="geometry_type";
                        $columns[] ="coordinate";
         //------------------------------------------------                       
                       
                   
            
           //================== above use findone(), below section use find().limit(1) both works. ===================
          /*  
            $_cursor = $collection->find()->limit(1);
            
            foreach ($_cursor as $doc) {
                
                       //var_dump(array_keys($doc));   // result array(4) { [0]=> string(3) "_id" [1]=> string(4) "type" [2]=> string(10) "properties" [3]=> string(8) "geometry" }
                        //$geoIDobj = $doc["_id"];             
                        //$geoFID = $geoID->$id;
                        $propertiesObj = $doc["properties"]; 
                        //$geometryObj = $doc["geometry"]; 
                        
                    
                        
                        foreach($propertiesObj as $key => $value)
                                {
                                  $columns[] = $key;
                                }
                        
                        $columns[] ="Lat";
                        $columns[] ="Long";
                        $columns[] ="GeoFID";
                       
                    }// foreach doc
            */
            //==========================================================================================================
            
          
         
                                    
                            $headers = array(
                                                     "columns" => $columns   
                                                    );
                            echo json_encode($headers);  // send data as json format
                     
                
                
                                
                                
    }// mapheader
   
    
    
    public function maptabledatatest($area, $subject)
    {
       $maptable_name = $area . "_" .  $subject;
       $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
     
        //if (strcmp($area, "city")==0)
             if ($area == "city") 
                 { 
                    $maptable_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $maptable_name = "oc_" . $subject;
                    
                 }
             
            $collection = $geodatabase->$maptable_name;
       
       
       
       
       
       
       // get all the column name
            
            $columns = array(); 
            $cells = array(); 
               
          
            
            $_cursor = $collection->find()->limit(1);
            
            foreach ($_cursor as $doc) {
                
                       //var_dump(array_keys($doc));   // result array(4) { [0]=> string(3) "_id" [1]=> string(4) "type" [2]=> string(10) "properties" [3]=> string(8) "geometry" }
                       
                        //_id
                        $geoIDobj = $doc["_id"];                                   
                        $geoIDobjvar = get_object_vars($geoIDobj);
                        $geoFID = array_values($geoIDobjvar)[0];
                        
                        
                        // properties
                        $propertiesObj = $doc["properties"]; 
                        
                        ksort($propertiesObj);
                        
                        foreach($propertiesObj as $key => $value)
                                {
                                  $columns[] = $key; 
                                  $cells[] = $value;
                                }
                        
                         // geometry
                           $geometryObj = $doc["geometry"];    
                             
                           
                           
                                
                         // last 3 column  
                       //sort($columns);
                
                        $columns[] ="Lat";
                        $columns[] ="Long";
                        $columns[] ="GeoFID";  
                           
                        $cells[] =$geometryObj["coordinates"][0][0][1];
                        $cells[] =$geometryObj["coordinates"][0][0][0];
                        $cells[] =$geoFID;
                       
                    }// foreach doc
            
            //==========================================================================================================
            
          
         
                                    
                            $headers = array(
                                                     "columns" => $columns,  
                                                     "cells"=> $cells
                                                    );
                            echo json_encode($headers);  // send data as json format
                            //var_dump($geometryObj["coordinates"][0][0][1]);
                             
                
                                
                                
    }// tableheader
    
    
    
    public function maparealimit($area, $subject)
    {
        
        
         $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();

             
             $table_name = $area . "_Limit";
             
          
             
            $collection = $geodatabase->$table_name;

           
            $cursor = $collection->find();
                            

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
                
    }//maparealimit
    
    
    
    
    // ======================== currently in USE ==========================================
    // mapdata return arry of object [{name:aaa}, {age:19}...]
    // maptabledata return array [aaa, 19,....]
    // when they feed to datatables, different type of datasource. 
    
    public function maptabledata($area, $subject)
    {
    
        // storing  request (ie, get/post) global array to a variable  
        $requestData= $_REQUEST;
        
        $maptable_name = $area . "_" .  $subject;
        $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
     
        /*
             if ($area == "city") 
                 { 
                    $maptable_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $maptable_name = "oc_" . $subject;
                    
                 }
           */  
            $collection = $geodatabase->$maptable_name;
            $cursor = null;
       
      

              // -----------------  1 ------------  get all the column name  ----------------
            
                               

                                $columns = array(); 

                               /* 
                             
                                $cursor_one = $collection->findOne();     
                                $propertiesObj = $cursor_one["properties"]; 

                               foreach($propertiesObj as $key => $value)
                                   {
                                         $columns[] = $key;
                                    }

                                    sort($columns);

                                           
                                                   
                                 */          


                               //================== above use findone(), below section use find().limit(1) both works. ===================

                                $_cursor = $collection->find()->limit(1);

                                foreach ($_cursor as $doc) {

                                            $propertiesObj = $doc["properties"]; 
                                            ksort($propertiesObj);
                                            
                                            foreach($propertiesObj as $key => $value)
                                                    {
                                                      $columns[] = $key;
                                                    }
                                           
                                        }// foreach doc

                                
          //  -------------------------END of 1  --------------- get all the column name  
            
            
                            
                           
                            
             // ------------- 2 --------------- getting total number records without any search
                            
                            
                            $totalData = $collection->count();
                            $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
                
                            
            // --------------  3   -------------- if there is search value, need to filter  --------------------------------------  
                            
                            $_search_value = $requestData['search']['value'];
                            
                            // the last i means case insensitive
                            $_search_Regex = '/'.$_search_value.'/i';
                            $_search_Regex2 = '/'.$_search_value.'.*/.test(this.properties.';
                            
                                  // ------ sort ---- order by ----------------
                                   
                                    
                                    $_asc_desc = 1;
                                    if (strtoupper($requestData['order'][0]['dir']) == 'ASC')
                                    {
                                        $_asc_desc = 1;
                                    }else {
                                        $_asc_desc = -1;
                                    }
                                    
                                    $_sort_by_column =  'properties.'.$columns[$requestData['order'][0]['column']];
                                    
                                     $_sort_array = array( $_sort_by_column =>$_asc_desc);
                            
                            
                            
                            if( !empty($requestData['search']['value']) ) 
                                {
                                
                                    // if there is a search parameter
                                 /* 
                                  db.parks.find({"properties.NAME_ALF":/WILSON/})
                                  
                                  find(array('$or' => array(
                                            array("brand" => "anti-clothes"),
                                            array("allSizes" => "small")
                                          )));
                                   
                                   $db->users->find(array("name" => new MongoRegex("/Joe/")));
                                 */
                             
                                
                                /* sample query
                                 
                                db.parks.find({"properties.NAME_ALF":/WILSON/})
                                SELECT * FROM users WHERE a=1 or b=2	$db->users->find(array('$or' => array(array("a" => 1), array("b" => 2))));
                              SELECT * FROM users WHERE name LIKE "%Joe%"	$db->users->find(array("name" => new MongoRegex("/Joe/")));  
                               
                                 find any '%build%' case insensitive  
                                  db.parcels.find({'properties.OWNER_NAME':{$regex:/build/i}});
                                 */
                              
                               
                                  
                                   
                                   //var_dump($_search_Regex2);
                                   
                                   $_or_statment = array();
                                   $_or_statment2 = array();
                                   
                                    for ($i = 0; $i < count($columns); ++$i) {
                                        
                                        // ---------- search method 1 regex can only search for text string typed column, can't search against double int column because search value has 
                                        //  single quote, search int double column, the search value should not have single quote ----------------
                                         $_properties_key = 'properties.'.$columns[$i];
                                         $_or_item = array($_properties_key => new MongoRegex($_search_Regex));
                                               
                                         // use array_push($array, element); or use $array[]= element;  missing [] will cause error
                                         $_or_statment[] = $_or_item;
                                         //----------------------------- end ---------- 1 -----------------------------------------------------------------------
                                         
                                         
                                       
                                         //-------------search method 2 use where and javascript, against int,double,string, any type column but too slow ---------------
                                         $_where_js_code = $_search_Regex2.$columns[$i].')';
                                         //var_dump($_where_js_code);
                                         $_or_item2 = array('$where' => new MongoCode($_where_js_code));
                                         $_or_statment2[] = $_or_item2;
                                        //-------------------------------- end ----- 2 ------------------------------------------------------------------------------------    
                                        
                                         
                                        }// for
                                        
                                        
                                    $nosql = array(
                                                    '$or' => $_or_statment
                                                    //  '$or' => $_or_statment2
                                                   ); 
                                    
                                  
                                     
                                    
                                    $totalFiltered = $collection->find($nosql)->count();  // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
                                    
                                    
                                     
                                    $cursor = $collection->find($nosql)  
                                                            ->sort($_sort_array)   
                                                            ->limit($requestData['length'])                
                                                            ->skip($requestData['start']);
                                    
                                    
                                } else 
                                    {	
                                    
                                    $cursor = $collection->find()  
                                                            ->sort($_sort_array)   
                                                            ->limit($requestData['length'])                
                                                            ->skip($requestData['start']);
                                    
                                    }
                                    
                            $data = array();
                        
                            
                            
                            
                       //=================  iterate through cursor ===============     
               foreach ($cursor as $doc) {
                
                       //var_dump(array_keys($doc));   // result array(4) { [0]=> string(3) "_id" [1]=> string(4) "type" [2]=> string(10) "properties" [3]=> string(8) "geometry" }
                       
                        //_id
                        $geoIDobj = $doc["_id"];                                   
                        $geoIDobjvar = get_object_vars($geoIDobj);
                        $geoFID = array_values($geoIDobjvar)[0];
                        
                        
                        // properties
                        $propertiesObj = $doc["properties"]; 
                        
                        ksort($propertiesObj);
                        
                        $propertiesObj["geoFID"] = $geoFID;
                       
                        
                         // geometry
                        $geometryObj = $doc["geometry"];    
                        $geometry_type = $geometryObj["type"];
                        
                           
                        if ($geometry_type === "Polygon"){
                            
                                        $propertiesObj["geometry_type"] = "Polygon";
                                        $propertiesObj["coordinate"] =$geometryObj["coordinates"];
                                        
                        }elseif ($geometry_type === "LineString"){
                            
                                        $propertiesObj["geometry_type"] = "LineString";
                                        $propertiesObj["coordinate"] = $geometryObj["coordinates"];
                                        
                                        
                                }elseif ($geometry_type === "Point"){
                                    
                                        $propertiesObj["geometry_type"] = "Point";
                                        $propertiesObj["coordinate"] =$geometryObj["coordinates"];
                                        
                                         } else {
                                             // No geometry 
                                             $propertiesObj["geometry_type"] = "No_Geometry";
                                             $propertiesObj["coordinate"] = "No_Coordinate";
                                         }
                        
                                         
                                         
                                         
                        
                        $data[] = $propertiesObj;
                        
                       
                       
                 }// foreach doc
                    
                    
                   
                    //===================================================
                            
                          
                                    
                                  
                                    
                            $json_data = array(
                                                    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                                                    "recordsTotal"    => intval( $totalData ),  // total number of records
                                                    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
                                                    "data"            => $data   // total data array
                                                    );
                            echo json_encode($json_data);  // send data as json format
    
    }
    
    
    public function tableheader($area, $subject)
    {
       $tabledata_name = $area . "_" .  $subject;
       $mysqli_conn = DatabaseFactory::getFactory()->getMysqliConnection();
     
       // get all the column name
                            $sql = "SHOW COLUMNS FROM ".$tabledata_name;
                            $result = mysqli_query($mysqli_conn,$sql);
                     
                            $columns = array(); 
                            while($row = mysqli_fetch_array($result))
                                {
                                    // columns name is the first "Field" column or index [0] 
                                     $columns[] = $row["Field"];
                                     
                                     //if use mysqli_fetch_row() above then use below 
                                    // $columns[] = $row[0];
                                }
                            
                            // remove the first column which is ID    
                           // $columns = array_shift($columns0);
    
                                
                     // free the result set
                            mysqli_free_result($result);
                                    
                            $headers = array(
                                                     "columns" => $columns   
                                                    );
                            echo json_encode($headers);  // send data as json format
                                
                                
                                
    }// tableheader
   
    
    
    
    public function tabledata($area, $subject)
    {
    
        // storing  request (ie, get/post) global array to a variable  
        $requestData= $_REQUEST;
        /*
        $request_search_value =  $requestData['search']['value']; 
        $request_order_column =  $requestData['order'][0]['column'];
        
        
        if( !empty($requestData['search']['value']) ) 
           {
                 $request_search_value =  $requestData['search']['value']; 
                 $request_order_column =  $requestData['order'][0]['column'];
                }
                else {
                 $request_order_column =  $requestData['order'][0]['column'];
                }
        */
        
        
        
       $tabledata_name = $area . "_" .  $subject;
     
       
       $mysqli_conn = DatabaseFactory::getFactory()->getMysqliConnection();

              // get all the column name
                            $sql_like = "";
                            $j=0;
                            $sql = "SHOW COLUMNS FROM ".$tabledata_name;
                            $result = mysqli_query($mysqli_conn,$sql);
                     
                            $columns = array(); 
                            while($row = mysqli_fetch_array($result))
                                {
                                    // columns name is the first "Field" column or index [0] 
                                     $columns[] = $row["Field"];
                                     
                                     //if use mysqli_fetch_row() above then use below 
                                    // $columns[] = $row[0];
                                     
                                    
                                }
                            
                            // remove the first column which is ID    
                           // $columns = array_shift($columns0);
       
                           /*
                            $columns = array( 
                            // datatable column index  => database column name
                                    0 =>'Id',
                                    1 =>'Name', 
                                    2 => 'Position_Title',
                                    3 => 'Department',
                                    4 => 'Employee_Annual_Salary'
                            );
                            
                            */
                            
                            // getting total number records without any search
                            
                            $sql = "SELECT *  ";
                            $sql.=" FROM ".$tabledata_name;
                            
                            //$query = mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees");
                            $query = mysqli_query($mysqli_conn, $sql);
                            
                            
                            $totalData = mysqli_num_rows($query);
                            $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
                            
                            if( !empty($requestData['search']['value']) ) 
                                {
                                    
                                    // if there is a search parameter
                                   
                                    $sql = "SELECT *  ";
                                    $sql.= " FROM ".$tabledata_name." WHERE ";
                                   
                                    for ($i = 0; $i < count($columns); ++$i) {
                                        
                                         if ($i > 0) 
                                                { 
                                                   $sql.= " OR "; 
                                                  
                                                }

                                            $sql.= $columns[$i]." LIKE '%".$requestData['search']['value']."%' ";
                                            
                                        }
                                    
                                    
                                    /*
                                    $sql.=" WHERE Name LIKE '%".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
                                    $sql.=" OR Position_Title LIKE '%".$requestData['search']['value']."%' ";
                                    $sql.=" OR Department LIKE '%".$requestData['search']['value']."%' ";
                                    $sql.=" OR Employee_Annual_Salary LIKE '%".$requestData['search']['value']."%' ";
                                    */
                                    
                                    //$query=mysqli_query($mysqli_conn, $sql) or die("failed to fetch data from DB");
                                    $query=mysqli_query($mysqli_conn, $sql);
                                            
                                            
                                    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
                                    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
                                    

                                    //$query=mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees"); // again run query with limit
                                    $query=mysqli_query($mysqli_conn, $sql);
                                    
                                } else 
                                    {	
                                    
                                    $sql = "SELECT *  ";
                                    $sql.= " FROM ".$tabledata_name;
                                    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
                                   
                                    //$query=mysqli_query($mysqli_conn, $sql) or die("employee-grid-data.php: get employees");
                                    $query=mysqli_query($mysqli_conn, $sql);
                                    }
                                    
                            $data = array();
                            
                            while( $row=mysqli_fetch_array($query) ) 
                                    {  
                                          //get all column, all value
                                
                                        
                                            $data[] = $row;
                                    }
                              
                                    
                                    // free the result set
                                    mysqli_free_result($query);
                                    
                            $json_data = array(
                                                    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                                                    "recordsTotal"    => intval( $totalData ),  // total number of records
                                                    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
                                                    "data"            => $data   // total data array
                                                    );
                            echo json_encode($json_data);  // send data as json format
    
    }
    
    
     //Not in use, for may be for some old pages only.....load geojson data  
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
    
    
    
    // currently in USE, loadall generate large amount of data here compare to load()    
    public function loadall($area, $subject, $longBR,  $latBR,  $longTL, $latTL)
    {
             $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();

             
             $table_name = $area . "_" . $subject;
             
           
             
            $collection = $geodatabase->$table_name;

           
            
            $query = GeoQuery::findbybox($longBR,  $latBR,  $longTL, $latTL);
                $count_ = $collection->count($query);
           // $count_ = $collection->getSize();
           
                
                 $_max_row_count = Config::get('Max_Row_Count');
            
       // loadall generate large amount of data here.          
            if (($count_ > 0) and ($count_ < $_max_row_count)) {
            
                
                            if(!empty($latTL) && !empty($longTL) && !empty($latBR) && !empty($longBR)){
                                        $cursor = $collection->find($query);
                            } else {
                                $cursor = $collection->find();
                            }

                                // iterate through the results
                                $result = "{ \"type\": \"FeatureCollection\",\"features\": [";

                                foreach ($cursor as $document) {
                                    
                                    $result = $result.json_encode($document).",";

                                }

                                $result= substr($result, 0, -1);
                                $result = $result."]}";

                                echo $result;
                           
                
            }else {
               
                   echo $count_;
                
            }//else 
                
            
    }// 
    
    
    
    
    
    // currently in USE, for  mobile small amount max 300 
    public function loadall_mobile($area, $subject, $longBR,  $latBR,  $longTL, $latTL)
    {
             $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();

             
             $table_name = $area . "_" . $subject;
             
           
             
            $collection = $geodatabase->$table_name;

           
            
            $query = GeoQuery::findbybox($longBR,  $latBR,  $longTL, $latTL);
                $count_ = $collection->count($query);
           // $count_ = $collection->getSize();
           
                
                 $_max_row_count = Config::get('Max_Row_Count_mobile');
            
       // loadall generate large amount of data here.          
            if (($count_ > 0) and ($count_ < $_max_row_count)) {
            
                
                            if(!empty($latTL) && !empty($longTL) && !empty($latBR) && !empty($longBR)){
                                        $cursor = $collection->find($query);
                            } else {
                                $cursor = $collection->find();
                            }

                                // iterate through the results
                                $result = "{ \"type\": \"FeatureCollection\",\"features\": [";

                                foreach ($cursor as $document) {
                                    
                                    $result = $result.json_encode($document).",";

                                }

                                $result= substr($result, 0, -1);
                                $result = $result."]}";

                                echo $result;
                           
                
            }else {
               
                   echo $count_;
                
            }//else 
                
            
    }// 
    
    
    
    
    
    
    //==========================   NOT  IN  USE  ====================================
    
    
    // mapdata return arry of object [{name:aaa}, {age:19}...]
    // maptabledata return array [aaa, 19,....]
    // when they feed to datatables, different type of datasource. 
    // version2 for mapadvp and mapadvs only  ( Not in USE )
    public function maptabledata2($area, $subject)
    {
    
        // storing  request (ie, get/post) global array to a variable  
        $requestData= $_REQUEST;
        
        $maptable_name = $area . "_" .  $subject;
        $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
     
        /*
             if ($area == "city") 
                 { 
                    $maptable_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $maptable_name = "oc_" . $subject;
                    
                 }
          */  
         
             
            $collection = $geodatabase->$maptable_name;
            $cursor = null;
       
      

              // -----------------  1 ------------  get all the column name  ----------------
            
                               

                                $columns = array(); 

                               /* 
                             
                                $cursor_one = $collection->findOne();     
                                $propertiesObj = $cursor_one["properties"]; 

                               foreach($propertiesObj as $key => $value)
                                   {
                                         $columns[] = $key;
                                    }

                                    sort($columns);

                                           
                                                   
                                 */          


                               //================== above use findone(), below section use find().limit(1) both works. ===================

                                $_cursor = $collection->find()->limit(1);

                                foreach ($_cursor as $doc) {

                                            $propertiesObj = $doc["properties"]; 
                                            ksort($propertiesObj);
                                            
                                            foreach($propertiesObj as $key => $value)
                                                    {
                                                      $columns[] = $key;
                                                    }
                                           
                                        }// foreach doc

                                
          //  -------------------------END of 1  --------------- get all the column name  
            
            
                            
                           
                            
             // ------------- 2 --------------- getting total number records without any search
                            
                            
                            $totalData = $collection->count();
                            $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
                
                            
            // --------------  3   -------------- if there is search value, need to filter  --------------------------------------  
                            
                            
                            
                                  // ------ sort ---- order by ----------------
                                   
                                    
                                    $_asc_desc = 1;
                                    if (strtoupper($requestData['order'][0]['dir']) == 'ASC')
                                    {
                                        $_asc_desc = 1;
                                    }else {
                                        $_asc_desc = -1;
                                    }
                                    
                                    $_sort_by_column =  'properties.'.$columns[$requestData['order'][0]['column']];
                                    
                                     $_sort_array = array( $_sort_by_column =>$_asc_desc);
                            
                            
                            
                            if( !empty($requestData['search']['value']) ) 
                                {
                                
                                      $_search_value = $requestData['search']['value'];
                                      $_search_Regex = '/'.$_search_value.'/i';

                                
                                    // if there is a search parameter
                                 /* 
                                  db.parks.find({"properties.NAME_ALF":/WILSON/})
                                  
                                  find(array('$or' => array(
                                            array("brand" => "anti-clothes"),
                                            array("allSizes" => "small")
                                          )));
                                   
                                   $db->users->find(array("name" => new MongoRegex("/Joe/")));
                                 */
                                   
                                   $_or_statment = array();
                                   
                                    for ($i = 0; $i < count($columns); ++$i) {
                                        
                                         // ---------- search method 1 regex can only search for text string typed column, can't search against double int column because search value has 
                                        //  single quote, search int double column, the search value should not have single quote ----------------
                                         $_properties_key = 'properties.'.$columns[$i];
                                         $_or_item = array($_properties_key => new MongoRegex($_search_Regex));
                                               
                                         // use array_push($array, element); or use $array[]= element;  missing [] will cause error
                                         $_or_statment[] = $_or_item;
                                         //----------------------------- end ---------- 1 -----------------------------------------------------------------------
                                            
                                        }// for
                                        
                                        
                                    $nosql = array(
                                                    '$or' => $_or_statment
                                                   ); 
                                    
                                   
                                         
                                        
                                    
                                    $totalFiltered = $collection->find($nosql)->count();  // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
                                    
                                    
                                     
                                    $cursor = $collection->find($nosql)  
                                                            ->sort($_sort_array)   
                                                            ->limit($requestData['length'])                
                                                            ->skip($requestData['start']);
                                     
                                   

                                    
                                } else 
                                    {	
                                    
                                    $cursor = $collection->find()  
                                                            ->sort($_sort_array)   
                                                            ->limit($requestData['length'])                
                                                            ->skip($requestData['start']);
                                    
                                    }
                                    
                            $data = array();
                            
                            
                       //=================  iterate through cursor ===============     
               foreach ($cursor as $doc) {
                
                       //var_dump(array_keys($doc));   // result array(4) { [0]=> string(3) "_id" [1]=> string(4) "type" [2]=> string(10) "properties" [3]=> string(8) "geometry" }
                       
                        //_id
                        $geoIDobj = $doc["_id"];                                   
                        $geoIDobjvar = get_object_vars($geoIDobj);
                        $geoFID = array_values($geoIDobjvar)[0];
                        
                        
                        // properties
                        $propertiesObj = $doc["properties"]; 
                        
                        ksort($propertiesObj);
                        
                        $cells = array();
                        foreach($propertiesObj as $key => $value)
                                {
                                  //$columns[] = $key; 
                                  $cells[] = $value;
                                }
                        
                         // geometry
                        $geometryObj = $doc["geometry"];    
                             
                        $geometry_type = $geometryObj["type"];
                           
                        if ($geometry_type === "Polygon"){
                                        $cells[] =$geometryObj["coordinates"][0][0][1];
                                        $cells[] =$geometryObj["coordinates"][0][0][0];
                        }elseif ($geometry_type === "LineString"){
                                        $cells[] =$geometryObj["coordinates"][0][1];
                                        $cells[] =$geometryObj["coordinates"][0][0];
                                }elseif ($geometry_type === "Point"){
                                        $cells[] =$geometryObj["coordinates"][1];
                                        $cells[] =$geometryObj["coordinates"][0];
                                         } else {
                                             // no lat long found,put 0 by default
                                             $cells[] = 999;
                                             $cells[] = 999;
                                             
                                         }
                        
                        
                        $cells[] =$geoFID;
                        
                        $data[] = $cells;
                        
                        unset($cells); // empty this row 
                       
                 }// foreach doc
                    
                    
                   
                    //===================================================
                            
                          
                                    
                                  
                                    
                            $json_data = array(
                                                    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                                                    "recordsTotal"    => intval( $totalData ),  // total number of records
                                                    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
                                                    "data"            => $data   // total data array
                                                    );
                            echo json_encode($json_data);  // send data as json format
    
    }
    
    
    
    // version2 for mapadvp and mapadvs only ( Not in USE )
    public function maptableheader2($area, $subject)
    {
       $maptable_name = $area . "_" .  $subject;
       $geodatabase = DatabaseFactory::getFactory()->getGeoConnection();
     
        /*
             if ($area == "city") 
                 { 
                    $maptable_name = $subject;
                    
                 }
             if ($area == "county") 
                 { 
                    $maptable_name = "oc_" . $subject;
                    
                 }
         */ 
         
             
            $collection = $geodatabase->$maptable_name;
       
       
       
       
       
       
       // get all the column name
            
            $columns = array(); 
            
            
          // -------------  findone() ---------------  
            $cursor_one = $collection->findOne();     
            $propertiesObj = $cursor_one["properties"]; 
                    
           ksort($propertiesObj);
           foreach($propertiesObj as $key => $value)
               {
                     $columns[] = $key;
                }
           
               //sort($columns);
                
                        $columns[] ="Lat";
                        $columns[] ="Long";
                        $columns[] ="GeoFID";
         //------------------------------------------------                       
                       
                   
            
           //================== above use findone(), below section use find().limit(1) both works. ===================
          /*  
            $_cursor = $collection->find()->limit(1);
            
            foreach ($_cursor as $doc) {
                
                       //var_dump(array_keys($doc));   // result array(4) { [0]=> string(3) "_id" [1]=> string(4) "type" [2]=> string(10) "properties" [3]=> string(8) "geometry" }
                        //$geoIDobj = $doc["_id"];             
                        //$geoFID = $geoID->$id;
                        $propertiesObj = $doc["properties"]; 
                        //$geometryObj = $doc["geometry"]; 
                        
                    
                        
                        foreach($propertiesObj as $key => $value)
                                {
                                  $columns[] = $key;
                                }
                        
                        $columns[] ="Lat";
                        $columns[] ="Long";
                        $columns[] ="GeoFID";
                       
                    }// foreach doc
            */
            //==========================================================================================================
            
          
         
                                    
                            $headers = array(
                                                     "columns" => $columns   
                                                    );
                            echo json_encode($headers);  // send data as json format
                     
                
                
                                
                                
    }// tableheader
   
    
    //===============================================================================
}//class




