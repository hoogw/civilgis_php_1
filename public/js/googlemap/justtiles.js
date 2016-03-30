












// ---------- map click event [3]--------add _map_click --------

function ajax_GeoJSON(gmap,_apiURI,_map_click_event) {
    
    // Load a GeoJSON from the server 
   
   
   
             //------tile[3] ---------
                     add_tiles();
            
           
            
            
            // test url if return a number means too many polygon to show.otherwise add polygon to map.
            $.get(_apiURI, function(data){
           
                        if(isNaN(data)){
                           
                        

                             var _geojson_object = JSON.parse(data);


                             


                            //----------------  add new geojson, then remove last geojson --------------------

                              gmap.data.setStyle({
                                  fillOpacity: _default_fillOpacity,
                                  strokeColor: _default_strokeColor,
                                  strokeWeight: _default_strokeWeight

                              });

                              _last_geojson_layer = _current_geojson_layer;

                              _current_geojson_layer = gmap.data.addGeoJson(_geojson_object);

                              

                            // ---- after add new geojson, now remove last time old geojson -------------
                            // don't use Array.ForEach is about 95% slower than for() in JavaScript.

                              if (_last_geojson_layer){
                              
                                  for (var l = 0, len = _last_geojson_layer.length; l < len; l++)
                                  {
                                  
                                              gmap.data.remove(_last_geojson_layer[l]);

                                          }// for
                              }// if
                               

                            //------------------------end add new geojson, then remove last geojson------------------------- ---------------



                          
                           
                           
                           // hidden the title_info
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "none";
                            document.getElementById("legend").style.display = "none";


                            // do not use this, because it have place holder for blank
                            //document.getElementById("title_info").style.visibility = "hidden";


                            document.getElementById("title_info").innerHTML = "";
                            document.getElementById("legend").innerHTML = "";
                            
                           
                          
                          // ------------- map click event [3] -------------------
                            if (_map_click_event)
                                {
                                            }
                                else{
                                    _mapclick_in_use = false;
                                }
                            
                          //-------------------------------------------------------------
                          
                          
                           
                        }
                             // returning number of count
                        else{ 
                            
                            
                            // ---------- if return number, should remove last time geojson -----------
                            _last_geojson_layer = _current_geojson_layer;
                            if (_last_geojson_layer) {

                                for (var l = 0, len = _last_geojson_layer.length; l < len; l++) {

                                    gmap.data.remove(_last_geojson_layer[l]);

                                }// for
                            }// if
                            //-------------------- end remove last geojson ------------------------------
                                                                                            
                                                                                                        
                             
                            
                            
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "inline";
                            document.getElementById("legend").style.display = "inline";
                            
                            if (data > 0) {
                                    
                                            document.getElementById("title_info").innerHTML = "Found [ " + data + " ] records ZOOM IN for Details  ";

                                         document.getElementById('legend').innerHTML = "Found [ " + data + " ] records ZOOM IN for Details ";

                                     } else {
                
                                            document.getElementById("title_info").innerHTML = "Nothing found";
                                            document.getElementById("legend").innerHTML = "Nothing found";
                                }
                                
                                
                       // ------------- map click event [4] -------------------

                            _mapclick_in_use = true;

                            //-------------------------------------------------------------


                        }// else return number only

                     });// get
    
    
}// function ajax_GeoJSON




function initialize() {
    
    add_area_boundary($("#areaID").val());
    
    
    infowindow = new google.maps.InfoWindow();
        
         //   base_url = '/civilgis/public/';
         base_url = document.getElementById('base_url').value;
         
        // alert(base_url);
          
            
            //initial_location = set_initial_location();
             initial_location = set_initial_location($("#areaID").val());
             
             //alert($("#areaID").val());
            
        var mapOptions = {
                            
                             //center: new google.maps.LatLng(33.65992448007282, -117.91505813598633),
                             center: new google.maps.LatLng(initial_location[1], initial_location[2]),
                             //mapTypeId: google.maps.MapTypeId.ROADMAP
                             mapTypeId: google.maps.MapTypeId.HYBRID
                           };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        map.setZoom(initial_location[3]);
        
        
        //------tile[1] ---------
        init_tiling();
         
         
         // ---- only for   localjusttiles -----------
         add_tiles();
       document.getElementById("ajaxload").style.display = "none";
       document.getElementById("title_info").style.display = "none";
       document.getElementById("legend").style.display = "none";
        // ----End  only for   localjusttiles -----------
        
        
        
        geocoding();
        
        
     
         
      //    map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('legend'));
     
 
     
          //  add_mapdata_listener();
               
        //  add_map_listener_idle();
   
    
    }// initialize
    
    
    
    
    
    
    



$(document).ready(function () {

         base_url = document.getElementById('base_url').value;


       


       //  load data for google map and lower datatable 
          google.maps.event.addDomListener(window, 'load', initialize);

    
    
    

    }); // document ready function