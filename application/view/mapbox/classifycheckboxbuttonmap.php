
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init/mapbox.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mapbox/classifycheckboxbuttonmap.js"></script>

<link href="<?php echo Config::get('URL'); ?>/public/js/classification/classification_button_style.css" rel="stylesheet" type="text/css"/>

<script src="<?php echo Config::get('URL'); ?>public/js/bootstrap-switch.js" type="text/javascript"></script>
<link href="<?php echo Config::get('URL'); ?>public/css/bootstrap-switch.css" rel="stylesheet" type="text/css"/>


   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mapbox/">Transparent Gov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>home/mapbox/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>mapbox/classifycheckboxbuttonmap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            
                                            
                                             
                                                       <!-- checkbox button -->
                                                       
                                                       
                                                                    <div id="classification_section" class="well">
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                    <!--	<div class="btn-group" data-toggle="buttons">        btn-group cause not space between button -->
                                                                                <div id="classification_buttons" data-toggle="buttons">
                                                                                    
                                                                                                    
                                                                                    <input type="checkbox" name="color_tiles_switch" checked>
                                                                                    
                                                                                      <!-- test 
                                                                                                    <label id="label_highlight" class="btn btn-block btn-black">
                                                                                                            <input id="checkbox_highlight" type="checkbox">  
                                                                                                    </label>
                                                                                    
                                                                                    
                                                                                  
                                                                                                    <label id="label_R1" class="btn btn-blue">
                                                                                                            <input id="checkbox_R1" type="checkbox"> R1 - single family
                                                                                                    </label>



                                                                                                    <label id="label_2" class="btn btn-green">
                                                                                                            <input id="checkbox_2" type="checkbox"> PPPPPPPPPPPPPPPP
                                                                                                    </label>



                                                                                                    <label id="label_3" class="btn btn-red">
                                                                                                            <input id="checkbox_3" type="checkbox"> OOOOOOOOOOOOOOOOO
                                                                                                    </label>


                                                                                                    <label id="label_4" class="btn btn-gold">
                                                                                                                <input id="checkbox_4" type="checkbox"> TTTTTTTTTTTTTTT
                                                                                                        </label>

                                                                                        - end test -->
                            
                                                                                            </div>
                                                                                    </div>
                                            
                                                <!--  End of checkbox button -->
                                            
                                                                  
                                                                  
                                                                  
                                            
                                            <div id="title_info" > </div>
                                            
                                            <div id="info-table"></div>
          
                                            
                                            
                                            
                                            
                                            
                                            
                                            
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