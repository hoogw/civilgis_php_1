

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mapbox/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs">  <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/></span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/justtiles/Santa_Monica/Buildings" >
						
						<span class="hidden-xs">Buildings</span>
					</a>
					
				</li>
                                
                                
                               
                                
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/Santa_Monica/Parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/Santa_Monica/Streets" >
						
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/Santa_Monica/Speed_Limit" >
						
						<span class="hidden-xs">Speed Limit</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/Santa_Monica/Streets_Sweeping" >
						
						<span class="hidden-xs">Street Sweeping</span>
					</a>
					
				</li>
                                
                               
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/Santa_Monica/Bike_Route" >
						
						<span class="hidden-xs">Bike Route</span>
					</a>
					
				</li>
                                
                                
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifycheckboxbuttonmap/Santa_Monica/Zoning" >
						
						<span class="hidden-xs">Zoning [check box button]</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifyradiobuttonmap/Santa_Monica/Zoning" >
						
						<span class="hidden-xs">Zoning [radio button]</span>
					</a>
					
				</li>

                               
                                
                                 
			
			</ul>
		</div>
            
            
		