
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index">TransparentGov</a></li>
                                                <li> <a href="<?php echo Config::get('URL'); ?>map/arcgis">Arcgis Server Rest Api</a></li> 
                                                &nbsp;&nbsp; <img style= "height:20px;" src="<?php echo Config::get('URL'); ?>public/images/logo/Esri_logo.svg.png" alt=""/>
                                                
                                               
                                        </ol>
                                </div>
                        </div>
                        
                     
              
                    
                    
                  
                    
                    
                       <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Google Maps frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/googlemap/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/googlemap/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/googlemap/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/googlemap/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/googlemap/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/googlemap/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/googlemap/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/googlemap/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/googlemap/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/googlemap/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Bing Maps frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/bingmap/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/bingmap/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/bingmap/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/bingmap/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/bingmap/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/bingmap/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/bingmap/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                     
                    
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Here Maps frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                    
                    
                    
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Leaflet frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/leaflet/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/leaflet/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/leaflet/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/leaflet/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/leaflet/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/leaflet/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/leaflet/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/leaflet/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/leaflet/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/leaflet/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                       
                    
                    
                    
                    
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Mapbox frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapbox/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapbox/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapbox/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapbox/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapbox/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapbox/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapbox/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>MapQuest frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapquest/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapquest/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapquest/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapquest/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapquest/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapquest/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                    
                      <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Openlayers frontend + ArcGIS server rest API backend</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/parcels'">Parcels</button>
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/address'">Address</button>
                                                         
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/openlayers/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/openlayers/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/neighbor'">Neighbor</button>
                            
                                                        
                                                      
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/openlayers/city/parks'">Parks</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/openlayers/city/schools'">Schools</button>
                                                      
                                                              
                                                              <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_report_area'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_beat'">Law beat</button>
                                                       
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_agency'">Fire agency</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>