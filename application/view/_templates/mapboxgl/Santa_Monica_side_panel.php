

    
    

    
    
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
						
						<span class="hidden-xs">  <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>GL</span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/multilayerrenderedfeaturescrollertablemap/Santa_Monica/overview" >
						
						<span class="hidden-xs">Parcels Streets Zoning multi-layer with attribute table</span>
					</a>
					
				</li>
                                
                                
                               
                                
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightlayermap/Santa_Monica/Buildings" >
						
						<span class="hidden-xs">Buildings</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Santa_Monica/Blocks" >
						
						<span class="hidden-xs">Blocks</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Santa_Monica/Parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Streets" >
						
						<span class="hidden-xs">Streets</span>
					</a>
					
				</li>
                                
                               
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Speed_Limit" >
						
						<span class="hidden-xs">Speed_Limit</span>
					</a>
					
				</li>
                                
                                
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Streets_Sweeping" >
						
						<span class="hidden-xs">Streets_Sweeping</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/Santa_Monica/Zoning/Parcels" >
						
						<span class="hidden-xs">Zoning & 1 overlay(parcels)</span>
					</a>
					
				</li>

                               
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonswitch/Santa_Monica/Zoning" >
						
						<span class="hidden-xs">Simple Zoning with switch</span>
					</a>
					
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonsimple/Santa_Monica/Zoning" >
						
						<span class="hidden-xs">Simple Zoning</span>
					</a>
					
				</li>
                                
                                
                                
                               
                                
                                
                                
                                
                                
                                 
			
			</ul>
		</div>
            
            
		