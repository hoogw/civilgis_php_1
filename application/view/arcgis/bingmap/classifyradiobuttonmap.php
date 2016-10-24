
<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?branch=release&callback=initialize' async defer></script> 


<!--          bootstrap_slider         -->                           
<link href="<?php echo Config::get('URL'); ?>/public/js/map_api/bootstrap_slider/bootstrap-slider.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo Config::get('URL'); ?>/public/js/map_api/bootstrap_slider/bootstrap-slider.js" type="text/javascript"></script>



<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/map_init/bingmap.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/arcgis/bingmap/classifyradiobuttonmap.js"></script>

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
                                                <li><a href="<?php echo Config::get('URL'); ?>map/bingmap/">TransparentGov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>home/bingmap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>bingmap/classifyradiobuttonmap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                           
                                            <div id='searchBoxContainer'>
                        Search:<input type='text' id='searchBox' /> &nbsp; &nbsp; &nbsp;
                        Opacity:<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="10" data-slider-value="100" style="float:right;" />
                    </div>    
                                            
                                            
                                            
                                            
                                                       <!-- checkbox button -->
                                                       
                                                       
                                                                    <div id="classification_section" class="well">
                                                                        
                                                                        
                                                                        
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