
<link rel="stylesheet" href="http://openlayers.org/en/v3.15.1/css/ol.css" type="text/css">
<script src="http://openlayers.org/en/v3.15.1/build/ol.js"></script>




<!--           ol3-layerswitcher                             -->
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_layerswitcher/ol3-layerswitcher.css" rel="stylesheet" />
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_layerswitcher/ol3-layerswitcher.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_layerswitcher/scroll.css" rel="stylesheet" />

<!--           ol3-geocoder                             -->
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_geocoder/ol3-geocoder.min.css" rel="stylesheet" />
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_geocoder/ol3-geocoder.js"></script>



<!--           ol3-popup                             -->
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_popup/ol3-popup.css" rel="stylesheet" />
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_popup/ol3-popup.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/map_api/openlayers/ol3_popup/scroll.css" rel="stylesheet" />


<!--          bootstrap_slider                                  -->

<link href="<?php echo Config::get('URL'); ?>public/js/map_api/bootstrap_slider/bootstrap-slider.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/bootstrap_slider/bootstrap-slider.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/area_boundary/initial_location/initial_location.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/map_init/openlayers.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/openlayers/simplemap.js"></script>





   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                               <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/arcgis/">Arcgis Rest API Home</a></li> 
                                                
                                               <li><a href="<?php echo Config::get('URL'); ?>home/arcgis/openlayers/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="10" data-slider-value="100" />
                                           
                                            <div id="legend" class="alert alert-warning"></div>
                                            
                                            
                                            
                                            <div id="info-table"> </div>

                    

                                             <div id="utfgrid_info">  </div>
                                            
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