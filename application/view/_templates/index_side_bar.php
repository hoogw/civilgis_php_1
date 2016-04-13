
    
    
    
 
    
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
                                            <h5>Raster Tile</h5>
                                        
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
                                            <h5>Vector Tile</h5>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapboxgl/" class="dropdown-toggle">
						
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
            