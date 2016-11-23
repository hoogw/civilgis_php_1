/// <reference path="source_layer/city.js" />
var mapboxgl_accessToken = 'pk.eyJ1IjoiaG9vZ3ciLCJhIjoiYjdlZTA1Y2YyOGM4NjFmOWI2MjY3MmI5NWM3MmUyOWMifQ.gINCV5SXFGTG5wB8ouXxOw';

//var _tileserver_base_url = 'http://166.62.80.50:10/tileserver/tileserver.php?/index.json?/'; // must use this
var _tileserver_base_url = 'http://tilevector.transparentgov.net/tileserver/tileserver.php?/index.json?/'; // must use this







var map;

var _area_polygon_coord = [];
var initial_location = [];
var _area_db = [];
var source_layer = [];
var geocoder;
var _source_layer_group_id;
var _tileserver_url;


var _flyto_zoomlevel;
var _multi_polyline;
var _area_polyline

var _areaID;
var _subjectID;


var _rendered_features = [];
var _source_features = [];

var source_layer_id = [];
var source_layer_id_highlight = [];
var highlight_geojson_source = null;
var highlight_geojson_layer = null;







function geocoder() {

    //--- geocoding ---------------
    // map.addControl(new mapboxgl.Geocoder());


    geocoder = new mapboxgl.Geocoder({
        container: 'geocoder-container' // Optional. Specify a unique container for the control to be added to.
    });

    map.addControl(geocoder);

    // After the map style has loaded on the page, add a source layer and default
    // styling for a single point.
    map.on('load', function () {
        map.addSource('single-point', {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": []
            }
        });

        map.addLayer({
            "id": "point",
            "source": "single-point",
            "type": "circle",
            "paint": {
                "circle-radius": 10,
                "circle-color": "#007cbf"
            }
        });

        // Listen for the `geocoder.input` event that is triggered when a user
        // makes a selection and add a marker that matches the result.
        geocoder.on('result', function (ev) {
            map.getSource('single-point').setData(ev.result.geometry);
        });
    });


}



function add_area_boundary(_area) {

    

    _multi_polyline = 'No';
   // var _js_url = "/Scripts/area_boundary/mapboxgl/" + _area + ".js";
   var _js_url = base_url + "public/js/area_boundary/mapboxgl/" + _area + ".js";

    


    $.when(
             $.getScript(_js_url)
     

    ).done(function () {

        

        //place your code here, when above all scripts are all loaded completely.


        //---------- mapbox GL  --------------------------


        _area_polyline = map.on('load', function () {
            map.addSource("boundary", _area_polygon_coord[_area]);

            

            map.addLayer({
                "id": "boundary",
                "type": "line",
                "source": "boundary",
                "layout": {
                    "line-join": "round",
                    "line-cap": "round"
                },
                "paint": {
                    "line-color": "#FFA500",
                    "line-width": 5
                }
            });

        });
        //--------- end mapbox GL -------



    }); // when done




}// function add_area_boundary





//--------------------------  vectore tile section ------------------------------------




function init_checkbox_menu_color(_area, _subject) {

  



        // ----------- add checkbox menu -----------
        _source_layer_group_id = _area + '_' + _subject;


        for (var property in source_layer[_source_layer_group_id]) {
            if (source_layer[_source_layer_group_id].hasOwnProperty(property)) {



                //var _checkbox_span = '  <span class="button-checkbox"> <button type="button" class="btn" data-color="primary" id="' + property + '">' + property + '</button><input type="checkbox" class="hidden" checked /> </span> ';


                var _checkbox_span = '  <span class="button-checkbox"> <button type="button" class="btn" data-color="'+
                                           source_layer[_source_layer_group_id][property]['feature_color']   + '" id="' + property + '">' + property + '</button><input type="checkbox" class="hidden" checked /> </span> ';
                


                $("#checkbox_menu").append(_checkbox_span);





            }//if
        }//for
        // ----------- End of add checkbox menu -----------



        $('.button-checkbox').each(function () {

            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };



            // Event Handlers
            $button.on('click', function (e) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();



                //--------------------------- turn off the layer ---  when click checkbox button -----------------
                //alert(this.id);

                // e.preventDefault();
                //  e.stopPropagation();
                var visibility = map.getLayoutProperty(this.id, 'visibility');

                if (visibility === 'visible') {
                    map.setLayoutProperty(this.id, 'visibility', 'none');
                    // this.className = '';
                } else {
                    // this.className = 'active';
                    map.setLayoutProperty(this.id, 'visibility', 'visible');
                };


                //----------------------- End of -- turn off the layer ---  when click checkbox button -----------------

            });




            $checkbox.on('change', function () {
                updateDisplay();
            });


            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
                }
                else {
                    $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
                }
            }

            // Initialization
            function init_checkbox() {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>&nbsp;');
                }
            }




            init_checkbox();
        });





   

}



function init_checkbox_menu_simple(_area, _subject) {

    



        // ----------- add checkbox menu -----------
        _source_layer_group_id = _area + '_' + _subject;


        for (var property in source_layer[_source_layer_group_id]) {
            if (source_layer[_source_layer_group_id].hasOwnProperty(property)) {



                var _checkbox_span = '  <span class="button-checkbox"> <button type="button" class="btn" data-color="primary" id="'+ property + '">' + property + '</button><input type="checkbox" class="hidden" checked /> </span> ';


                $("#checkbox_menu").append(_checkbox_span);





            }//if
        }//for
        // ----------- End of add checkbox menu -----------



        $('.button-checkbox').each(function () {

            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };



            // Event Handlers
            $button.on('click', function (e) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();



                //--------------------------- turn off the layer ---  when click checkbox button -----------------
                //alert(this.id);

               // e.preventDefault();
              //  e.stopPropagation();
                var visibility = map.getLayoutProperty(this.id, 'visibility');

                if (visibility === 'visible') {
                    map.setLayoutProperty(this.id, 'visibility', 'none');
                   // this.className = '';
                } else {
                   // this.className = 'active';
                    map.setLayoutProperty(this.id, 'visibility', 'visible');
                };
            

                //----------------------- End of -- turn off the layer ---  when click checkbox button -----------------

            });




            $checkbox.on('change', function () {
                updateDisplay();
            });


            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                        .removeClass('btn-default  btn-xs')
                        .addClass('btn-' + color +  ' btn-xs'+ ' active');
                }
                else {
                    $button
                        .removeClass('btn-' + color + ' btn-xs' + ' active')
                        .addClass('btn-default  btn-xs');
                }
            }

            // Initialization
            function init_checkbox() {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>&nbsp;');
                }
            }




            init_checkbox();
        });





   

}


// no highlight
function init_vector_multilayer(_area, _subject) {

    
   // alert('add vector tile');



        _source_layer_group_id = _area + '_' + _subject;



    //.................  object to array for id and id_highlight .......................


                        source_layer_id = Object.keys(source_layer[_source_layer_group_id]);

        
                        for (var j = 0; j < source_layer_id.length; j++) {
                            source_layer_id_highlight.push(source_layer_id[j]+'_highlight');
          
                        }

    //.................  End .............object to array for id and id_highlight .......................




    //_tileserver_base_url = 'http://vectortile.transparentgov.net/'; // NOT work,with error No 'Access-Control-Allow-Origin' header is present on the requested resource
     //   _tileserver_base_url = 'http://166.62.80.50:10/tileserver/tileserver.php?/index.json?/'; // must use this

    // _tileserver_url = 'http://localhost:10/tileserver/tileserver.php?/index.json?/' + _area + '/{z}/{x}/{y}.pbf';
     //   _tileserver_url = _tileserver_base_url + 'tileserver.php?/index.json?/' + _area + '/{z}/{x}/{y}.pbf';


        _tileserver_url = _tileserver_base_url + _area + '/{z}/{x}/{y}.pbf';

      //  alert(_tileserver_url);

      //  map.on('style.load', function () {    // if not use style, should NOT use 'style.load' will cause not load vector tile problem, should use 'load' event
            map.on('load', function () {

            map.addSource(_area, {

                type: 'vector',

                //url: 'mapbox://hoogw.0pywwk0d'


                "tiles": [
                            // 'http://localhost:10/tileserver/tileserver.php?/index.json?/city/{z}/{x}/{y}.pbf'

                            _tileserver_url
                ],
                "maxzoom": 22


            });




            //==================================   add layers to map ================



            for (var property in source_layer[_source_layer_group_id]) {
                if (source_layer[_source_layer_group_id].hasOwnProperty(property)) {

                    var _highlight_id = property + '_highlight';

                    //alert(property);

                    if (source_layer[_source_layer_group_id][property]['type'] === 'circle') {

                        map.addLayer({
                            "id": property,
                            "type": 'circle',
                            "source": _area,

                            "source-layer": property,



                            "layout": {
                                'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                            },

                            "paint": {
                                "circle-color": source_layer[_source_layer_group_id][property]['circle-color'],
                                "circle-radius": parseInt(source_layer[_source_layer_group_id][property]['circle-radius']),
                                "circle-blur": parseInt(source_layer[_source_layer_group_id][property]['circle-blur'])
                            },
                        });


                        


                    }//if point, circle

                    else if (source_layer[_source_layer_group_id][property]['type'] === 'line') {

                        map.addLayer({
                            "id": property,
                            "type": "line",
                            "source": _area,

                            "source-layer": property,

                            "layout": {
                                'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                                "line-join": source_layer[_source_layer_group_id][property]['line-join'],
                                "line-cap": source_layer[_source_layer_group_id][property]['line-cap'],
                            },
                            "paint": {

                                "line-color": source_layer[_source_layer_group_id][property]['line-color'],
                                "line-width": parseInt(source_layer[_source_layer_group_id][property]['line-width'])
                            }
                        });


                        



                    }//else line


                    else if (source_layer[_source_layer_group_id][property]['type'] === 'fill') {


                        map.addLayer({
                            'id': property,
                            'type': 'fill',
                            "source": _area,

                            "source-layer": property,

                            "layout": {
                                'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                            },

                            'paint': {
                                'fill-color': source_layer[_source_layer_group_id][property]['fill-color'],
                                'fill-outline-color': source_layer[_source_layer_group_id][property]['fill-outline-color']
                               // "fill-opacity": 0
                            }
                        });



                       




                    }// else polygon fill


                    // for testing sample "hide show layer"
                    // addLayer(property, property);



                }//if 
            }// for 


            //============End ==========================   add layers to map =========================================




        }); // map.on('style.load')






        // ===========   mouse over event, show feature detail property in info-table ===============
        map.on('mousemove', function (e) {
            var features = map.queryRenderedFeatures(e.point, { layers: source_layer_id });
           // var features_hightlight  = map.queryRenderedFeatures(e.point, { layers: source_layer_id_highlight });

            //  hand to pointer hand if there is features 
            map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';


            var instand_info_table = "";

            for (var i = 0; i < features.length; i++) {



                var element = features[i];



                // filter only display our feature, not base map feature.

                if (element.layer.id in source_layer[_source_layer_group_id]) {

                            var instant_info = "<br/><div><span>" + element.layer.id + "<ul>";

                            for (var _key in element.properties) {
                                var _value = String(element.properties[_key]);
                                instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _key + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

                            }// for


                            instant_info = instant_info + "</ul> </span></div>";


                            instand_info_table = instand_info_table + instant_info;
                }// if filter







                

            }//for feature length


            // update bottom <div>
            document.getElementById("info-table").innerHTML = instand_info_table;





            







        });
        // =========== End =====  mouse over event, show feature detail property in info-table ===============












        // -------------------- click event open a popup at the location of the feature -----------------------------

        map.on('click', function (e) {
            //var features = map.queryRenderedFeatures(e.point);
            var features = map.queryRenderedFeatures(e.point, { layers: source_layer_id });


            if (!features.length) {
                return;
            }

            var _not_popup = false;

            var _popup_html = "<div style='width:180px; height:120px;text-align: center; overflow-x:scroll; overflow-y:scroll; overflow:auto;'><table >";

            for (var j = 0; j < features.length; j++) {

                var element = features[j];


                // filter only display our feature, not base map feature.

                if (element.layer.id in source_layer[_source_layer_group_id]) {

                    _not_popup = true;

                    var _popup_html_section = "<tr><td ><span style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + element.layer.id + "&nbsp;</font></span></td><td>" + " " + "</td></tr>";

                    for (var _key in element.properties) {
                        var _value = String(element.properties[_key]);

                        _popup_html_section = _popup_html_section + "<tr><td ><span style=\"float:left; list-style: none;font-size:10px\">" + _key + "</span></td><td><span style=\"float:left; list-style: none;font-size:8px\">" + _value + "</span></td></tr>";

                    }// for

                    _popup_html = _popup_html + _popup_html_section;

                }//if filter

            }//for

            _popup_html = _popup_html + "</table></div>";


            if (_not_popup) {
                                var popup = new mapboxgl.Popup()
                                    .setLngLat(map.unproject(e.point))
                                    .setHTML(_popup_html)
                                    .addTo(map);

            }//if 

        }); // map on click


        // --------------------End -------------- click event open a popup at the location of the feature -----------------------------



}


function init_vector_muiltilayer_highlight_layer(_area, _subject) {


    // alert('add vector tile');



    _source_layer_group_id = _area + '_' + _subject;



    //.................  object to array for id and id_highlight .......................


    source_layer_id = Object.keys(source_layer[_source_layer_group_id]);


    for (var j = 0; j < source_layer_id.length; j++) {
        source_layer_id_highlight.push(source_layer_id[j] + '_highlight');

    }

    //.................  End .............object to array for id and id_highlight .......................




    //_tileserver_base_url = 'http://vectortile.transparentgov.net/'; // NOT work,with error No 'Access-Control-Allow-Origin' header is present on the requested resource
    //   _tileserver_base_url = 'http://166.62.80.50:10/tileserver/tileserver.php?/index.json?/'; // must use this

    // _tileserver_url = 'http://localhost:10/tileserver/tileserver.php?/index.json?/' + _area + '/{z}/{x}/{y}.pbf';
    //   _tileserver_url = _tileserver_base_url + 'tileserver.php?/index.json?/' + _area + '/{z}/{x}/{y}.pbf';


    _tileserver_url = _tileserver_base_url + _area + '/{z}/{x}/{y}.pbf';

    //  alert(_tileserver_url);

    //  map.on('style.load', function () {    // if not use style, should NOT use 'style.load' will cause not load vector tile problem, should use 'load' event
    map.on('load', function () {

        map.addSource(_area, {

            type: 'vector',

            //url: 'mapbox://hoogw.0pywwk0d'


            "tiles": [
                        // 'http://localhost:10/tileserver/tileserver.php?/index.json?/city/{z}/{x}/{y}.pbf'

                        _tileserver_url
            ],
            "maxzoom": 22


        });




        //==================================   add layers to map ================



        for (var property in source_layer[_source_layer_group_id]) {
            if (source_layer[_source_layer_group_id].hasOwnProperty(property)) {

                var _highlight_id = property + '_highlight';

                //alert(property);

                if (source_layer[_source_layer_group_id][property]['type'] === 'circle') {

                    map.addLayer({
                        "id": property,
                        "type": 'circle',
                        "source": _area,

                        "source-layer": property,



                        "layout": {
                            'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                        },

                        "paint": {
                            "circle-color": source_layer[_source_layer_group_id][property]['circle-color'],
                            "circle-radius": parseInt(source_layer[_source_layer_group_id][property]['circle-radius']),
                            "circle-blur": parseInt(source_layer[_source_layer_group_id][property]['circle-blur'])
                        },
                    });


                    // ............... circle highlight layer .................................



                    map.addLayer({
                        "id": _highlight_id,
                        "type": 'circle',
                        "source": _area,

                        "source-layer": property,



                        "layout": {
                            'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                        },

                        "paint": {
                            "circle-color": source_layer[_source_layer_group_id][property]['circle-color-highlight'],
                            "circle-radius": parseInt(source_layer[_source_layer_group_id][property]['circle-radius-highlight']),
                            "circle-blur": parseInt(source_layer[_source_layer_group_id][property]['circle-blur'])
                        },

                        "filter": ["==", "uid", ""]




                    });




                }//if point, circle

                else if (source_layer[_source_layer_group_id][property]['type'] === 'line') {

                    map.addLayer({
                        "id": property,
                        "type": "line",
                        "source": _area,

                        "source-layer": property,

                        "layout": {
                            'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                            "line-join": source_layer[_source_layer_group_id][property]['line-join'],
                            "line-cap": source_layer[_source_layer_group_id][property]['line-cap'],
                        },
                        "paint": {

                            "line-color": source_layer[_source_layer_group_id][property]['line-color'],
                            "line-width": parseInt(source_layer[_source_layer_group_id][property]['line-width'])
                        }
                    });


                    // ............... line highlight layer .................................



                    map.addLayer({
                        "id": _highlight_id,
                        "type": "line",
                        "source": _area,

                        "source-layer": property,

                        "layout": {
                            'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                            "line-join": source_layer[_source_layer_group_id][property]['line-join'],
                            "line-cap": source_layer[_source_layer_group_id][property]['line-cap'],
                        },
                        "paint": {

                            "line-color": source_layer[_source_layer_group_id][property]['line-color'],
                            "line-width": parseInt(source_layer[_source_layer_group_id][property]['line-width-highlight'])
                        },

                        "filter": ["==", "uid", ""]


                    });



                }//else line


                else if (source_layer[_source_layer_group_id][property]['type'] === 'fill') {


                    map.addLayer({
                        'id': property,
                        'type': 'fill',
                        "source": _area,

                        "source-layer": property,

                        "layout": {
                            'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                        },

                        'paint': {
                            'fill-color': source_layer[_source_layer_group_id][property]['fill-color'],
                            'fill-outline-color': source_layer[_source_layer_group_id][property]['fill-outline-color']

                        }
                    });



                    // ............... fill highlight layer .................................


                    map.addLayer({
                        'id': _highlight_id,
                        'type': 'fill',
                        "source": _area,

                        "source-layer": property,

                        "layout": {
                            'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                        },

                        'paint': {
                            'fill-color': source_layer[_source_layer_group_id][property]['fill-color-highlight'],
                            'fill-outline-color': source_layer[_source_layer_group_id][property]['fill-outline-color']

                        },

                        "filter": ["==", "uid", ""]

                    });







                }// else polygon fill


                // for testing sample "hide show layer"
                // addLayer(property, property);



            }//if 
        }// for 


        //============End ==========================   add layers to map =========================================




    }); // map.on('style.load')






    // ===========   mouse over event, show feature detail property in info-table ===============
    map.on('mousemove', function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: source_layer_id });
        var features_hightlight = map.queryRenderedFeatures(e.point, { layers: source_layer_id_highlight });

        //  hand to pointer hand if there is features 
        map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';


        var instand_info_table = "";

        for (var i = 0; i < features.length; i++) {



            var element = features[i];



            // filter only display our feature, not base map feature.

            if (element.layer.id in source_layer[_source_layer_group_id]) {

                var instant_info = "<br/><div><span>" + element.layer.id + "<ul>";

                for (var _key in element.properties) {
                    var _value = String(element.properties[_key]);
                    instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _key + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

                }// for


                instant_info = instant_info + "</ul> </span></div>";


                instand_info_table = instand_info_table + instant_info;
            }// if filter




            //...................................... highlight feature ................................
            map.setFilter(element.layer.id + '_highlight', ["==", "uid", element.properties.uid]);


            //......................End of .......... highlight feature ................................







        }//for feature length


        // update bottom <div>
        document.getElementById("info-table").innerHTML = instand_info_table;













    });
    // =========== End =====  mouse over event, show feature detail property in info-table ===============












    // -------------------- click event open a popup at the location of the feature -----------------------------

    map.on('click', function (e) {
        var features = map.queryRenderedFeatures(e.point);
        if (!features.length) {
            return;
        }

        var _not_popup = false;

        var _popup_html = "<div style='width:180px; height:120px;text-align: center; overflow-x:scroll; overflow-y:scroll; overflow:auto;'><table >";

        for (var j = 0; j < features.length; j++) {

            var element = features[j];


            // filter only display our feature, not base map feature.

            if (element.layer.id in source_layer[_source_layer_group_id]) {

                _not_popup = true;

                var _popup_html_section = "<tr><td ><span style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + element.layer.id + "&nbsp;</font></span></td><td>" + " " + "</td></tr>";

                for (var _key in element.properties) {
                    var _value = String(element.properties[_key]);

                    _popup_html_section = _popup_html_section + "<tr><td ><span style=\"float:left; list-style: none;font-size:10px\">" + _key + "</span></td><td><span style=\"float:left; list-style: none;font-size:8px\">" + _value + "</span></td></tr>";

                }// for

                _popup_html = _popup_html + _popup_html_section;

            }//if filter

        }//for

        _popup_html = _popup_html + "</table></div>";


        if (_not_popup) {
            var popup = new mapboxgl.Popup()
                .setLngLat(map.unproject(e.point))
                .setHTML(_popup_html)
                .addTo(map);

        }//if 

    }); // map on click


    // --------------------End -------------- click event open a popup at the location of the feature -----------------------------



}



function init_vector_singlelayer_highlight_geojson(_area, _subject) {


    var _current_layer = _area + '_' + _subject;
    var  _current_layer_highlight = _current_layer + '_highlight';


    _tileserver_url = _tileserver_base_url + _area + '/{z}/{x}/{y}.pbf';

   
    map.on('load', function () {

        map.addSource(_area, {

            type: 'vector',

            //url: 'mapbox://hoogw.0pywwk0d'


            "tiles": [
                        // 'http://localhost:10/tileserver/tileserver.php?/index.json?/city/{z}/{x}/{y}.pbf'

                        _tileserver_url
            ],
            "maxzoom": 22


        });




        //==================================   add layers to map ================



      

        if (source_layer['all_layers'][_current_layer]['type'] === 'circle') {

                    map.addLayer({
                        "id": _current_layer,
                        "type": 'circle',
                        "source": _area,

                        "source-layer": _current_layer,



                        "layout": {
                            'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                        },

                        "paint": {
                            "circle-color": source_layer['all_layers'][_current_layer]['circle-color'],
                            "circle-radius": parseInt(source_layer['all_layers'][_current_layer]['circle-radius']),
                            "circle-blur": parseInt(source_layer['all_layers'][_current_layer]['circle-blur'])
                        },
                    });


                   




                }//if point, circle

                else if (source_layer['all_layers'][_current_layer]['type'] === 'line') {

                    map.addLayer({
                        "id": _current_layer,
                        "type": "line",
                        "source": _area,

                        "source-layer": _current_layer,

                        "layout": {
                            'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                            "line-join": source_layer['all_layers'][_current_layer]['line-join'],
                            "line-cap": source_layer['all_layers'][_current_layer]['line-cap'],
                        },
                        "paint": {

                            "line-color": source_layer['all_layers'][_current_layer]['line-color'],
                            "line-width": parseInt(source_layer['all_layers'][_current_layer]['line-width'])
                        }
                    });


                   



                }//else line


                else if (source_layer['all_layers'][_current_layer]['type'] === 'fill') {


                    map.addLayer({
                        'id': _current_layer,
                        'type': 'fill',
                        "source": _area,

                        "source-layer": _current_layer,

                        "layout": {
                            'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                        },

                        'paint': {
                            'fill-color': source_layer['all_layers'][_current_layer]['fill-color'],
                            'fill-outline-color': source_layer['all_layers'][_current_layer]['fill-outline-color']
                           // "fill-opacity": 0
                        }
                    });



                   



                }// else polygon fill


               
        //============End ==========================   add layers to map =========================================




    }); // map.on('style.load')






    // ===========   mouse over event, show feature detail property in info-table ===============
    map.on('mousemove', function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: [_current_layer] });
       // var features_hightlight = map.queryRenderedFeatures(e.point, { layers: [_current_layer_highlight] });

        //  hand to pointer hand if there is features 
        map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';


        var instand_info_table = "";

        for (var i = 0; i < features.length; i++) {



            var element = features[i];



           //.............. .......... info-table ..............

                var instant_info = "<br/><div><span>" + element.layer.id + "<ul>";

                for (var _key in element.properties) {
                    var _value = String(element.properties[_key]);
                    instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _key + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

                }// for


                instant_info = instant_info + "</ul> </span></div>";


                instand_info_table = instand_info_table + instant_info;
           
            //.............. End ........... info-table ..............




            


        }//for feature length


        // update bottom <div>
        document.getElementById("info-table").innerHTML = instand_info_table;







      

        //.............................................................. highlight add geojson layer ..............................................................


        var _highlight_features_geojson = {
                                                "type": "FeatureCollection",
                                                "features": features

                                        }



        // remove last time highlight source and layer
        if (highlight_geojson_source) {

                                                map.removeSource("highlight_geojson");
                                                map.removeLayer('highlight_geojson_layer');

                                            }//if


        // add current new highlight source
        highlight_geojson_source =    map.addSource("highlight_geojson", {
                                                                                "type": "geojson",
                                                                                "data": _highlight_features_geojson

                                                                            });




        // add current new highlight layer
            if (source_layer['all_layers'][_current_layer]['type'] === 'circle') {

                            highlight_geojson_layer = map.addLayer({
                                'id': 'highlight_geojson_layer',
                                'type': 'circle',
                                'source': 'highlight_geojson',
                                
                                "layout": {
                                    'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                                },

                                "paint": {
                                    "circle-color": source_layer['all_layers'][_current_layer]['circle-color-highlight'],
                                    "circle-radius": parseInt(source_layer['all_layers'][_current_layer]['circle-radius-highlight']),
                                    "circle-blur": parseInt(source_layer['all_layers'][_current_layer]['circle-blur'])
                                }
                            });





                    }//if point, circle

                    else if (source_layer['all_layers'][_current_layer]['type'] === 'line') {

                                        
                                    highlight_geojson_layer = map.addLayer({
                                        'id': 'highlight_geojson_layer',
                                        'type': 'line',
                                        'source': 'highlight_geojson',
                                        'layout': {},
                                        'paint': {
                                           
                                            "line-color": source_layer['all_layers'][_current_layer]['line-color'],
                                            "line-width": parseInt(source_layer['all_layers'][_current_layer]['line-width-highlight'])
                                               

                                        }
                                    });



                                }//else line


                                else if (source_layer['all_layers'][_current_layer]['type'] === 'fill') {


                                            highlight_geojson_layer = map.addLayer({
                                                'id': 'highlight_geojson_layer',
                                                'type': 'fill',
                                                'source': 'highlight_geojson',
                                                'layout': {},
                                                'paint': {
                                                    'fill-color': source_layer['all_layers'][_current_layer]['fill-color-highlight']
               
                                                }
                                            });




                                }// else polygon fill

        

        //...............ENd ........................................... highlight add geojson layer .................




    });
    // =========== End =====  mouse over event, show feature detail property in info-table ===============












    // -------------------- click event open a popup at the location of the feature -----------------------------

    map.on('click', function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: [_current_layer] });
        if (!features.length) {
            return;
        }

        var _not_popup = false;

        var _popup_html = "<div style='width:180px; height:120px;text-align: center; overflow-x:scroll; overflow-y:scroll; overflow:auto;'><table >";

        for (var j = 0; j < features.length; j++) {

            var element = features[j];


           

                _not_popup = true;

                var _popup_html_section = "<tr><td ><span style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + element.layer.id + "&nbsp;</font></span></td><td>" + " " + "</td></tr>";

                for (var _key in element.properties) {
                    var _value = String(element.properties[_key]);

                    _popup_html_section = _popup_html_section + "<tr><td ><span style=\"float:left; list-style: none;font-size:10px\">" + _key + "</span></td><td><span style=\"float:left; list-style: none;font-size:8px\">" + _value + "</span></td></tr>";

                }// for

                _popup_html = _popup_html + _popup_html_section;

            

        }//for

        _popup_html = _popup_html + "</table></div>";


        if (_not_popup) {
            var popup = new mapboxgl.Popup()
                .setLngLat(map.unproject(e.point))
                .setHTML(_popup_html)
                .addTo(map);

        }//if 

    }); // map on click


    // --------------------End -------------- click event open a popup at the location of the feature -----------------------------



}


function init_vector_singlelayer_highlight_layer(_area, _subject) {


    var _current_layer = _area + '_' + _subject;
    var _current_layer_highlight = _current_layer + '_highlight';


    _tileserver_url = _tileserver_base_url + _area + '/{z}/{x}/{y}.pbf';


    map.on('load', function () {

        map.addSource(_area, {

            type: 'vector',

            //url: 'mapbox://hoogw.0pywwk0d'


            "tiles": [
                        // 'http://localhost:10/tileserver/tileserver.php?/index.json?/city/{z}/{x}/{y}.pbf'

                        _tileserver_url
            ],
            "maxzoom": 22


        });




        //==================================   add layers to map ================





        if (source_layer['all_layers'][_current_layer]['type'] === 'circle') {

            map.addLayer({
                "id": _current_layer,
                "type": 'circle',
                "source": _area,

                "source-layer": _current_layer,



                "layout": {
                    'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                },

                "paint": {
                    "circle-color": source_layer['all_layers'][_current_layer]['circle-color'],
                    "circle-radius": parseInt(source_layer['all_layers'][_current_layer]['circle-radius']),
                    "circle-blur": parseInt(source_layer['all_layers'][_current_layer]['circle-blur'])
                },
            });


            // ............... circle highlight layer .................................



            map.addLayer({
                "id": _current_layer_highlight,
                "type": 'circle',
                "source": _area,

                "source-layer": _current_layer,



                "layout": {
                    'visibility': 'visible'             // this property must be present in order for checkbox button menu work properly. 
                },

                "paint": {
                    "circle-color": source_layer['all_layers'][_current_layer]['circle-color-highlight'],
                    "circle-radius": parseInt(source_layer['all_layers'][_current_layer]['circle-radius-highlight']),
                    "circle-blur": parseInt(source_layer['all_layers'][_current_layer]['circle-blur'])
                },

                "filter": ["==", "uid", ""]




            });




        }//if point, circle

        else if (source_layer['all_layers'][_current_layer]['type'] === 'line') {

            map.addLayer({
                "id": _current_layer,
                "type": "line",
                "source": _area,

                "source-layer": _current_layer,

                "layout": {
                    'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                    "line-join": source_layer['all_layers'][_current_layer]['line-join'],
                    "line-cap": source_layer['all_layers'][_current_layer]['line-cap'],
                },
                "paint": {

                    "line-color": source_layer['all_layers'][_current_layer]['line-color'],
                    "line-width": parseInt(source_layer['all_layers'][_current_layer]['line-width'])
                }
            });


            // ............... line highlight layer .................................



            map.addLayer({
                "id": _current_layer_highlight,
                "type": "line",
                "source": _area,

                "source-layer": _current_layer,

                "layout": {
                    'visibility': 'visible',       // this property must be present in order for checkbox button menu work properly. 
                    "line-join": source_layer['all_layers'][_current_layer]['line-join'],
                    "line-cap": source_layer['all_layers'][_current_layer]['line-cap'],
                },
                "paint": {

                    "line-color": source_layer['all_layers'][_current_layer]['line-color'],
                    "line-width": parseInt(source_layer['all_layers'][_current_layer]['line-width-highlight'])
                },

                "filter": ["==", "uid", ""]


            });



        }//else line


        else if (source_layer['all_layers'][_current_layer]['type'] === 'fill') {


            map.addLayer({
                'id': _current_layer,
                'type': 'fill',
                "source": _area,

                "source-layer": _current_layer,

                "layout": {
                    'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                },

                'paint': {
                    'fill-color': source_layer['all_layers'][_current_layer]['fill-color'],
                    'fill-outline-color': source_layer['all_layers'][_current_layer]['fill-outline-color']
                    
                }
            });



            // ............... fill highlight layer .................................


            map.addLayer({
                'id': _current_layer_highlight,
                'type': 'fill',
                "source": _area,

                "source-layer": _current_layer,

                "layout": {
                    'visibility': 'visible'   // this property must be present in order for checkbox button menu work properly. 
                },

                'paint': {
                    'fill-color': source_layer['all_layers'][_current_layer]['fill-color-highlight'],
                    'fill-outline-color': source_layer['all_layers'][_current_layer]['fill-outline-color']
                    
                },

                "filter": ["==", "uid", ""]

            });







        }// else polygon fill



        //============End ==========================   add layers to map =========================================




    }); // map.on('style.load')






    // ===========   mouse over event, show feature detail property in info-table ===============
    map.on('mousemove', function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: [_current_layer] });
       // var features_hightlight = map.queryRenderedFeatures(e.point, { layers: [_current_layer_highlight] });

        //  hand to pointer hand if there is features 
        map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';


        var instand_info_table = "";

        for (var i = 0; i < features.length; i++) {



            var element = features[i];





            var instant_info = "<br/><div><span>" + element.layer.id + "<ul>";

            for (var _key in element.properties) {
                var _value = String(element.properties[_key]);
                instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + _key + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</li>";

            }// for


            instant_info = instant_info + "</ul> </span></div>";


            instand_info_table = instand_info_table + instant_info;





            //...................................... highlight feature ................................
            map.setFilter(element.layer.id + '_highlight', ["==", "uid", element.properties.uid]);


            //......................End of .......... highlight feature ................................







        }//for feature length


        // update bottom <div>
        document.getElementById("info-table").innerHTML = instand_info_table;













    });
    // =========== End =====  mouse over event, show feature detail property in info-table ===============












    // -------------------- click event open a popup at the location of the feature -----------------------------

    map.on('click', function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: [_current_layer] });
        if (!features.length) {
            return;
        }

        var _not_popup = false;

        var _popup_html = "<div style='width:180px; height:120px;text-align: center; overflow-x:scroll; overflow-y:scroll; overflow:auto;'><table >";

        for (var j = 0; j < features.length; j++) {

            var element = features[j];




            _not_popup = true;

            var _popup_html_section = "<tr><td ><span style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;" + element.layer.id + "&nbsp;</font></span></td><td>" + " " + "</td></tr>";

            for (var _key in element.properties) {
                var _value = String(element.properties[_key]);

                _popup_html_section = _popup_html_section + "<tr><td ><span style=\"float:left; list-style: none;font-size:10px\">" + _key + "</span></td><td><span style=\"float:left; list-style: none;font-size:8px\">" + _value + "</span></td></tr>";

            }// for

            _popup_html = _popup_html + _popup_html_section;



        }//for

        _popup_html = _popup_html + "</table></div>";


        if (_not_popup) {
            var popup = new mapboxgl.Popup()
                .setLngLat(map.unproject(e.point))
                .setHTML(_popup_html)
                .addTo(map);

        }//if 

    }); // map on click


    // --------------------End -------------- click event open a popup at the location of the feature -----------------------------



}





function init_base_map() {

    mapboxgl.accessToken = mapboxgl_accessToken;
    map = new mapboxgl.Map({
        container: 'map-canvas', // container id
        style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location

        //style: 'mapbox://styles/mapbox/emerald-v8',

        // style: 'mapbox://styles/mapbox/satellite-v8',

        //style: 'mapbox://styles/hoogw/cin2d9c6u007aafncyn8nmu36',


        center: [initial_location[2], initial_location[1]], //  starting position[-74.50, 40],
        zoom: initial_location[3] // starting zoom
    });


    map.addControl(new mapboxgl.Navigation());



}



//--------------------------  vectore tile section ------------------------------------





