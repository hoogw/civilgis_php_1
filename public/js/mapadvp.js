


function feed_datatables(_geojson_obj){
    
    

     
       //_geojson_obj_array = _geojson_object.features;
       _geojson_obj_array = _geojson_obj["features"];
      
      
      // get the key [column name]
      var _properties =  _geojson_obj_array[0].properties;
      
      
      var tableHeaders="";
      $("#tableDiv").empty();
     
    /* 
     var _column_def = [
                                                { data : 'properties.LANDNAME' },
                                                { data: 'properties.ID' },
                                                { data: 'properties.COUNTY' },
                                                { data: 'properties.CFCC' }
                                            ];
    */
     _dt_columns_count = 0;
     var _column_def = [];
     var _column0 = {};
     /*
      _column0['data'] = 'properties.LANDNAME';
      _column_def.push(_column0);
      _column0 = {};
      _column0['data'] = 'properties.ID';
      _column_def.push(_column0);
      _column0 = {};
      _column0['data'] = 'properties.COUNTY';
      _column_def.push(_column0);
      _column0 = {};
      _column0['data'] = 'properties.CFCC';
      _column_def.push(_column0);
     */
      
      Object.keys(_properties).forEach(function(k) 
                        {
                            //alert(k);
                            _dt_columns.push(k);
                            
                            tableHeaders += "<th>" + k + "</th>";
                            
                            // build column.data def
                            _column0 = {};
                            _column0['data'] = 'properties.'+k;
                            _column_def.push(_column0);   
                               
                             _dt_columns_count = _dt_columns_count +1;  
                               
                            
                        }); // object key
          
         /* define last column as geo feaure ID
         tableHeaders += "<th> Geo.Feature.ID</th>";   
         _column0 = {};
         _column0['data'] = '_id.$id';
         _column_def.push(_column0); 
         */
         
         $("#tableDiv").append('<table id="tabledata" class="display nowrap" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead><tfoot><tr>'+ tableHeaders + '</tr></tfoot></table>');
      //$("#tableDiv").append('<table id="tabledata" class="display" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead></table>');
      //$("#tableDiv").find("table thead tr").append(tableHeaders); 
      
                         
      
      
           //  datatable
          $('#tabledata').DataTable({
                                   // must put destroy:true, to destroy last time old datatable initialization, before put new initialization
                                   destroy: true,
                                   data: _geojson_obj_array,
                                   
                                   
                                   columns: _column_def,
                                    
                                    
                                    "pagingType": "full_numbers",    
                                    
                                    // resize the datatables height here scrollY:150
                                    scrollY: 200,
                                    scrollX: true
                                    
                                    
                                                    
                            }); // datatable
                            
                            
                            
                            
                           
                            // ajax click row event show corespoinding data.feature[] on google map 
                  var table = $('#tabledata').DataTable();
                            
                        $('#tabledata tbody').on('mouseover', 'td', function () 
                                   {
                                           var instant_info = "<ul>";
                                                                                    
                                           var colIdx = table.cell(this).index().column;
                                                                                     
                                           var rowIdx =  table.cell(this).index().row;
                                                                                     
                                           var _geo_ID = table.cell(rowIdx, _dt_columns_count-1 ).data();           
                                                                    
                                            // high light yellow the feature polygon on google map
                                            
                                            //var _Data_Feature =  map.data.getFeatureById(_geo_ID);
                                            map.data.forEach( function(_feature)
                                            {
                                                
                                                if (_feature.getProperty('GeoFeatureID') === _geo_ID){
                                                    
                                                    //alert(_feature.getProperty('GeoFeatureID'));
                                                    
                                                     map.data.revertStyle();
                                                     map.data.overrideStyle(_feature, {
                                                                            //strokeWeight: 8,
                                                                            strokeColor: '#FFFF00',
                                                                            fillOpacity: 0.3,
                                                                            fillColor:'#FFFF00'
                                                                        });// overrideStyle
                                                    
                                                }//
                                                
                                                /*
                                                        var _a="";
                                                       _feature.forEachProperty(function(_value, _property){
                                                            _a = _a +_property + ':' + _value + '   ';
                                                            
                                                            });// forEachProperty
                                                 */

                                            });// map.data.foreach
                                            
                                                           
                            
                                           table.columns().every( function (cllmnIndex) 
                                                {                                 
                                                   // alert(table.cell(rowIdx, cllmnIndex ).data());
                                                            
                                                  var _property = table.column(cllmnIndex).header();
                                                  var _value = table.cell(rowIdx, cllmnIndex ).data();
                                                    
                                                  instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;"+ $(_property).html() + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ "</li>";

                                                  instant_info = instant_info + "</ul>";
                                                                                      
                                                } );// loop through each column for that specific row
                                                   
                                                // update bottom <div>
                                             document.getElementById("info-table").innerHTML = instant_info;   
                                                                   
                                   } ); // click cell event    
                            
                            
                         $('#tabledata tbody').on('mouseout', 'td', function () 
                                   {
                                       
                                        // remove all high light yellow the feature polygon on google map
                                       // Remove custom styles.
                                        map.data.setStyle({});
                                        
                                        
                                        // empty bottom <div>
                                         document.getElementById("info-table").innerHTML = "";
                            } ); 
                           
                         
                  
    
    
    
}







function ajax_sync_GeoJSON(gmap,_apiURI) {
    
    // Load a GeoJSON from the server 
   
            
            // before load new geoJSON feature, need to remove all current geoJSON feature.
            
                    var callback=function(feature) {
                                        //If you want, check here for some constraints.
                                            gmap.data.remove(feature);
                                            };
                            gmap.data.forEach(callback);
            
            
          // alert(_apiURI);
            
            
               // $.ajax (async = false) replace $.get , becaus click - fly to map function need sync, or wait ajax call finished to color the red polygon 
            // =======================================================
            $.ajax({
                    url : _apiURI,
                    type : "get",
                    async: false,
                    success : function(data){
            // var promise    =  $.get(_apiURI);
            //    promise.then(function(data){
                        if(isNaN(data)){
                            // returning geoJSON 
                        
                          
                            //gmap.data.loadGeoJson(_apiURI);

                            // Note: data is a string, not a javascript object.
                            //the function addGeoJson needs a javascript object and not a string. so you must convert string to javascript object before feed into addGeoJson
                            // if you use loadGeoJson(url), do not need any formate change, feed URL return string, the loadGeoJson will do with returning string.

                            _geojson_object = JSON.parse(data);


                                        //------------- add each _id:{"$id": "55e8c24e382f9fe337f0d8fe"}  to properties before draw on map. -------------

                                         var _features_array = _geojson_object['features'];

                                         var _id_obj;
                                         var _id_obj_id;
                                         var _propty_obj;

                                         _features_array.forEach( function (eachFeatueItem)
                                             {
                                                  _id_obj = eachFeatueItem['_id'];
                                                  _id_obj_id = _id_obj['$id'];
                                                 _propty_obj = eachFeatueItem['properties'];
                                                 _propty_obj['GeoFeatureID']=_id_obj_id;

                                             });// features_array_foreach

                                         _geojson_object['features'] = {};
                                         _geojson_object['features'] = _features_array;
                                        //---------------------------------------------------------------


                           _array_feature = map.data.addGeoJson(_geojson_object);
                           
                           //alert(_array_feature[0]);
                           
                           feed_datatables(_geojson_object);
                           
                           
                           
                           // hidden the title_info
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "none";
                            document.getElementById("legend").style.display = "none";


                            // do not use this, because it have place holder for blank
                            //document.getElementById("title_info").style.visibility = "hidden";


                            document.getElementById("title_info").innerHTML = "";
                            document.getElementById("legend").innerHTML = "";
                            
                           
                            
                            // styleFeature function is only in script block in city.cshtml
                                if (($("#subjectID").val() === 'zoning') || ($("#subjectID").val() === 'general_landuse'))
                            {              
                                // color the zoning and general land use.
                                gmap.data.setStyle(styleFeature);

                            }
                            
                            
                          
                           
                        }
                             // returning number of count, no geojson, clean the datatables
                        else{ 
                            
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "inline";
                            document.getElementById("legend").style.display = "inline";
                            
                            if (data > 0) {
                                    
                                            document.getElementById("title_info").innerHTML = "Found [ " + data + " ] records ZOOM IN for Details  ";

                                         document.getElementById('legend').innerHTML = "Found [ " + data + " ] records ZOOM IN for Details ";

                                     } else {
                                             // data = 0 nothing found clear datatables
                                             $('#tabledata').dataTable().fnClearTable();
                                             //$('#tabledata').dataTable().clear();  // this is api bug, for some reason it failed to clean data.
                                             //$('#tabledata').dataTable().clear().draw();
                                             
                                            document.getElementById("title_info").innerHTML = "Nothing found";
                                            document.getElementById("legend").innerHTML = "Nothing found";
                                }
                        }// if else



                     } ,
                    error: function() {
                       alert("server error");
                    }
                 });
            
            
            
            
          
            
            
            //========================================================
            
            // test url if return a number means too many polygon to show.otherwise add polygon to map.
            /* 
            $.get(_apiURI, function(data){
            // var promise    =  $.get(_apiURI);
            //    promise.then(function(data){
                        if(isNaN(data)){
                            // returning geoJSON 
                        
                          
                            //gmap.data.loadGeoJson(_apiURI);

                            // Note: data is a string, not a javascript object.
                            //the function addGeoJson needs a javascript object and not a string. so you must convert string to javascript object before feed into addGeoJson
                            // if you use loadGeoJson(url), do not need any formate change, feed URL return string, the loadGeoJson will do with returning string.

                            _geojson_object = JSON.parse(data);


                                        //------------- add each _id:{"$id": "55e8c24e382f9fe337f0d8fe"}  to properties before draw on map. -------------

                                         var _features_array = _geojson_object['features'];

                                         var _id_obj;
                                         var _id_obj_id;
                                         var _propty_obj;

                                         _features_array.forEach( function (eachFeatueItem)
                                             {
                                                  _id_obj = eachFeatueItem['_id'];
                                                  _id_obj_id = _id_obj['$id'];
                                                 _propty_obj = eachFeatueItem['properties'];
                                                 _propty_obj['GeoFeatureID']=_id_obj_id;

                                             });// features_array_foreach

                                         _geojson_object['features'] = {};
                                         _geojson_object['features'] = _features_array;
                                        //---------------------------------------------------------------


                           _array_feature = map.data.addGeoJson(_geojson_object);
                           
                           //alert(_array_feature[0]);
                           
                           feed_datatables(_geojson_object);
                           
                           
                           
                           // hidden the title_info
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "none";
                            document.getElementById("legend").style.display = "none";


                            // do not use this, because it have place holder for blank
                            //document.getElementById("title_info").style.visibility = "hidden";


                            document.getElementById("title_info").innerHTML = "";
                            document.getElementById("legend").innerHTML = "";
                            
                           
                            
                            // styleFeature function is only in script block in city.cshtml
                                if (($("#subjectID").val() === 'zoning') || ($("#subjectID").val() === 'general_landuse'))
                            {              
                                // color the zoning and general land use.
                                gmap.data.setStyle(styleFeature);

                            }
                            
                            
                          
                           
                        }
                             // returning number of count, no geojson, clean the datatables
                        else{ 
                            
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "inline";
                            document.getElementById("legend").style.display = "inline";
                            
                            if (data > 0) {
                                    
                                            document.getElementById("title_info").innerHTML = "Found [ " + data + " ] records ZOOM IN for Details  ";

                                         document.getElementById('legend').innerHTML = "Found [ " + data + " ] records ZOOM IN for Details ";

                                     } else {
                                             // data = 0 nothing found clear datatables
                                             $('#tabledata').dataTable().fnClearTable();
                                             //$('#tabledata').dataTable().clear();  // this is api bug, for some reason it failed to clean data.
                                             //$('#tabledata').dataTable().clear().draw();
                                             
                                            document.getElementById("title_info").innerHTML = "Nothing found";
                                            document.getElementById("legend").innerHTML = "Nothing found";
                                }
                        }// if else



                     });// get // promist.then
    
                 */
                
                
                
                
                
}// function ajax_GeoJSON


function ajax_GeoJSON(gmap,_apiURI) {
    
    // Load a GeoJSON from the server 
   
            
            //------tile[3] ---------
                            add_tiles();
            
            
            // before load new geoJSON feature, need to remove all current geoJSON feature.
            
                    var callback=function(feature) {
                                        //If you want, check here for some constraints.
                                            gmap.data.remove(feature);
                                            };
                            gmap.data.forEach(callback);
            
            
          // alert(_apiURI);
            
            
               
            
            // test url if return a number means too many polygon to show.otherwise add polygon to map.
            // 
            $.get(_apiURI, function(data){
            // var promise    =  $.get(_apiURI);
            //    promise.then(function(data){
                        if(isNaN(data)){
                            //------tile[2] ---------- returning geoJSON, need to remove previously tiling layers.  
                            
                           // map.overlayMapTypes.removeAt(0); // if no tile layer before, this will error, use clear() instead. solve the error
                            map.overlayMapTypes.clear();
                            
                            
                          
                            //gmap.data.loadGeoJson(_apiURI);

                            // Note: data is a string, not a javascript object.
                            //the function addGeoJson needs a javascript object and not a string. so you must convert string to javascript object before feed into addGeoJson
                            // if you use loadGeoJson(url), do not need any formate change, feed URL return string, the loadGeoJson will do with returning string.

                            _geojson_object = JSON.parse(data);


                                        //------------- add each _id:{"$id": "55e8c24e382f9fe337f0d8fe"}  to properties before draw on map. -------------

                                         var _features_array = _geojson_object['features'];

                                         var _id_obj;
                                         var _id_obj_id;
                                         var _propty_obj;

                                         _features_array.forEach( function (eachFeatueItem)
                                             {
                                                  _id_obj = eachFeatueItem['_id'];
                                                  _id_obj_id = _id_obj['$id'];
                                                 _propty_obj = eachFeatueItem['properties'];
                                                 _propty_obj['GeoFeatureID']=_id_obj_id;

                                             });// features_array_foreach

                                         _geojson_object['features'] = {};
                                         _geojson_object['features'] = _features_array;
                                        //---------------------------------------------------------------


                           _array_feature = map.data.addGeoJson(_geojson_object);
                           
                           //alert(_array_feature[0]);
                           
                           feed_datatables(_geojson_object);
                           
                           
                           
                           // hidden the title_info
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "none";
                            document.getElementById("legend").style.display = "none";


                            // do not use this, because it have place holder for blank
                            //document.getElementById("title_info").style.visibility = "hidden";


                            document.getElementById("title_info").innerHTML = "";
                            document.getElementById("legend").innerHTML = "";
                            
                           
                            
                            // styleFeature function is only in script block in city.cshtml
                                if (($("#subjectID").val() === 'zoning') || ($("#subjectID").val() === 'general_landuse'))
                            {              
                                // color the zoning and general land use.
                                gmap.data.setStyle(styleFeature);

                            }
                            
                            
                          
                           
                        }
                             // returning number of count, no geojson, clean the datatables
                        else{ 
                            
                            
                            
                            $('#tabledata').dataTable().fnClearTable();
                            
                            
                            document.getElementById("ajaxload").style.display = "none";
                            document.getElementById("title_info").style.display = "inline";
                            document.getElementById("legend").style.display = "inline";
                            
                            if (data > 0) {
                                    
                                            document.getElementById("title_info").innerHTML = "Found [ " + data + " ] records ZOOM IN for Details  ";

                                         document.getElementById('legend').innerHTML = "Found [ " + data + " ] records ZOOM IN for Details ";

                                     } else {
                                             // data = 0 nothing found clear datatables
                                             //$('#tabledata').dataTable().fnClearTable();
                                             //$('#tabledata').dataTable().clear();  // this is api bug, for some reason it failed to clean data.
                                             //$('#tabledata').dataTable().clear().draw();
                                             
                                            document.getElementById("title_info").innerHTML = "Nothing found";
                                            document.getElementById("legend").innerHTML = "Nothing found";
                                }
                        }// if else



                     });// get // promist.then
    
                 
                
                
                
                
                
}// function ajax_GeoJSON



function get_map_bound_callback(_callback){
    
      //document.getElementById("title_info").innerHTML = "MAP BOUNDS [SouthWest, NorthEast] "+ map.getBounds();
              // get current map bounds as URL parameters. 
                 
                 bounds = map.getBounds();
                 southWest = bounds.getSouthWest();
                 northEast = bounds.getNorthEast();
                 SWlong = southWest.lng();
                 SWlat = southWest.lat();
                 NElong = northEast.lng();
                 NElat = northEast.lat();
                  
                  // http://localhost:10/civilgis/api/load/general_landuse/SWlong/SWlat/NElong/NElat/   This is sample URI
                var _url=base_url+ 'api/load/'+ $("#areaID").val() + '/'+$("#subjectID").val()+'/'+SWlong+'/'+SWlat+'/'+NElong+'/'+NElat+'/';
            
                  document.getElementById("ajaxload").style.display = "block";
                  ajax_sync_GeoJSON(map,_url);
    
    _callback();
    
}

function get_map_bound(){
    
      //document.getElementById("title_info").innerHTML = "MAP BOUNDS [SouthWest, NorthEast] "+ map.getBounds();
              // get current map bounds as URL parameters. 
                 
                 
                 
                 
                 
                 bounds = map.getBounds();
                 southWest = bounds.getSouthWest();
                 northEast = bounds.getNorthEast();
                 SWlong = southWest.lng();
                 SWlat = southWest.lat();
                 NElong = northEast.lng();
                 NElat = northEast.lat();
                  
                  // http://localhost:10/civilgis/api/load/general_landuse/SWlong/SWlat/NElong/NElat/   This is sample URI
                var _url=base_url+ 'api/load/'+ $("#areaID").val() + '/'+$("#subjectID").val()+'/'+SWlong+'/'+SWlat+'/'+NElong+'/'+NElat+'/';
            
                  document.getElementById("ajaxload").style.display = "block";
                  ajax_GeoJSON(map,_url);
    
    
    
}

function remove_map_listener(){
    
     google.maps.event.removeListener(listener_dragend);
     google.maps.event.removeListener(listener_zoom_changed);
    
}

function add_map_listener(){
    
      //map.addListener('bounds_changed', function() {  // does not work well
          listener_dragend =  map.addListener('dragend', function() {   
                
                 get_map_bound();
                 
                 
             });
         
         
         
             
         
         
         listener_zoom_changed = map.addListener('zoom_changed', function() {   
              
               get_map_bound();
             });
    
    
    
    
}






function initialize() {
    
        
         //   base_url = '/civilgis/public/';
         //base_url = document.getElementById('base_url').value;
         
        // alert(base_url);
          
            
            initial_location = set_initial_location($("#areaID").val());
            
            
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
        
        
        
        // --------  search address
     geocoder = new google.maps.Geocoder();

     document.getElementById('search_addr').addEventListener('click', function () {
         geocodeAddress(geocoder, map);
     });

    // ---------- 
        
        
        
        
        infowindow = new google.maps.InfoWindow();
        
            // must stay to close info window if user click out side polygon 
         google.maps.event.addListener(map,'click',function() {
             infowindow.close();
              document.getElementById("info-table").innerHTML = "";
         });
     
         
          map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('legend'));
     
 
     
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
                  map.data.revertStyle();                 
                  map.data.overrideStyle(event.feature, {
                      strokeWeight: 8,
                      strokeColor: '#fff',
                      fillOpacity: 0.01
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
                  map.data.revertStyle();
                  
                   // empty bottom <div>
               document.getElementById("info-table").innerHTML = "";
               //infowindow.close();
               
              });


       add_map_listener();
      // initial load all geoJSON feature.
            
            var _url_init = base_url+ 'api/load/'+$("#areaID").val() + '/'+$("#subjectID").val() + initial_location[4];
            ajax_GeoJSON(map,_url_init);
    
    
    

         /*
        // ------------No need zoom_changed and dragend listener, because idle listener can handle them all.              
                // map.getBounds() have to be inside of addlistener, if you only call map.getBounds, will get error bounds undefined  -Cannot read property 'getSouthWest' of undefined
                // so I put it in idle event, this event is fired when the map becomes idle after panning or zooming
                
           
                listener_idle =  map.addListener('idle', function() {   

                        get_map_bound(function(){} );


                    });
            
        //--------------------------------------------------------------------------------------------------
    */ 
        
        add_area_boundary($("#areaID").val());
        
    }// initialize
    
    
function datatablesX(){
      //var base_url = document.getElementById('base_url').value;
      
       var _urlx = base_url+ 'api/maptabledata2/' + $("#areaID").val() + '/' + $("#subjectID").val() + '/';
       var _url_headerx = base_url+ 'api/maptableheader2/'+ $("#areaID").val() + '/' + $("#subjectID").val() + '/';
     
     
     
            // get column name and build table header and footer in DOM
        var  build_hearder =  $.ajax({
                                    "url": _url_headerx,
                                    "success": function(json) {
                                       
                                        // must define tableHeaders =""; otherwise, will output "undefineundefine" above header on page.
                                        var tableHeaders="";
                                        
                                        $.each(json.columns, function(i, val){
                                            tableHeaders += "<th>" + val + "</th>";
                                        });

                                        $("#tableDivX").empty();
                                        $("#tableDivX").append('<table id="tabledataX" class="display nowrap" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead><tfoot><tr>'+ tableHeaders + '</tr></tfoot></table>');
                                        //$("#tableDiv").append('<table id="tabledata" class="display" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead></table>');
                                        //$("#tableDiv").find("table thead tr").append(tableHeaders);  

                                        //$('#displayTable').dataTable(json);
                                    },
                                    "dataType": "json"
                                });// ajax
       
       
       
       // must wait until header are build in DOM then can start datatable js
       $.when( build_hearder ).done(function()
                {
    
                            //  datatable
                            $('#tabledataX').DataTable({
                                            
                                           "pagingType": "full_numbers",
                                           
                                           //for input page number plugin
                                           //"sPaginationType": "input",
                                           //"sPaginationType": "scrolling",
                                           
                                                            "processing": true,
                                                            "serverSide": true,
                                                            "ajax":{
                                                                    url :_urlx, // json datasource
                                                                    type: "post",  // method  , by default get
                                                                    error: function(){  // error handling
                                                                            $(".tabledata-error").html("");
                                                                            $("#tabledata").append('<tbody class="tabledata-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                                                            $("#tabledata_processing").css("display","none");

                                                                    }// error
                                                                },  // ajax
                                                                
                                                                scrollY: 200,
                                                                scrollX: true
                                                                
                                                                
                                                                
                                                                
                                                                
                                                        
                            }); // datatableX
                            
                            
                            
                           
                            var table = $('#tabledataX').DataTable();
                            
                           
           
                             // ajax click row event fly to on map 
                            $('#tabledataX tbody').on('click', 'tr', function () 
                                   {
                                      
                                        //------ click select the row --------------
                                                    if ( $(this).hasClass('selected') ) {
                                                      //  $(this).removeClass('selected');
                                                    }
                                                    else {
                                                        table.$('tr.selected').removeClass('selected');
                                                        $(this).addClass('selected');
                                                    }
                                       //-------------------------------------
                                         
                                                                                    
                                      //------------ get current row data ( lat, long, geoFID)  -------------------------                                              
                                           
                                             var _rowIdx = table.row( this ).index();  
                                                                                     
                                           table.columns().every( function (cllmnIndex) 
                                                {                                 
                                                   // alert(table.cell(rowIdx, cllmnIndex ).data());
                                                            
                                                        var _header_tag_node = table.column(cllmnIndex).header();
                                                  
                                                        var _column_nm =   $(_header_tag_node).html();
                                                         
                                                        if (_column_nm === 'Lat')
                                                        {
                                                          _lat = table.cell(_rowIdx, cllmnIndex ).data();
                                                        }// if lat 

                                                       if (_column_nm === 'Long')
                                                        {
                                                          _long = table.cell(_rowIdx, cllmnIndex ).data();
                                                        }// if long

                                                        if (_column_nm === 'GeoFID')
                                                        {
                                                          _geoFID = table.cell(_rowIdx, cllmnIndex ).data();
                                                        }// if geoFID 
                                                                      
                                                } );// loop through each column for that specific row
                                                  
                                          //-----------------------------------------------------------------------  
                                                  
                                  
                                
                                // ---------- add marker to place ---------------------------
                                
                                   //remove old marker
                                if(flyto_marker)  //if marker is not null then clear last marker
                                            {
                                                flyto_marker.setMap(null);

                                             }
                                     // add new marker 
                                             flyto_marker = new google.maps.Marker({
                                                map: map,
                                                position: {lat: _lat, lng: _long},
                                                // icon: iconBase + 'custome_icon.png'
                                                label: 'X'
                                             });
                                                 
                                                  
                                           
                                            
                                //-------------------------------------------------------------
                                
                                
                                
                                          //--------------------------  fly to on map ---------------------------
                      if (!(_lat == 999) && !(_long == 999)) {                  
                                            remove_map_listener();
                                          
                                       
                                            var _center = new google.maps.LatLng(_lat, _long);
                                           
                                            //map.setCenter(_center);
                                             map.panTo(_center);
                                             
                                            map.setZoom(_flyto_zoomlevel);
                                            
                                            
                                            
                                              
                                            
                                            // after zoom and pan, load geojson
                                            get_map_bound_callback(function(){
                                                
                                                       // after panto and zoom to, will fire map "idle" event to load geoJSON.                                           
                                                      // use get_map_bound callback function to wait "idle" event finish loading geoJSON into map.data, otherwise mess up   
                                       
                                                    // highlight selected feature by red color 
                                                        map.data.forEach( function(_feature)
                                                        {
                                                          
                                                            if (_feature.getProperty('GeoFeatureID') === _geoFID){

                                                                 map.data.revertStyle();
                                                                 map.data.overrideStyle(_feature, {
                                                                                        strokeWeight: 8,
                                                                                        strokeColor: '#FF0000',
                                                                                        fillOpacity: 0.3,
                                                                                        fillColor:'#FF0000'
                                                                                    });// overrideStyle

                                                               // alert(_feature.getProperty('GeoFeatureID'));                    

                                                            }//if

                                                        });// map.data.foreach
                                                
                                                
                                            }); // get map bound callback function()
                                           
                                         
                                      //--------------------------------------------------------------------------      
                                         
                                    
                                   // add back listener
                                     add_map_listener();
                                    /* add back idle listener
                                    listener_idle =  map.addListener('idle', function() {   
                                                                get_map_bound();
                                                            });
                                       
                                       */
                                      
                                  }// if   
                                   else {
                                       // no lat, no long
                                       alert("No location info found");
                                   }
                                   
                                
                        } ); // click cell event  
                              
                            
                            
                            
                     /*   temperary  disable,    mouseover and mouseout event display row info on info-table div
                            
                            $('#tabledataX tbody').on('mouseover', 'td', function () 
                                   {
                                      
                                       
                                           var instant_info = "<ul>";
                                                                                    
                                           var colIdx = table.cell(this).index().column;
                                                                                     
                                           var rowIdx =  table.cell(this).index().row;
                                                                                     
                                          
                                                                                     
                                                                                     
                                                                                     
                                           table.columns().every( function (cllmnIndex) 
                                                {                                 
                                                   // alert(table.cell(rowIdx, cllmnIndex ).data());
                                                            
                                                  var _property = table.column(cllmnIndex).header();
                                                  var _value = table.cell(rowIdx, cllmnIndex ).data();
                                                    
                                                  instant_info = instant_info + "<li style=\"float:left; list-style: none;\"><span style=\"background-color: #454545;\"><font color=\"white\">&nbsp;"+ $(_property).html() + "&nbsp;</font></span>" + "&nbsp;&nbsp;" + _value + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ "</li>";

                                                  instant_info = instant_info + "</ul>";
                                                                                      
                                                } );// loop through each column for that specific row
                                                   
                                                // update bottom <div>
                                             document.getElementById("info-tableX").innerHTML = instant_info;   
                                                                   
                                   } ); // mouseover cell event    
                            
                            
                         $('#tabledataX tbody').on('mouseout', 'td', function () 
                                   {
                                      
                                       
                                        // empty bottom <div>
                                         document.getElementById("info-tableX").innerHTML = "";
                            } ); 
                           
                           
                           
                         */  
                        
                            
                   
                }); // when done
        
        
        
        
    }
    
    
    
    


// datatables paged js
 $(document).ready(function () {

         base_url = document.getElementById('base_url').value;


       


       //  load data for google map and lower datatable 
          google.maps.event.addDomListener(window, 'load', initialize);

    
    
        // load data for upper entire datatable
          datatablesX();
    

    }); // document ready function
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

/*    
function addMarker(i, lat, lng, img, name, price) {
    
    var base_url = '/civilgis/public/';
    
    
    if (lat !== null && lng !== null) {
        myLatLng = new google.maps.LatLng(lat, lng);
        bounds = new google.maps.LatLngBounds();
        var imageUrl = base_url+ 'img/marker.png';
        var markerImage = new google.maps.MarkerImage(imageUrl, null, null, null, new google.maps.Size(20, 36));
        eval('var marker' + i + ' = new google.maps.Marker({ position: myLatLng,  map: map, icon: markerImage, zIndex: i});');
        var marker_obj = eval('marker' + i);
        bounds.extend(marker_obj.position);
        markersArray.push(eval('marker' + i));
        marker_obj.title = name;
        var li_obj = '.js-map-num' + i;
        image = '';
        if(img !== ''){
          // image = '<img src="'+base_url+'img/'+img+'" class="img-responsive img-thumbnail" />';
          image = '<img src="'+base_url+'img/'+img+'" height="200" width="300" class="img-responsive img-thumbnail" />';
        }
        var content = '<div class="">'+image+'<h4>' + name + '</h4><h4><span class="label label-danger"> $'+ price +'</span></h4></div>';
        eval('var infowindow' + i + ' = new google.maps.InfoWindow({ content: content,  maxWidth: 370});');
        var infowindow_obj = eval('infowindow' + i);
        var marker_obj = eval('marker' + i);
        google.maps.event.addListener(marker_obj, 'click', function () {
            infowindow_obj.open(map, marker_obj);
        });
    }
}// add marker
*/

