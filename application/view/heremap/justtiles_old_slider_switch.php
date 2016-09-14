

<link href="<?php echo Config::get('URL'); ?>public/js/ui/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" />
<script src="<?php echo Config::get('URL'); ?>public/js/ui/bootstrap-switch/bootstrap-switch.js"></script>
<script src="<?php echo Config::get('URL'); ?>public/js/ui/noUiSlider.8.5.1/nouislider.min.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/js/ui/noUiSlider.8.5.1/nouislider.min.css" rel="stylesheet" />






<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init/heremap.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/heremap/justtiles_old_slider_switch.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIFVL6oxxXNT7NToJjfU4J9TV2J8m4vE&callback=initialize" async defer></script>



   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/heremap/">Transparent Gov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>home/heremap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>heremap/justtiles/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            
                                            <div id="title_info" > </div>
                                            
                                            
                                                            <div class="well">
                                                            <div class="row">

                                                               <div class="col-lg-1">
                                                                   <input type="checkbox" name="color_tiles_switch" checked>
                                                               </div>

                                                               <div class="col-lg-2" name="tile_slider" id="tile_slider">

                                                               </div>

                                                            </div>

                                                            </div>
                                             
                                             
                                             
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