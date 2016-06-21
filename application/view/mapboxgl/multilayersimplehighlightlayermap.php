<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.css' rel='stylesheet' />


<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.css' type='text/css' />







<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init/mapboxgl.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mapboxgl/multilayersimplehighlightlayermap.js"></script>


   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mapboxgl/">TransparentGov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>home/mapboxgl/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>mapboxgl/multilayersimplehighlightlayermap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                   
                                    
                                        
                                            
                                                 
                                                 
                                                <div class="box-header">
                                                        
                                                            
                                                            
                                                                 <div id="checkbox_menu">
                       
                                                                                </div>
                                                                
                                                                
                                                                <div id="title_info" ></div>
                                                                
                                                       
                                                       
                                                </div>
                                            
                                                
                                               <div id="map-canvas" style="position:relative; top:0; bottom:0; width:100%; height: 800px;"></div> 
                                                <div id='geocoder-container' style="position: relative;top: 0;width: 100%;margin-top: 10px;"></div>

                                                <div id="info-table"> </div>
                                                
                                                
                             
                        </div>
                        
                        
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>