




function initialize() {





  
  
    initial_location = set_initial_location($("#areaID").val());

   


    init_base_map();
    

            //  ***** this add map listenner must be befor map.setView, *******************
                   // add_map_listener_idle();
                     add_map_data();
   
                    map.setView(new L.LatLng(initial_location[1], initial_location[2]), initial_location[3]);

           //  ***** end  **** this add map listenner must be befor map.setView, *******************



    add_area_boundary($("#areaID").val());




}// initialize










$(document).ready(function () {



base_url = document.getElementById('base_url').value;

    initialize();





}); // document ready function