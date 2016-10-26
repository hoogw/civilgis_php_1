


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/map_init/googlemap.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/googlemap/classifycheckboxbuttonmap.js"></script>

<link href="<?php echo Config::get('URL'); ?>/public/js/classification/classification_button_style.css" rel="stylesheet" type="text/css"/>




<script src="<?php echo Config::get('URL'); ?>public/js/map_api/google_map_opacity_slider/ExtDraggableObject.js"></script>


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
                                               <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/arcgis/">Arcgis Rest API Home</a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/googlemap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            
                                            <!-- google opacity slider -->
                                                  <div id="opacityDiv" style='margin: 5px; overflow-x: hidden; overflow-y: hidden;  background: url("<?php echo Config::get('URL'); ?>public/js/map_api/google_map_opacity_slider/opacity-slider3d14.png") no-repeat; width: 71px; height: 21px; cursor: pointer;'> 
                      

                                                                    <div id="opacityKnobDiv" style='padding:0;margin:0;overflow-x:hidden;overflow-y:hidden;background:url("<?php echo Config::get('URL'); ?>public/js/map_api/google_map_opacity_slider/opacity-slider3d14.png") no-repeat -71px 0;width:14px;height:21px;'>
                                                                    </div>


                                                    </div>

                                             <!--  End of google opacity slider -->
                                             
                                                      
                                                       
                                                                    <div id="classification_section" class="well">
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                         <!-- checkbox button -->
                                                       
                                                                        
                                                                    <!--	<div class="btn-group" data-toggle="buttons">        btn-group cause not space between button -->
                                                                                <div id="classification_buttons" data-toggle="buttons">
                                                                                    
                                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    
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