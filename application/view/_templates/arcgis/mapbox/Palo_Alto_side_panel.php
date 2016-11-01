

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/arcgis/mapbox/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;ESRI ArcGIS Server Rest API + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                            
                               
                                
                               
                                
                                
                                
                             <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapbox/Palo_Alto/Zoning">

                        Zoning [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapbox/Palo_Alto/Zoning">

                        Zoning [radio button]
                    </a>

                </li>
                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapbox/Palo_Alto/PAN_Areas">
                        PAN Areas

                    </a>

                </li>
                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/Palo_Alto/Addresses">

                        Addresses
                    </a>

                </li>
                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/Palo_Alto/Parcels">

                        Parcels
                    </a>

                </li>
                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/mapbox/Palo_Alto/Building">
                        Building

                    </a>

                </li>
                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapbox/Palo_Alto/Streets">

                        Streets
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/justtiles/mapbox/Palo_Alto/Right_of_way">

                        Right of way
                    </a>

                </li>

                                
                               

                               
                                
                                 
			
			</ul>
		</div>
            
            
		