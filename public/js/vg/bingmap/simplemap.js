






function ajax_GeoJSON(gmap,_apiURI_returncountonly,_apiURI,_map_click_event) {
    
    // Load a GeoJSON from the server 
   
   
    $.get(_apiURI_returncountonly, function(data_count_only){
                
                
              //{"type":"FeatureCollection","properties":{"count":24362},"features":[]}  
               var data = JSON.parse(data_count_only).properties.count;
                
           if (parseInt(data) < max_return_feature_limit)
                
            {
             

    // test url if return a number means too many polygon to show.otherwise add polygon to map.
    $.get(_apiURI, function (data) {

        



            // ---------   processing data(geoJson) to fill datatables -----------------


                    // ************ bing map geojson loader pushpin(point) bug fix************

            // raw geojson string has "_id":  as point(works fine with polygon/line), bing map will fail display pushpin( marker/icon ), only display first one, hidden the rest.
            // Fix by replace all "_id" to "id", you must have "id" field, if no 'id' field, failed show pushpin. 


            var data_fix_id = data.replace(/_id/g, 'id');



            // ************  End bing map geojson loader point bug fix ************


            // 'data' is string of geojson,  _geojson_object is javascript object, bing map accept both format  
            var _geojson_object = JSON.parse(data_fix_id);




            //----------------Bing map  add new geojson, then remove last geojson --------------------


            _geojson_layer.clear();





            Microsoft.Maps.loadModule('Microsoft.Maps.GeoJson', function () {


                // 'data' is string of geojson,  _geojson_object is javascript object, bing map accept both format, google only accept javascript object format, no string.
                // featureCollection is array of shapes(Pushpin, Polyline, Polygon)
                //featureCollection = Microsoft.Maps.GeoJson.read(_geojson_object, default_geojson_style);
                featureCollection = Microsoft.Maps.GeoJson.read(data_fix_id, default_geojson_style);
                //featureCollection = Microsoft.Maps.GeoJson.read(data_fix_id);

                _geojson_layer.add(featureCollection);


                


            }); // loadmodule

            //------------------------Bing map  end add new geojson, then remove last geojson------------------------- ---------------

            // hidden the title_info
            document.getElementById("ajaxload").style.display = "none";
            document.getElementById("title_info").style.display = "none";
            // document.getElementById("legend").style.display = "none";


            // do not use this, because it have place holder for blank
            //document.getElementById("title_info").style.visibility = "hidden";


            document.getElementById("title_info").innerHTML = "";
            // document.getElementById("legend").innerHTML = "";

            // ------------- map click event [3] -------------------
            if (_map_click_event) {
            }
            else {
                _mapclick_in_use = false;
            }

            //-------------------------------------------------------------




 });// get// end get process geojson
                          
                             
                         } // if < limit
                         
                         
                         // returning number of count  > limit
                         else{ 


            // ---------- if return number, should remove last time geojson -----------



            _geojson_layer.clear();


            //-------------------- end remove last geojson ------------------------------



            //---------------marker cluster  [2.3]-------------------
            //  need to clear old last time marker clusters.
            // markerClusterer.clearMarkers();


            document.getElementById("ajaxload").style.display = "none";
            document.getElementById("title_info").style.display = "inline";
            //  document.getElementById("legend").style.display = "inline";

            if (data > 0) {

                document.getElementById("title_info").innerHTML = "Found [ " + data + " ] records ZOOM IN for Details  ";

                // document.getElementById('legend').innerHTML = "Found [ " + data + " ] records ZOOM IN for Details ";

            } else {

                document.getElementById("title_info").innerHTML = "Nothing found";
                //   document.getElementById("legend").innerHTML = "Nothing found";
            }



            // ------------- map click event [4] -------------------

            _mapclick_in_use = true;

            //-------------------------------------------------------------


        }// else return number only

    });// get


}// function ajax_GeoJSON


function initialize() {
    
    
    
    
    initial_location = set_initial_location($("#areaID").val());

    


    init_base_map();

    add_area_boundary($("#areaID").val());


    geocoding();

    init_tiling();

     //bing map layer data event
       add_mapdata_listener();

      add_map_listener();
       

    // first time load geojson
             get_map_bound();

        
    }// initialize
    
    

$(document).ready(function () {


 base_url = document.getElementById('base_url').value;

        
    // <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?branch=release&callback=initialize' async defer></script> 
    // callback function already define initialize, so no need here. 

   // initialize();
    
    

    }); // document ready function