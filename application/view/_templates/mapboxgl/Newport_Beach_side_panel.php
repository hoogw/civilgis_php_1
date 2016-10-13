

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mapboxgl/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>GL </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/multilayerrenderedfeaturescrollertablemap/Newport_Beach/overview" >
						
						<span class="hidden-xs">Address Parcels Streets multi-layer with attribute table</span>
					</a>
					
				</li>
                                
                                
                               
                                
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightlayermap/Newport_Beach/Address" >
						
						<span class="hidden-xs">Address</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Newport_Beach/Parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Newport_Beach/Streets" >
						
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Newport_Beach/Parks" >
						
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon2overlay/Newport_Beach/Zoning/Address/Parcels" >
						
						<span class="hidden-xs">Zoning & 2 overlay(parcels, address)</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/Newport_Beach/Zoning/Parcels" >
						
						<span class="hidden-xs">Zoning & 1 overlay(parcels)</span>
					</a>
					
				</li>

                               <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/Newport_Beach/Zoning/Address" >
						
						<span class="hidden-xs">Zoning & 1 overlay(address)</span>
					</a>
					
				</li>
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonswitch/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Simple Zoning with switch</span>
					</a>
					
				</li>
                                
                                
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonsimple/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Simple Zoning</span>
					</a>
					
				</li>
                                
                                
                                
                                
                                
                                 
			
			</ul>
		</div>
            
            
		