var heremap_app_id = "J5aP2hv9dOa9Us8e6OPn";
var heremap_app_code = "oXTkvCJfsVdMTkD56CBy0g";

var _tile_baseURL = 'http://166.62.80.50:8887/v2/';
//var _tile_baseURL = 'http://tile.transparentgov.net/v2/';
var _tile_baseURL_localhost = 'http://localhost:8887/v2/';

var base_layers;
var baseMaps;
var _tile_slider;
var _slider_control;
var _slidercontrol_handle_value;

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


var utfgrid_tile_layer;
var _tile_exist = false;
var _tile_list;

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

// ----cluster [3]----
var markerClusterer;
var infobox;
var boxText;
var _cluster_in_use = false;
//------------end cluster [3] ------------




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



// ---------  map click event [0-4] ---------------- cluster map conflict with map click event, so do not use with cluster.------------

var listener_click;
var listener_rightclick;
var _mapclick_in_use = false;



//-----------------------------------------


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



function init_tiling(){
    
    // --------------------- dynamic load javascript file  ---------------------------


    
   // var _tile_list_js = "/Scripts/map_init/tile_list/googlemap_tile_list.js";
var _tile_list_js = base_url+"public/js/map_init/tile_list/googlemap_tile_list.js";


    $.when(
             $.getScript(_tile_list_js)
     /*
    $.getScript( "/mypath/myscript1.js" ),
    $.getScript( "/mypath/myscript2.js" ),
    $.getScript( "/mypath/myscript3.js" ),
    */

    ).done(function () {

        var  _tile_name = _areaID + "_" + _subjectID;
        var _i = _tile_list.indexOf(_tile_name);
        //alert(_tile_name);
        if (_i >= 0) {





                        //http://tile.transparentgov.net/v2/cityadr/{z}/{x}/{y}.png
                         //_tile_baseURL = 'http://tile.transparentgov.net/v2/';
                        // _tile_baseURL = 'http://localhost:8888/v2/cityadr/{z}/{x}/{y}.png';

// local testing only
                        //  _tile_baseURL = _tile_baseURL_localhost;


                         var overlay_tile_Url = _tile_baseURL + _areaID + '_' + _subjectID + '/{z}/{x}/{y}.png';
                         var overlay_tile_Attrib = 'Map data &#169; <a href="http://transparentgov.net">transparentgov.net</a> contributors';
                         tile_MapType = new L.TileLayer(overlay_tile_Url, { minZoom: 3, maxZoom: 22, errorTileUrl:'  ', unloadInvisibleTiles: true, reuseTiles:true, attribution: overlay_tile_Attrib });

                        // ===== above must define errorTileUrl:'  ', must have some character or space in '  ' above. If not define this, missing tile will show a broken image icon on map everywhere, if define this, it just failed to load empty URL, not showing broken image icon


                         overlay_tile_layer = map.addLayer(tile_MapType);
                         tile_MapType.setZIndex(99);
                         
                         
                         
                         //===================add ========== UTFgrid =================================

                         var utfGrid_tile_Url = _tile_baseURL + _areaID + '_' + _subjectID + '/{z}/{x}/{y}.grid.json?callback={cb}';
                        // var utfGrid_tile_Url = _tile_baseURL + _areaID + '_' + _subjectID + '/{z}/{x}/{y}.grid.json';

                         var utfGrid = new L.UtfGrid(utfGrid_tile_Url,  {
                             maxRequests: 50,    // default is 4,  only send 4 request per time, then wait requesttimeout(default 1 min) to send another 4 grid request, should set to more than 20
                             requestTimeout:500  // default is 1 min, most of request not found is less than 500 ms, 
                              //useJsonP: false
                         });
                         

                         utfGrid.on('click', function (e) {
                             if (e.data) {


                                 var _utfgrid_info = "<ul>";
                                 var _object = e.data;

                                 for (var _property in _object) {
                                     if (_object.hasOwnProperty(_property)) {

                                         _utfgrid_info = _utfgrid_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _property + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + String(_object[_property]) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

                                     }
                                 }

                                 _utfgrid_info = _utfgrid_info + "</ul>";
                                 document.getElementById('utfgrid_info').innerHTML = _utfgrid_info;


                                 
                             } else {
                                // document.getElementById('utfgrid_info').innerHTML = 'click: nothing';
                             }
                         });


                         utfGrid.on('mouseover', function (e) {
                             if (e.data) {
                                 

                                 var _utfgrid_info = "<ul>";
                                 var _object = e.data;

                                 for (var _property in _object) {
                                     if (_object.hasOwnProperty(_property)) {
                                         
                                         _utfgrid_info = _utfgrid_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _property + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + String(_object[_property]) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";
                                        
                                     }
                                 }

                                 _utfgrid_info = _utfgrid_info + "</ul>";
                                 document.getElementById('utfgrid_info').innerHTML = _utfgrid_info;

                             } else {
                                // document.getElementById('utfgrid_info').innerHTML = 'hover: nothing';
                             }
                            
                         });


                         utfGrid.on('mouseout', function (e) {
                             document.getElementById('utfgrid_info').innerHTML = '';
                         });

                         utfgrid_tile_layer = map.addLayer(utfGrid);


            //==================== End ========== UTFgrid =================================
                         
                         
                         
                         
                          //................. leaflet slider contral ............................

                         _slider_control = L.control.slider(function (value) {


                             
                                                                            _slidercontrol_handle_value = Math.round(value) / 100;
                                                                            tile_MapType.setOpacity(_slidercontrol_handle_value);

                                                                               },

                                 { id: _slider_control, position: 'bottomright',width:'400px', orientation: 'vertical', logo: 'O', min: 0, max: 100, value: 100, collapsed: false, step: 10 });

                         map.addControl(_slider_control);


            //................End....................... leaflet slider contral ............................
                         
                         
                         
                         
                         
                         
                         

                         _tile_exist = true;

                     }// if


    }); // when done


}// init tile



function add_tiles(){
    
   

    
    tile_MapType.setZIndex(99);
    // tile_MapType.bringToFront();
        
  
}

function remove_tiles() {


    tile_MapType.bringToBack();


}


//------------- leaflet basic simple map function -----------------------------

function get_map_bound() {

    //document.getElementById("title_info").innerHTML = "MAP BOUNDS [SouthWest, NorthEast] "+ map.getBounds();
    // get current map bounds as URL parameters. 






    bounds = map.getBounds();
    southWest = bounds.getSouthWest();
    northEast = bounds.getNorthEast();
    SWlong = southWest.lng;
    SWlat = southWest.lat;
    NElong = northEast.lng;
    NElat = northEast.lat;

    //alert(SWlong);

    // http://localhost:10/civilgis/api/load/general_landuse/SWlong/SWlat/NElong/NElat/   This is sample URI
    var _url = base_url + 'api/loadall/' + $("#areaID").val() + '/' + $("#subjectID").val() + '/' + SWlong + '/' + SWlat + '/' + NElong + '/' + NElat + '/';
    //var _url = "/api/geojson/feature/" + initial_location[0] + '/' + $("#subjectID").val() + "/" + SWlong + "/" + SWlat + "/" + NElong + "/" + NElat + "/";

    document.getElementById("ajaxload").style.display = "block";
    ajax_GeoJSON(map, _url, false);




}


function get_click_latlng(_click_event_lat, _click_event_lng) {


    if (_mapclick_in_use) {


        // --- current use 2X2 grid boundary (as click event latlong is on center point), you can use 3x3 grid or adjust house length to make larger/smaller select area. 
        var _square_house_length = 0.0004; // average is 0.0003-0.0004


        SWlong = _click_event_lng - _square_house_length;
        SWlat = _click_event_lat - _square_house_length;
        NElong = _click_event_lng + _square_house_length;
        NElat = _click_event_lat + _square_house_length;




        //var _url_click_event = "/api/geojson/feature/" + $("#areaID").val() + '/' + $("#subjectID").val() + "/" + SWlong + "/" + SWlat + "/" + NElong + "/" + NElat + "/";
        var _url_click_event = base_url + 'api/loadall/' + $("#areaID").val() + '/' + $("#subjectID").val() + "/" + SWlong + "/" + SWlat + "/" + NElong + "/" + NElat + "/";

        document.getElementById("ajaxload").style.display = "block";
        ajax_GeoJSON(map, _url_click_event, true);



    }




}



function back_full_extend() {

    map.setView(new L.LatLng(initial_location[1], initial_location[2]), initial_location[3]);
}


function add_map_listener_idle() {







    listener_idle = map.on('moveend', function (e) {
        //alert(e.latlng);
        get_map_bound();


    });









    // ---------  map click event [1] ------ search for a single feature where clicked ------------
    listener_click = map.on('click', function (click_event_location) {

        // alert(click_event_location.latlng.lat);
        get_click_latlng(click_event_location.latlng.lat, click_event_location.latlng.lng);
    });


    listener_rightclick = map.on('rightclick', function () {

        back_full_extend();
    });

    //--------------------------End  map right click event ---------- back to full extend ----------------------




}


function geocoding() {

    // --------  search address ------- geocoding -----------
    new L.Control.GeoSearch({


        provider: new L.GeoSearch.Provider.Esri(),

        // google and open streetmap is ok, but result zoom level is too high for open street map. 
        //provider: new L.GeoSearch.Provider.Google(),
        //provider: new L.GeoSearch.Provider.OpenStreetMap(),

        retainZoomLevel: false
    }).addTo(map);

    // ---------- End of search address ------- geocoding -----------



}










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










//----------------End of leaflet basic simple map function  ------------------------






// ############# retired ######################


function tile_switch_button() {



    // ----------- color_tiles_switch button --------------
    // init on off switch button  
    $("[name='color_tiles_switch']").bootstrapSwitch();

    $('input[name="color_tiles_switch"]').on('switchChange.bootstrapSwitch', function (event, state) {
        // console.log(this); // DOM element
        //console.log(event); // jQuery event
        // console.log(state); // true | false
        if (state) {

            add_tiles();
        }
        else {

            remove_tiles();
        }
    });

    // ----------End of  color_tiles_switch button          --------------






}



function tile_slider() {


    _tile_slider = document.getElementById('tile_slider');

    noUiSlider.create(_tile_slider, {
        start: [100],
        connect: 'lower',
       //  tooltips: true,
        range: {
            'min': 0,
            'max': 100
        }
    });



}



function init_tiling_old_slider_switch(){
    
    // --------------------- dynamic load javascript file  ---------------------------


    
   // var _tile_list_js = "/Scripts/map_init/tile_list/googlemap_tile_list.js";
var _tile_list_js = base_url+"public/js/map_init/tile_list/googlemap_tile_list.js";


    $.when(
             $.getScript(_tile_list_js)
     /*
    $.getScript( "/mypath/myscript1.js" ),
    $.getScript( "/mypath/myscript2.js" ),
    $.getScript( "/mypath/myscript3.js" ),
    */

    ).done(function () {

        var  _tile_name = _areaID + "_" + _subjectID;
        var _i = _tile_list.indexOf(_tile_name);
        //alert(_tile_name);
        if (_i >= 0) {





                        //http://tile.transparentgov.net/v2/cityadr/{z}/{x}/{y}.png
                         //_tile_baseURL = 'http://tile.transparentgov.net/v2/';
                        // _tile_baseURL = 'http://localhost:8888/v2/cityadr/{z}/{x}/{y}.png';


                         var overlay_tile_Url = _tile_baseURL + _areaID + '_' + _subjectID + '/{z}/{x}/{y}.png';
                         var overlay_tile_Attrib = 'Map data &#169; <a href="http://transparentgov.net">transparentgov.net</a> contributors';
                         tile_MapType = new L.TileLayer(overlay_tile_Url, { minZoom: 3, maxZoom: 22, errorTileUrl:'  ', unloadInvisibleTiles: true, reuseTiles:true, attribution: overlay_tile_Attrib });

                        // ===== above must define errorTileUrl:'  ', must have some character or space in '  ' above. If not define this, missing tile will show a broken image icon on map everywhere, if define this, it just failed to load empty URL, not showing broken image icon


                         overlay_tile_layer = map.addLayer(tile_MapType);
                         tile_MapType.setZIndex(99);
                         
                         
                         
                          //............................ bind opacity to slider ........................
            
                _tile_slider.noUiSlider.on('set', function (values, handle, unencoded, tap, positions) {


                var _slider_handle_value = values[handle];
                _slider_handle_value = Math.round(_slider_handle_value) / 100;

                tile_MapType.setOpacity(_slider_handle_value);

            });
            //................End ....... bind opacity to slider ........................
                         
                         
                         
                         
                          
                         
                         
                         
                         
                         
                         

                         _tile_exist = true;

                     }// if


    }); // when done


}// init tile



//############### End  ############# retired   #####################