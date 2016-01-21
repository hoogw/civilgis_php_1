
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/infobox.js"></script>


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/localmapjs/localclassifybutton1map.js"></script>
<script src="<?php echo Config::get('URL'); ?>/public/js/classification/checkboxbutton1.js" type="text/javascript"></script>
<link href="<?php echo Config::get('URL'); ?>/public/js/classification/classification_botton_style.css" rel="stylesheet" type="text/css"/>


   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
  
    
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                             
                                                  <li><a href="<?php echo Config::get('URL'); ?>localmap/localmaplistpaged/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                               
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>localmap/localsimplemap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                                                <img id="ajaxload" src="/civilgis/public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" />
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
                                                                    <div class="well">
                                                                    <!--	<div class="btn-group" data-toggle="buttons">        btn-group cause not space between button -->
                                                                                <div data-toggle="buttons">
                                                                                    
                                                                                    
                                                                                                    <label id="R1" class="btn btn-yellow1">
                                                                                                            <input type="checkbox"> R1 - Single Family Residential
                                                                                                    </label>



                                                                                                    <label id="R2-MD" class="btn btn-yellow2">
                                                                                                            <input type="checkbox"> R2-MD Multiple Family Residential (Medium Density)
                                                                                                    </label>



                                                                                                    <label id="R2-HD" class="btn btn-grey2">
                                                                                                            <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                    </label>


                                                                                                    <label id="R3" class="btn btn-info">
                                                                                                                <input type="checkbox"> R3 - Multiple_Family_Residential
                                                                                                        </label>



                                                                                                    <label class="btn btn-red1">
                                                                                                                <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                        </label>

                                                                                                    <label class="btn btn-D7DF01">
                                                                                                                <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                        </label>


                                                                                                    <label class="btn btn-FFFF00">
                                                                                                                <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                        </label>

                                                                                                    <label class="btn btn-primary">
                                                                                                                <input type="checkbox"> Option 8
                                                                                                        </label>


                                                                                                    <label class="btn btn-primary">
                                                                                                                <input type="checkbox"> Option 15
                                                                                                        </label>

                                                                                                    <label class="btn btn-primary">
                                                                                                                <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                        </label>


                                                                                                    <label class="btn btn-primary">
                                                                                                                <input type="checkbox"> Option 17
                                                                                                    </label>

                                                                                                     <label class="btn btn-primary">
                                                                                                            <input type="checkbox"> R2-HD Multiple Family Residential (High Density)
                                                                                                    </label>                            
                                                                                    
                            
                            
                            
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