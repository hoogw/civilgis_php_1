﻿



function initialize() {


    initial_location = set_initial_location($("#areaID").val());



    //---------------- init - mapboxGL  ----------------


    init_base_map();

    

    // add var geocoder
    geocoder();

    //---------------- end of  init - mapboxGL -----------


    var _vector_style_js = base_url + "public/js/map_init/source_layer/" + $("#areaID").val() + ".js";

    $.when(
             $.getScript(_vector_style_js)
                        

    ).done(function () {


        singlelayer_vector_highlight_geojson($("#areaID").val(), $("#subjectID").val());


        singlelayer_rendered_feature_binding_scroller_highlight_geojson_property_table($("#areaID").val() + "_" + $("#subjectID").val())

    
    });//done

                add_area_boundary($("#areaID").val());
                

   
   

}// initialize








$(document).ready(function () {



base_url = document.getElementById('base_url').value;

    initialize();





}); // document ready function




