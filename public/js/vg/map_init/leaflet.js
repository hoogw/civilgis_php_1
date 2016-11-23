

var heremap_app_id = "J5aP2hv9dOa9Us8e6OPn";
var heremap_app_code = "oXTkvCJfsVdMTkD56CBy0g";






var base_layers;
var baseMaps;

var base_url; 

var leaflet_open_street_map_max_zoom_level = 19;
var base_map_tile_layer;
var overlay_tile_layer;
var lasttime_overlay_tile_layer;
var geojson_default_style;
var geojson_classification_style;
var geojson_mouseover_highlight_style;
var geojson_clienttable_mouseover_highlight_style;
var geojson_Marker_style_Options;
var _current_markers_cluster;
var _last_markers_cluster;
var _click_polygon_style;
var _click_line_style;
var _mouseover_polygon_style;
var _mouseover_line_style;
var geojson_classification_mouseover_highlight_style;




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
var _area_polygon_coord = [];
var _area_polyline;


var _highlight_marker;






var _multi_polyline;

var _areaID;
var _subjectID;
var tile_MapType;
var _current_geojson_layer = null;
var _last_geojson_layer = null;



//--------------classification-------------------------

var _designation = [];
var _code_column_name = '';

var _current_classifycheckbox_class;
var _designation_key;
var _designation_parentArray;
//---------------------------------






// --------default feature style -----------
_default_fillOpacity = 0;
_default_strokeColor = '#0000FF'; //blue
_default_strokeWeight = 2;


_highlight_fillOpacity = 0;
_highlight_strokeColor = '#000000'; // black
_highlight_strokeWeight = 8;

_clienttable_mouseover_highlight_fillColor = '#000080';
_clienttable_mouseover_highlight_fillOpacity = 0.5;
_clienttable_mouseover_highlight_strokeColor = '#FF0000';
_clienttable_mouseover_highlight_strokeWeight = 5;



_classfiy_fillOpacity = 0;
_classfiy_strokeColor = '#0000FF'; //blue
_classfiy_strokeWeight = 0.2;


//---------------------------------


geojson_default_style = {

    "color": _default_strokeColor,
    "weight": _default_strokeWeight,
    "fillOpacity": _default_fillOpacity
};


geojson_classification_style = {

    "color": '#0000FF',
    "weight": 0.2,
    "fillOpacity": 0
};




geojson_mouseover_highlight_style = {

    "color": _highlight_strokeColor,
    "weight": _highlight_strokeWeight,
    "fillOpacity": _highlight_fillOpacity
};


geojson_clienttable_mouseover_highlight_style = {

    "color": _clienttable_mouseover_highlight_strokeColor,
    "weight": _clienttable_mouseover_highlight_strokeWeight,
    "fillColor": _clienttable_mouseover_highlight_fillColor,
    "fillOpacity": _clienttable_mouseover_highlight_fillOpacity
};


geojson_Marker_style_Options = {

    radius: 3,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8


};

_click_polygon_style = {
    
    color: '#FF0000',
    opacity: 0.8,
    weight: 12,
    fillColor: '#FF0000',
    fillOpacity: 0.01
};


_click_line_style = {

    color: '#FF0000',
    opacity: 0.8,
    weight: 12,
    fillColor: '#FF0000',
    fillOpacity: 0.01
};

_mouseover_polygon_style = {
    
    color: '#F7D358',
    opacity: 0.8,
    weight: 12,
    fillColor: '#FF0000',
    fillOpacity: 0.01
};


_mouseover_line_style = {

    color: '#F7D358',
    opacity: 0.8,
    weight: 12,
    fillColor: '#FF0000',
    fillOpacity: 0.01
};



geojson_classification_mouseover_highlight_style = {

    Weight: 2,
    Color: '#000000',
    fillColor: '#000000',
    fillOpacity: 1

};











function add_area_boundary(_area) {


    _multi_polyline = 'No';
              //var _js_url = "/Scripts/area_boundary/leaflet/" + _area + ".js";
    var _js_url = base_url+"public/js/area_boundary/leaflet/" + _area + ".js";
    



    // NOTE:  Polyline use path: no S, while  polygon, use paths:   have S,   if you missing S will fail drawing


    $.when(
             $.getScript(_js_url)
             
     /*
    $.getScript( "/mypath/myscript1.js" ),
    $.getScript( "/mypath/myscript2.js" ),
    $.getScript( "/mypath/myscript3.js" ),
    */

    ).done(function () {

        //place your code here, when above all scripts are all loaded completely.



        //if(_area_polygon_coord[_area][0] instanceof Array)
        if (_multi_polyline == 'Yes') {
            // for multi line



            var parentArray = _area_polygon_coord[_area];


            for (var i = 0; i < parentArray.length; i++) {




                var _area_polyline_multi = L.polyline(parentArray[i], { color: '#0000FF', weight: 5, opacity: 0.8 }).addTo(map);

                   

            }// outer for



        }
        else {

           


            _area_polyline = L.polyline(_area_polygon_coord[_area], { color: '#0000FF', weight: 5, opacity: 0.8 }).addTo(map);

           

           
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












function init_base_map() {

    
    var OpenStreetMap_Mapnik = L.tileLayer.provider('OpenStreetMap.Mapnik');
    var OpenStreetMap_BlackAndWhite = L.tileLayer.provider('OpenStreetMap.BlackAndWhite');

    var  OpenTopoMap= L.tileLayer.provider('OpenTopoMap');
    var  MapQuestOpen_Aerial= L.tileLayer.provider('MapQuestOpen.Aerial');
    var  MapQuestOpen_OSM= L.tileLayer.provider('MapQuestOpen.OSM');
    var  Stamen_Toner= L.tileLayer.provider('Stamen.Toner');
    var  Stamen_Terrain= L.tileLayer.provider('Stamen.Terrain');
    var  Esri_WorldImagery= L.tileLayer.provider('Esri.WorldImagery');
    var  Esri_WorldStreetMap= L.tileLayer.provider('Esri.WorldStreetMap');
    var  Esri_WorldTopoMap= L.tileLayer.provider('Esri.WorldTopoMap');
    var  Esri_NatGeoWorldMap= L.tileLayer.provider('Esri.NatGeoWorldMap');


    var  HERE_hybridDay= L.tileLayer.provider('HERE.hybridDay', {
        app_id: heremap_app_id,
        app_code: heremap_app_code
    });

    var  HERE_normalDay= L.tileLayer.provider('HERE.normalDay', {
        app_id: heremap_app_id,
        app_code: heremap_app_code
    });

    var  HERE_basicMap= L.tileLayer.provider('HERE.basicMap', {
        app_id: heremap_app_id,
        app_code: heremap_app_code
    });


    




    var Stamen_Watercolor = L.tileLayer.provider('Stamen.Watercolor');




     baseMaps = {
        
         

         "Esri_WorldImagery": Esri_WorldImagery,
         "Esri_WorldStreetMap":Esri_WorldStreetMap ,
         "Esri_WorldTopoMap": Esri_WorldTopoMap,
         "Esri_NatGeoWorldMap":Esri_NatGeoWorldMap ,
         "OpenStreetMap_Mapnik": OpenStreetMap_Mapnik,
         "OpenStreetMap_BlackAndWhite": OpenStreetMap_BlackAndWhite,

         "MapQuestOpen_Aerial": MapQuestOpen_Aerial,
         "MapQuestOpen_OSM":MapQuestOpen_OSM,
         
         "HERE_hybridDay": HERE_hybridDay,
         "HERE_normalDay": HERE_normalDay,
         "HERE_basicMap": HERE_basicMap,
         


         "OpenTopoMap": OpenTopoMap,
         "Stamen_Toner":Stamen_Toner,
         "Stamen_Terrain":Stamen_Terrain ,
         "Stamen_Watercolor": Stamen_Watercolor

    };


    // set up the map
    map = new L.Map('map-canvas');


    // this is first time add base map layer
    L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(map);

    L.control.layers(baseMaps).addTo(map);


}


function add_map_data(){
    
    
  
   var _apiURI = 'http://localhost:10/data/geojson/'+ $("#areaID").val() +'/' + $("#areaID").val()+ '_'+$("#subjectID").val()+'.geojson';
    
    
    
  
                    $.get(_apiURI, function(data){
           
           
                        
                         
                         
                              _geojson_object = JSON.parse(data);

                            
                            
                          L.geoJson(_geojson_object, {


                // for point feature, by default it use marker, but instead of use marker, here change marker to polygon (circle marker) 
                pointToLayer: function (feature, latlng) {
                    return L.circleMarker(latlng, geojson_Marker_style_Options);
                },


                style: geojson_default_style,

                onEachFeature: function onEachFeature(feature, layer) {



                    //bind click
                    layer.on('mouseover', function (e) {
                        // e = event
                        // console.log(e); 

                        // You can make your ajax call declaration here
                        //$.ajax(... 


                        layer.setStyle(geojson_mouseover_highlight_style);



                        var instant_info = "<ul>";


                        for (var _key in layer.feature.properties) {
                            var _value = String(layer.feature.properties[_key]);
                            instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _key + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

                        }


                        instant_info = instant_info + "</ul>";


                        // update bottom <div>
                        document.getElementById("info-table").innerHTML = instant_info;
                        // hide 'utfgrid_info' <div>
                        $('#utfgrid_info').hide();


                    });// layer.on mouseover


                    layer.on('mouseout', function (e) {

                        layer.setStyle(geojson_default_style);

                        // empty bottom <div>
                        document.getElementById("info-table").innerHTML = "";
                        //infowindow.close();

                    });// layer.on mouseout

                }// oneach function

            }).bindPopup(function (layer) {


                // when user click each feature, it will popup a info window by the feature.


                var popup = "<table>";
                for (var _key in layer.feature.properties) {
                    var _value = String(layer.feature.properties[_key]);
                    // popup = popup + "<tr><td>" + _key + "</td><td>" + _value + "</td></tr>";

                    popup = popup + "<tr><td><span style=\'background-color: #454545;\'><font color=\'white\'>" + _key + "</span>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;" + _value + "</td></tr>";

                }
                popup = popup + "</table>";


                return popup;


            }).addTo(map);
                            
                            
                            
                            

                           
                       
                           
                            });// get// end get process geojson
                          
    
    
}







//----------------End of leaflet basic simple map function  ------------------------





