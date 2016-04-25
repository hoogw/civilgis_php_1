

    
    

    
    
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
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                            
                            <li>
					<a href="<?php echo Config::get('URL'); ?>home/leaflet/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/leaflet-logo.png" alt=""/> </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerfulltablemap/Newport_Beach/Address" >
						
						<span class="hidden-xs">Address</span>
					</a>
					
				</li>
                                
                                
                               
                                
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerfulltablemap/Newport_Beach/Parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerfulltablemap/Newport_Beach/Streets" >
						
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/justtiles/Newport_Beach/Right_Of_Way" >
						
						<span class="hidden-xs">Right of Way</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/scrollerclienttablemap/Newport_Beach/Parks" >
						
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/classifycheckboxbuttonmap/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Zoning [check box button]</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/classifyradiobuttonmap/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Zoning [radio button]</span>
					</a>
					
				</li>

                               <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/classifycheckboxbuttonmap/Newport_Beach/General_Land_Use" >
						
						<span class="hidden-xs">General Land Use [check box button]</span>
					</a>
					
				</li>
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>leaflet/classifyradiobuttonmap/Newport_Beach/General_Land_Use" >
						
						<span class="hidden-xs">General Land Use [radio button]</span>
					</a>
					
				</li>
                                 
			
			</ul>
		</div>
            
            
		