﻿

// ---------- map click event [3]--------add _map_click --------

function ajax_GeoJSON(gmap,_apiURI_returncountonly,_apiURI,_map_click_event) {
    
    // Load a GeoJSON from the server 
   
   
    $.get(_apiURI_returncountonly, function(data_count_only){
                
                
              //{"type":"FeatureCollection","properties":{"count":24362},"features":[]}  
               var data = JSON.parse(data_count_only).properties.count;
                
           if (parseInt(data) < max_return_feature_limit)
                
            {
             
            
                   // test url if return a number means too many polygon to show.otherwise add polygon to map.
                    $.get(_apiURI, function(data){

             _geojson_object = JSON.parse(data);

           

            //----------------  add new geojson, then remove last geojson --------------------

             


            _last_geojson_layer = _current_geojson_layer;






            _current_geojson_layer = L.geoJson(_geojson_object, {


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


            // ---- after add new geojson, now remove last time old geojson -------------
            // don't use Array.ForEach is about 95% slower than for() in JavaScript.

            if (_last_geojson_layer) {

              

                map.removeLayer(_last_geojson_layer);

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
            if (_map_click_event) {
            }
            else {
                _mapclick_in_use = false;
            }

            //-------------------------------------------------------------


});// get// end get process geojson


        }
            // returning number of count
        else {


            // ---------- if return number, should remove last time geojson -----------
            _last_geojson_layer = _current_geojson_layer;
            if (_last_geojson_layer) {

                map.removeLayer(_last_geojson_layer);


            }// if
            //-------------------- end remove last geojson ------------------------------




// show 'utfgrid_info' <div>
            $('#utfgrid_info').show();
            // empty bottom <div>
            document.getElementById("info-table").innerHTML = "";


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







  
  
    initial_location = set_initial_location($("#areaID").val());




    init_base_map();
    

            //  ***** this add map listenner must be befor map.setView, *******************
                    add_map_listener_idle();

   
                    map.setView(new L.LatLng(initial_location[1], initial_location[2]), initial_location[3]);

           //  ***** end  **** this add map listenner must be befor map.setView, *******************



    add_area_boundary($("#areaID").val());



    



    //------tile[1] ---------
    init_tiling();




    geocoding();


    



}// initialize










$(document).ready(function () {



base_url = document.getElementById('base_url').value;

    initialize();





}); // document ready function