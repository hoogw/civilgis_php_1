
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet/leaflet.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet/leaflet.css" rel="stylesheet" />

<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_providers/leaflet-providers.js" type="text/javascript"></script>

<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.control.geosearch.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.geosearch.provider.openstreetmap.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.geosearch.provider.google.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.geosearch.provider.esri.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.geosearch.provider.bing.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/js/l.geosearch.provider.nokia.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_GeoSearch/css/l.geosearch.css" rel="stylesheet" />




<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init/leaflet.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/leaflet/simplemap.js"></script>


   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/leaflet/">TransparentGov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>home/leaflet/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>leaflet/simplemap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                   
                                    
                                        <div class="box">
                                            
                                                 
                                                 
                                                <div class="box-header">
                                                        <div class="box-name">
                                                                <i class="fa fa-map-marker"></i>
                                                                
                                                                <span><?php echo $data['subject'] ?></span>  
                                                                <img id="ajaxload" src="<?php echo Config::get('URL'); ?>/public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" />
                                                                
                                                                <div id="title_info" > </div>
                                                                
                                                        </div>
                                                    
                                                        <div class="box-icons">
                                                                <a class="collapse-link">
                                                                        <i class="fa fa-chevron-up"></i>
                                                                </a>
                                                                <a class="expand-link">
                                                                        <i class="fa fa-expand"></i>
                                                                </a>
                                                                <a class="close-link">
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                        </div>
                                                    
                                                        <div class="no-move"></div>
                                                </div>
                                            
                                                
                                                <div id="map-canvas" class="box-content" style="height: 800px;">
                                                    
                                                    
                                                </div>
                                           
                                            <div id="legend" class="alert alert-warning"></div>
                                            
                                            
                                            
                                            <div id="info-table">
          
                                            </div>
                                            
                                        </div>
                                </div>
                        </div>
                        
                        
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>