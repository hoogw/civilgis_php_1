

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/arcgis/openlayers/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;ESRI ArcGIS Server Rest API + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/openlayers.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                 <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/parcels"> Parcels</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/address"> Address</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/city/streets"> Streets</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/city/zoning"> Zoning [check box button]</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/openlayers/city/zoning"> Zoning [radio button]</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/city/general_landuse"> General Land Use</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/neighbor"> Neighbor</a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/openlayers/city/parks"> Parks</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/openlayers/city/schools"> Schools</a>
                </li>

                






                <li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						
						 <span class="hidden-xs"> Police and Fire</span>
					</a>
					<ul class="active dropdown-menu">
                
                
                
                
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_agency">Law agency</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_report_area">Law report area</a>
                        </li>




                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_geoproximity">Law geoproximity</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_district">Law district</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/law_beat">Law beat</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_station_boundary">Fire station boundary</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_geoproximity">Fire geoproximity</a>
                        </li>


                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_district">Fire district</a>
                        </li>
                        <li>
                            <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/openlayers/city/fire_agency">Fire agency</a>
                        </li>
                    </ul>

                </li>
                                
                                
                                 
			
			</ul>
		</div>
            
            
		