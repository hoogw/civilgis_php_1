

    
    

    
    
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
							<input type="text"  id="addr_txt" placeholder="search address example:1966 Harbor Blvd"/>
                                                           
                                                                
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
					<a href="<?php echo Config::get('URL'); ?>home/leaflet/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs">  <?php echo $data['area'] ?>  -  Leaflet</span>
                                        </a>
					
				</li>
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerclienttablemap/county/cities" >
						
						<span class="hidden-xs">Cities</span>
					</a>
					
				</li>
                                
                                
                               
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/simplemap/county/rails" >
						
						<span class="hidden-xs">Rails</span>
					</a>
					
				</li>
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerclienttablemap/county/parks" >
						
						<span class="hidden-xs">Parks</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/simplemap/county/water" >
						
						<span class="hidden-xs">Water</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/clusterscrollerclienttablemap/county/education_facility" >
						
						<span class="hidden-xs">Education Facility</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/simplemap/county/hospitals" >
						
						<span class="hidden-xs"> Hospitals</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/clusterscrollerclienttablemap/county/fire_stations" >
						
						<span class="hidden-xs">Fire station</span>
					</a>
					
				</li>

                                   
                                

                               
                                
                                 
			
			</ul>
		</div>
            
            
		