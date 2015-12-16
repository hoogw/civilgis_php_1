<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/infobox.js"></script>


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init.js"></script>

<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mapcity.js"></script>



<!-- script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/googlemapjs.js"></script -->

<!-- webGL layer 
<!-- script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/gmapgl.js"></script>


<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/CanvasLayer.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/ShaderProgram.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/libtess.cat.js"></script>
<script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/WebGLLayer.js"></script>
-->






   
     <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
    
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						<div id="search">
							<input type="text"  id="addr_txt" placeholder="exp:700 W Civic Center Dr"/>
                                                           
                                                                
                                                                    <i class="fa fa-search" id="search_addr"></i>
                                                              
                                                            
						</div>
					</div>
                                    
                                    
				</div>
			</div>
		</div>
	</div>
</header>


<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/cities">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Cities</span>
					</a>
				</li>
                                
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/address">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Address</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/bounds">
						<i class="fa fa-table"></i>
						<span class="hidden-xs">County Bounds</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/education_facility">
						<i class="fa fa-pencil-square-o"></i>
						<span class="hidden-xs">Education Facility</span>
					</a>
				</li>
				
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/fire_grid">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Fire Grid</span>
					</a>
				</li>
                                
				
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/fire_stations">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Fire Stations</span>
					</a>
				</li>
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/hospitals">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Hospitals</span>
					</a>
				</li>
				
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/hwy_majorrd">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">High Way Major Roads</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/rails">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Rails</span>
					</a>
				</li>
				
                                 
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/streets">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/water">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Water</span>
					</a>
				</li>
                                 
				
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/county/">County</a></li>
                                                
                                                
                                                <li><a href="<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
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
                                            
                                                <div id="map-canvas" class="box-content" style="height: 600px;">
                                                    
                                                    
                                                </div>
                                           
                                            <div id="legend" class="alert alert-warning"></div>
                                            
                                            <div><img id="ajaxload" src="<?php echo Config::get('URL'); ?>public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" /></div>
                                            <div id="title_info" > </div>
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