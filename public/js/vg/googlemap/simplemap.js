














function initialize() {
    
    add_area_boundary($("#areaID").val());
    
    
    infowindow = new google.maps.InfoWindow();
        
         //   base_url = '/civilgis/public/';
         base_url = document.getElementById('base_url').value;
         
       
             initial_location = set_initial_location($("#areaID").val());
           
        var mapOptions = {
                            
                             //center: new google.maps.LatLng(33.65992448007282, -117.91505813598633),
                             center: new google.maps.LatLng(initial_location[1], initial_location[2]),
                             //mapTypeId: google.maps.MapTypeId.ROADMAP
                            // mapTypeId: google.maps.MapTypeId.HYBRID
                           };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        map.setZoom(initial_location[3]);
        
      
      
     
            add_mapdata_listener();
               
           //add_map_listener_idle();
           
           add_map_data();
   
    
    }// initialize
    
    
    
    
    
    
    



$(document).ready(function () {

         base_url = document.getElementById('base_url').value;


       


       //  load data for google map and lower datatable 
       //   google.maps.event.addDomListener(window, 'load', initialize);

    
    
    

    }); // document ready function