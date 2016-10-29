

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/arcgis/heremap/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;ESRI ArcGIS Server Rest API + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/here-logo.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
					
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/address" >
						
						<span class="hidden-xs"> Address</span>
					</a>
					
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/city/streets" >
						
						<span class="hidden-xs"> Streets</span>
					</a>
					
				</li>
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/city/zoning" >
						
						<span class="hidden-xs">Zoning(check box)</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/city/zoning" >
						
						<span class="hidden-xs">Zoning(radio)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/city/general_land_use" >
						
						<span class="hidden-xs">General land use (check box)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/city/general_land_use" >
						
						<span class="hidden-xs">General land use (radio)</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/neighbor" >
						
						<span class="hidden-xs"> Neighbor</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/city/parks" >
						
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/city/schools" >
						
						<span class="hidden-xs"> Schools</span>
					</a>
					
				</li>

                                
				<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						
						 <span class="hidden-xs"> Police and Fire</span>
					</a>
					<ul class="active dropdown-menu">
						
                                                
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_agency">Law agency</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_report_area">Law report area</a>
                                                </li>




                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_geoproximity">Law geoproximity</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_district">Law district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/law_beat">Law beat</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_station_boundary">Fire station boundary</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_geoproximity">Fire geoproximity</a>
                                                </li>


                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_district">Fire district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/city/fire_agency">Fire agency</a>
                                                </li>
                                                
					</ul>
				</li>
                                
                                
                                 
			
			</ul>
		</div>
            
            
		