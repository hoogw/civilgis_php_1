

var google_map_api_key = 'AIzaSyCeIFVL6oxxXNT7NToJjfU4J9TV2J8m4vE';



var oboe;


var _addr_info;
var search_address_marker;
var flyto_marker;
var geocoder;



var map;
//var markersArray = [];
var apiURI;
var infowindow;
var base_url;
var point_icon_url;
var initial_location = [];

                var bounds;
                var southWest;
                var northEast;
                var SWlong;
                var SWlat;
                var NElong;
                var NElat;
                var listener_center_changed;
                var listener_zoom_changed;
                var listener_dragend;
                var listener_idle;

var _geojson_object;
var _geojson_obj_array;
var _array_feature; 
var _dt_columns = [];
var _dt_columns_count;
var _area_db = [];
var _flyto_zoomlevel;

var _lat;
var _long;
var _geoFID;
var _dt_columns = [];
var _column = {};
var _geometry_type;
var _geometry_coord;
var _column_count;

var _mouseover_polygon;
var _mouseover_line;
var _mouseover_point;
var _mouseover_coord;

var _click_polygon;
var _click_line;
var _click_point;
var _click_coord;
var _area_polygon;
var _area_polygon_coord=[];
var _area_polyline;


var _highlight_marker;






var _multi_polyline;

var _areaID;
var _subjectID;
var tile_MapType;
var _current_geojson_layer;
var _last_geojson_layer;


//--------------classification-------------------------

var _designation = [];
var _code_column_name ='';

var _current_classifycheckbox_class;
var _designation_key;
var _designation_parentArray;
//---------------------------------






// --------default feature style -----------
_default_fillOpacity = 0;
_default_strokeColor = 'yellow';
_default_strokeWeight= 1;


_highlight_fillOpacity = 0;
_highlight_strokeColor = '#fff';
_highlight_strokeWeight= 8;



_classfiy_fillOpacity = 0;
_classfiy_strokeColor = 'yellow';
_classfiy_strokeWeight= 0.2;


//---------------------------------









function add_area_boundary(_area){
    
	
	 _multi_polyline = 'No';
        var _js_url = base_url+"public/js/area_boundary/googlemap/"+_area + ".js";
	
  
    
    // NOTE:  Polyline use path: no S, while  polygon, use paths:   have S,   if you missing S will fail drawing
    
    
                $.when(
                         $.getScript(_js_url)
                 /*
                $.getScript( "/mypath/myscript1.js" ),
                $.getScript( "/mypath/myscript2.js" ),
                $.getScript( "/mypath/myscript3.js" ),
                */

                ).done(function(){

                //place your code here, when above all scripts are all loaded completely.
                
                
                
                                    //if(_area_polygon_coord[_area][0] instanceof Array)
                                    if (_multi_polyline == 'Yes')
                                    {
                                            // for multi line
                                            
                                           

                                             var parentArray = _area_polygon_coord[_area];


                                             for(var i = 0; i < parentArray.length; i++)
                                                    {
                                                                   
                                                     
                                                     
                                                     
                                                                    var  _area_polyline_multi = new google.maps.Polyline({

                                                                                                                                                    path: parentArray[i],
                                                                                                                                                    geodesic: true,
                                                                                                                                                    strokeColor: '#FFA500',
                                                                                                                                                    strokeOpacity: 0.8,
                                                                                                                                                    strokeWeight: 5

                                                                                                                                              });

                                                                                    _area_polyline_multi.setMap(map);



                                                                   
                                                            }// outer for



                                    }
                                    else
                                    {
                                            

                                            // for only one line
                                                            _area_polyline = new google.maps.Polyline({

                                                                                                                                                    path: _area_polygon_coord[_area],
                                                                                                                                                    geodesic: true,
                                                                                                                                                    strokeColor: '#FFA500',
                                                                                                                                                    strokeOpacity: 0.8,
                                                                                                                                                    strokeWeight: 5

                                                                                                                                              });
                                                             _area_polyline.setMap(map);
                                }//else
                

                    }); // when done
    
    
	



/*

								For 2 dimenional Arrays:

								for(var i = 0; i < parentArray.length; i++){
									for(var j = 0; j < parentArray[i].length; j++){

										console.log(parentArray[i][j]);
									}
								}
								For arrays with an unknown number of dimensions you have to use recursion:

								function printArray(arr){
									for(var i = 0; i < arr.length; i++){
										if(arr[i] instanceof Array){
											printArray(arr[i]);
										}else{
											console.log(arr[i]);
										}
									}
								}

								or

								var printArray = function(arr) {
									if ( typeof(arr) == "object") {
										for (var i = 0; i < arr.length; i++) {
											printArray(arr[i]);
										}
									}
									else document.write(arr);
								}

								printArray(parentArray);



*/



            }// function add_area_boundary
            





//------------- Googlemap  basic simple map function -----------------------------


 




function add_map_data(){
    
   
    
  
   var _apiURI = 'http://localhost:10/data/geojson/'+ $("#areaID").val() +'/' + $("#areaID").val()+ '_'+$("#subjectID").val()+'.geojson';
    
 
    
  /*    
   * //  ---- old jquery way to get geojson ------------
   * 
                    $.get(_apiURI, function(data){         
                              _geojson_object = JSON.parse(data);                
                            map.data.addGeoJson(_geojson_object);
                            });// get// end get process geojson
                            
        //-----------------------------------------------
     */                        
      
 
    
    //=================  oboe progressive loading geojson  =====================
    
          oboe(_apiURI)
          
                       .node('features.*', function( feature ){

                            // This callback will be called everytime a new object is found
                       // alert(JSON.stringify(feature));

                        map.data.addGeoJson(feature);
                                             
                    })
          
          
//                   .done(function(data) {
//                   // completely load all data
//                     // alert(JSON.stringify(data));
//                      
//                     //   _geojson_object = data;
//
//                     //   map.data.addGeoJson(_geojson_object);
//                     
//                    })
                    
                    
                    .fail(function() {



                        alert("failing");
                    });                  
                            
                           
      //===========      End   oboe progressive loading geojson  ==================                
    
    
}



function add_mapdata_listener(){
    
     // click listener
            map.data.addListener('click', function(event) {
                //var myHTML = event.feature.getProperty("NAME_ABV_A");

                // map.data.overrideStyle(event.feature, {fillColor: 'yellow'});

                // info window table style
                var popup ="<table>";                
                event.feature.forEachProperty(function(_value, _property){
                    popup = popup + "<tr><td>"+ _property + "</td><td>"+  _value + "</td></tr>";
                  });            
                 popup = popup + "</table>";

                infowindow.setContent("<div style='width:200px; height:150px;text-align: center;'>"+ popup +"</div>");
                infowindow.setPosition(event.latLng);
                infowindow.open(map);

                });    // click listener
  
  
 
  
  
            // mouse over listener
              map.data.addListener('mouseover', function (event) {                  
                  //map.data.revertStyle();                 
                  map.data.overrideStyle(event.feature, {
                      strokeWeight: _highlight_strokeWeight,
                      strokeColor: _highlight_strokeColor,
                      fillOpacity: _highlight_fillOpacity
                      //fillColor:''
                  });
                  
                    var instant_info = "<ul>";
                    event.feature.forEachProperty(function(_value, _property){                  
                    instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;"+ _property + "&nbsp;</font></span>" + "&nbsp;&nbsp;" +_value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ "</li>";
                    });                            
                    instant_info = instant_info + "</ul>";
                  
                  
                  // update bottom <div>
                    document.getElementById("info-table").innerHTML = instant_info;
                
              });


                // mouse out listener
              map.data.addListener('mouseout', function (event) {
                  map.data.revertStyle(event.feature);
                  
                   // empty bottom <div>
               document.getElementById("info-table").innerHTML = "";
               //infowindow.close();
               
              });
    
    
}


//----------------End of Googlemap basic simple map function  ------------------------






