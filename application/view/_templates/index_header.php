<!doctype html>
<html>
<head>
    <title>TransparentGov</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    
    
           
    <!-- jQuery must load first, before datatables.js etc....-->
    
    <script src="<?php echo Config::get('URL'); ?>public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Config::get('URL'); ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
          <!-- Bootstrap Core CSS -->
    <link href="<?php echo Config::get('URL'); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Config::get('URL'); ?>public/bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    
    
    
    
        
        
        <!-- devoops theme -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo Config::get('URL'); ?>public/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo Config::get('URL'); ?>public/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?php echo Config::get('URL'); ?>public/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?php echo Config::get('URL'); ?>public/plugins/select2/select2.css" rel="stylesheet">
		<link href="<?php echo Config::get('URL'); ?>public/css/style_devoops.css" rel="stylesheet">
        
                <script src="<?php echo Config::get('URL'); ?>public/plugins/jquery/jquery-2.1.0.min.js"></script>
                <script src="<?php echo Config::get('URL'); ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->

                <script src="<?php echo Config::get('URL'); ?>public/plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
                <script src="<?php echo Config::get('URL'); ?>public/plugins/tinymce/tinymce.min.js"></script>
                <script src="<?php echo Config::get('URL'); ?>public/plugins/tinymce/jquery.tinymce.min.js"></script>
                <!-- All functions for this theme + document.ready processing -->
                <script src="<?php echo Config::get('URL'); ?>public/js/devoops.js"></script>
                
        <!-- devoops theme -->
        
        
        
    
       
        
        
        
</head>




<body>
    
    
    
 
    
 <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mapjs/map_index.js"></script>


   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
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
						
					</div>
                                    
                                    
				</div>
			</div>
		</div>
	</div>
</header>


<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row" >
        
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                            
                            
                            
                            
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<!-- <img src="<?php echo Config::get('URL'); ?>public/images/logo/globe-blue.png" alt=""/> -->
                                            <h3>Raster Tile</h3>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                
                              
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/googlemap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/google-maps-icon.png" alt=""/> Google Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/bingmap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>  Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/leaflet" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/leaflet-logo.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/openlayers" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/openlayers.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapbox/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/> &nbsp; Mapbox</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapquest/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapquest.png" alt=""/></span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/heremap" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/here-logo.png" alt=""/> Map</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<!-- <img src="<?php echo Config::get('URL'); ?>public/images/logo/globe-blue.png" alt=""/> -->
                                            <h1>&nbsp;</h1>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                 <hr>
                                
                               
                                 <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<!-- <img src="<?php echo Config::get('URL'); ?>public/images/logo/globe-blue.png" alt=""/> -->
                                            <h3>Vector Tile</h3>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapbox/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>  &nbsp; Mapbox GL</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                 <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<!-- <img src="<?php echo Config::get('URL'); ?>public/images/logo/globe-blue.png" alt=""/> -->
                                            <h1>&nbsp;</h1>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                
                                <!--
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#price" class="dropdown-toggle">
						<i class="fa fa-usd"></i>
						<span class="hidden-xs">Pricing</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#contact" class="dropdown-toggle">
						<i class="fa fa-phone-square"></i>
						<span class="hidden-xs">Contact</span>
					</a>
					
				</li>
                                
                                -->
                                
                                 <hr>
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/phone.png" alt=""/> 
						<span class="hidden-xs">310-710-6501</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/email.png" alt=""/> 
						<span class="hidden-xs">huguowen@gmail.com</span>
					</a>
					
				</li>
                                
                                
                                
                          
			</ul>
		</div>
            