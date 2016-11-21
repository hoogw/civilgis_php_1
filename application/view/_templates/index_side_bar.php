
    
    
     <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
    </script>
 
    
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
				
                            
                            
                            
                            
                              
                                
                                <li >
					<a href="<?php echo Config::get('URL'); ?>map/googlemap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/google-maps-icon.png" alt=""/> Google Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/bingmap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img style= "height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>  Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/leaflet" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/leaflet-logo.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/openlayers" class="dropdown-toggle">
						
						<span class="hidden-xs"><img style= "height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/openlayers.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                <li >
					<a href="<?php echo Config::get('URL'); ?>map/mapbox/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img style= "height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/mapquest/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapquest.png" alt=""/></span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/heremap" class="dropdown-toggle">
						
						<span class="hidden-xs"><img style= "height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/here-logo.png" alt=""/> map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                               
                                
                                 <hr>
                                
                               
                               
                                
                                
                                <li >
					<a href="<?php echo Config::get('URL'); ?>map/mapboxgl/" class="dropdown-toggle">
						
						<span class="hidden-xs">  <img style= "height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>  &nbsp; GL Powered by Vector Tile</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li>
                            <a href="<?php echo Config::get('URL'); ?>map/carto/"><img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/Carto.png" alt="" /> Dynamic Mapnik Tiles </a>


                        </li>
                                
                               
                                <hr>
                                
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/arcgis/" class="dropdown-toggle">
                                            
                                            <span class="hidden-xs">
					 <img style= "height:20px;" src="<?php echo Config::get('URL'); ?>public/images/logo/Esri_logo.svg.png" alt=""/> 
                                           &nbsp;&nbsp;&nbsp; ArcGIS Server Rest API
                                             </span>
                                        </a>
                                    
                                        
				</li>
                                
                                
                                
                             <li >
					<a href="<?php echo Config::get('URL'); ?>map/arcgisleaflet/" class="dropdown-toggle">
                                            
                                            <span class="hidden-xs">
					 <img style= "height:20px;" src="<?php echo Config::get('URL'); ?>public/images/logo/Esri_logo.svg.png" alt=""/> 
                                           &nbsp;&nbsp;&nbsp; ArcGIS Leaflet API
                                             </span>
                                        </a>
                                    
                                        
				</li>
                                
                                
                                
                                
                                 <li >
					<a href="<?php echo Config::get('URL'); ?>map/arcgisjavascriptapi/" class="dropdown-toggle">
                                            
                                            <span class="hidden-xs">
					 <img style= "height:20px;" src="<?php echo Config::get('URL'); ?>public/images/logo/Esri_logo.svg.png" alt=""/> 
                                           &nbsp;&nbsp;&nbsp; ArcGIS Javascript API
                                             </span>
                                        </a>
                                    
                                        
				</li>
                                
                                <hr/>
                                
                                
                                
                               

                        <!--
                         <li>
                            <a href="<?php echo Config::get('URL'); ?>map/mapboxvt/"><img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox_2.png" alt="" /> Vector Tiles </a>


                        </li>
                        -->
                        
                         <li>
                           <a href="<?php echo Config::get('URL'); ?>map/vg/">
                               Future GIS Powered by  <img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/5g.jpg" alt="" />
                           </a>


                        </li>
                        
                        
                        
                        
                         <li>
                           <a href="<?php echo Config::get('URL'); ?>map/iot/">
                               Future GIS Powered by  <img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/iot.jpg" alt="" />
                           </a>


                        </li>
                        
                        
                        

                        <li>
                            <a href="<?php echo Config::get('URL'); ?>map/postgis/"><img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/postgis.png" alt="" /> Spatial Web Server </a>


                        </li>


                        <li>
                            <a href="<?php echo Config::get('URL'); ?>map/mongodb/"><img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" /> Spatial Web Server </a>


                        </li>
                                
                                
                               
                        
                        
                                
                             <hr/>   
                                
                                
                                <li>
                            <a href="<?php echo Config::get('URL'); ?>data/tabular_data_home/">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                Tabular Data

                            </a>


                        </li>
                                
                               <hr/>  
                               
                               
                               <li>
                            <a href="<?php echo Config::get('URL'); ?>map/material_desgin/"><img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/material_design_logo.png" alt="" /> Google Material Design  </a>


                        </li>
                               
                                <hr/>  
                               
                               
                                
                                 <!--
                                
                                 <li >
					<a href="#" class="dropdown-toggle">
						
                                            <h1>&nbsp;</h1>
                                        
                                        </a>
                                    
                                        
				</li>
                                
                                
                               
                                
                                <li >
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#price" class="dropdown-toggle">
						<i class="fa fa-usd"></i>
						<span class="hidden-xs">Pricing</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li >
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#contact" class="dropdown-toggle">
						<i class="fa fa-phone-square"></i>
						<span class="hidden-xs">Contact</span>
					</a>
					
				</li>
                                
                               
                                
                                 <hr>
                                
                                 
                                 
                                 
                                 <li >
                                     
                                     
					<a target="_blank" href='https://play.google.com/store/apps/details?id=net.transparentgov.android.trgv_1&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                                            
                                            <i class="fa fa-android"></i> android  Google Map
                                            <img style= "height:40px;" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
                                        </a>
					
				</li>
                                 
                                
                                <li >
                                     
                                     
					<a target="_blank" href='https://play.google.com/store/apps/details?id=net.transparentgov.android.trgv_2'>
                                            
                                            <i class="fa fa-android"></i> android Mapbox Vector Tiles
                                            <img style= "height:40px;" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
                                        </a>
					
				</li>
                                
                                
                               
                                 <li >
                                     
                                     
					<a target="_blank" href='https://itunes.apple.com/ca/app/transparentgov-googlemap/id1153167141?mt=8&ign-mpt=uo%3D4'>
                                            <i class="fa fa-apple"></i> ios  Google Map
                                            &nbsp;&nbsp;<img style= "height:20px;" alt='Get it on Apple store' src='<?php echo Config::get('URL'); ?>public/images/logo/trgv_apple.svg'/>
                                        </a>
					
				</li>
                                
                                
                                <li >
                                     
                                     
					<a target="_blank" href='https://itunes.apple.com/us/app/transparentgov-mapbox/id1159510937'>
                                            <i class="fa fa-apple"></i> ios Mapbox Vector Tiles
                                            &nbsp;&nbsp;<img style= "height:20px;" alt='Get it on Apple store' src='<?php echo Config::get('URL'); ?>public/images/logo/trgv_apple.svg'/>
                                        </a>
					
				</li>
                                
                                
                                <li >
                                    
                                     
					<a target="_blank" href='https://itunes.apple.com/us/app/transparentgov-mapkit/id1153309156?ls=1&mt=8'>
                                            <i class="fa fa-apple"></i> ios Apple Map Mapkit
                                            &nbsp;&nbsp;<img style= "height:20px;" alt='Get it on Apple store' src='<?php echo Config::get('URL'); ?>public/images/logo/trgv_apple.svg'/>
                                        </a>
					
				</li>
                                 
                                 
                                 <hr>
                                <li >
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/phone.png" alt=""/> 
						<span class="hidden-xs">310-710-6501</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li >
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/email.png" alt=""/> 
						<span class="hidden-xs">huguowen@gmail.com</span>
					</a>
					
				</li>
                                
                                
                                 -->
                          
			</ul>
		</div>
            