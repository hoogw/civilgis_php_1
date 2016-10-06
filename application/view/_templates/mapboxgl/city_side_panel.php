

    
    

    
    
    <header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						
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
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>GL</span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/multilayerrenderedfeaturescrollertablemap/city/overview" >
						
						<span class="hidden-xs">Address Parcels Streets multi-layer with attribute table</span>
					</a>
					
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightlayermap/city/address" >
						
						<span class="hidden-xs"> Address</span>
					</a>
					
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/city/parcels" >
						
						<span class="hidden-xs"> Parcels</span>
					</a>
					
				</li>
                                
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/city/streets" >
						
						<span class="hidden-xs"> Streets</span>
					</a>
					
				</li>
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon2overlay/city/zoning/address/parcels" >
						
						<span class="hidden-xs">Zoning & 2 overlay(parcels, address)</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/city/zoning/parcels" >
						
						<span class="hidden-xs">Zoning & 1 overlay(parcels)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/city/zoning/address" >
						
						<span class="hidden-xs">Zoning & 1 overlay(address)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonswitch/city/zoning" >
						
						<span class="hidden-xs">Simple Zoning with switch</span>
					</a>
				</li>
                                
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonsimple/city/zoning" >
						
						<span class="hidden-xs">Simple Zoning</span>
					</a>
				</li>
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/neighbor" >
						
						<span class="hidden-xs">Neighbor</span>
					</a>
				</li>
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/city/parks" >
						
						<span class="hidden-xs">Parks</span>
					</a>
				</li>
                                
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/city/schools" >
						
						<span class="hidden-xs">Schools</span>
					</a>
				</li>
                                
                                
                                
                                
                                	<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						
						 <span class="hidden-xs">Police & Fire</span>
                                        </a>
					<ul class="active dropdown-menu">
						                

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/law_agency">Law agency</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/law_reportarea">Law report area</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/law_geoproximity">Law geoproximity</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/law_district">Law district</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/law_beat">Law beat</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/fire_station_boundary">Fire station boundary</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/fire_geoproximity">Fire geoproximity</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/fire_district">Fire district</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapboxgl/singlelayersimplehighlightgeojsonmap/city/fire_agency">Fire agency</a>
                                                                    </li>
                                                                    
                                                
                                                
						
					</ul>
				</li>
                                
                                
                                
                                
                                
				
                                
                                
                                 
			
			</ul>
		</div>
            
            
		