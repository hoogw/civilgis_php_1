
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />




<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css' rel='stylesheet' />



<link href="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_slider/leaflet-slider.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo Config::get('URL'); ?>public/js/map_api/leaflet_slider/leaflet-slider.js" type="text/javascript"></script>





<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/jquery.dataTables.js"></script>
<link href="<?php echo Config::get('URL'); ?>public/css/jquery.dataTables.css" rel="stylesheet">


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/dataTables.scroller.min.js"></script>
          <link href="<?php echo Config::get('URL'); ?>public/css/scroller.dataTables.min.css" rel="stylesheet">





<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/area_boundary/initial_location/initial_location.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mongodb/map_init/mapbox.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mongodb/mapbox/clusterscrollerclienttablemap.js"></script>


   
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
                                                
                                               <li><a href="<?php echo Config::get('URL'); ?>home/mongodb/mapbox/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>mongodb/clusterscrollerclienttablemap/mapbox/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                            
                                           
                                            
                                            
                                                 <div id="tableDiv">
                                                          
                                                            <!--
                                                                    <table id="tabledata" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Position Title</th>
                                                                                <th>Department</th>


                                                                            </tr>
                                                                        </thead>

                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Position Title</th>
                                                                                <th>Department</th>


                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                               -->
                                                        </div>
                                            
                                            
                                            
                                            
                                            <div id="info-table"></div>

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