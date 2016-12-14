
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

<script src="<?php echo Config::get('URL'); ?>public/js/map_api/Leaflet_utfgrid/leaflet.utfgrid-src.js" type="text/javascript"></script>


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/area_boundary/initial_location/initial_location.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mongodb/map_init/leaflet.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mongodb/leaflet/classifyradiobuttonmap.js"></script>

<link href="<?php echo Config::get('URL'); ?>/public/js/classification/classification_button_style.css" rel="stylesheet" type="text/css"/>




<!--
<link href="<?php echo Config::get('URL'); ?>public/js/ui/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" />
<script src="<?php echo Config::get('URL'); ?>public/js/ui/bootstrap-switch/bootstrap-switch.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/ui/noUiSlider.8.5.1/nouislider.min.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/ui/noUiSlider.8.5.1/nouislider.min.css" rel="stylesheet" />

-->

<link href="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_slider/leaflet-slider.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_slider/leaflet-slider.js" type="text/javascript"></script>


   
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
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mongodb/">Arcgis Rest API Home</a></li> 
                                               
                                                <li><a href="<?php echo Config::get('URL'); ?>home/mongodb/leaflet/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/leaflet/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            
                                            
                                            
                                                       <!-- checkbox button -->
                                                       
                                                       
                                                                    <div id="classification_section" class="well">
                                                                        
                                                                        
                                                                        
                                                                        <!--
                                                                        <div class="row">

                                                                            <div class="col-lg-1">
                                                                                <input type="checkbox" name="color_tiles_switch" checked>
                                                                            </div>

                                                                            <div class="col-lg-2" name="tile_slider" id="tile_slider">

                                                                            </div>

                                                                        </div>
                                                                        
                                                                        <br>
                                                                        -->
                                                                        
                                                                        
                                                                    <!--	<div class="btn-group" data-toggle="buttons">        btn-group cause not space between button -->
                                                                                <div id="classification_buttons" data-toggle="buttons">
                                                                                    
                                                                                    
                                                                                    
                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                    <label id="label_high_light_off" class="btn btn-black">
                                                                                                            <input name="high_light_off" id="radio_high_light_off" type="radio">Highlight OFF
                                                                                                    </label>
                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;
<!--

                                                                                                    <label id="label_2" class="btn btn-green">
                                                                                                            <input name="classification_radios" id="radio_2" type="radio"> PPPPPPPPPPPPPPPP
                                                                                                    </label>



                                                                                                    <label id="label_3" class="btn btn-red">
                                                                                                            <input name="classification_radios" id="radio_3" type="radio"> OOOOOOOOOOOOOOOOO
                                                                                                    </label>


                                                                                                    <label id="label_4" class="btn btn-gold">
                                                                                                                <input name="classification_radios" id="radio_4" type="radio"> TTTTTTTTTTTTTTT
                                                                                                        </label>

                                                                                         end test -->
                            
                                                                                            </div>
                                                                                    </div>
                                            
                                                <!--  End of checkbox button -->
                                            
                                                                  
                                                                  
                                                                  
                                            
                                            
                                            
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