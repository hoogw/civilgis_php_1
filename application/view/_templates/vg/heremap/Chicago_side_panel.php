

    
    

    
    
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
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/Chicago/Zoning">

                       Zoning [check box button]
                    </a>

                </li>










                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/Chicago/Zoning">

                       Zoning [radio button]
                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Planning_Districts">

                        Planning Districts
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Planning_Regions">

                        Planning Regions
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Community">
                        Community

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Neighborhoods">
                        Neighborhoods

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Industrial_Corridors">

                        Industrial Corridors
                    </a>
                </li>




                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Enterprises_Communities">

                        Enterprises Communities
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Landmark_Districts">

                        Landmark Districts
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Conservation_Areas">

                        Conservation Areas
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Empowerment_Zones">
                        Empowerment Zones

                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Police_Beat">

                        Police Beat
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Police_District">

                        Police District
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/Chicago/Major_Streets">
                        Major Streets

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Railroads">

                        Railroads
                    </a>
                </li>




                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Streets_Sweeping">
                        Streets Sweeping

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/Chicago/Bike_Routes">

                        Bike Routes
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Census_Tracts">

                        Census Tracts
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Hospitals">
                        Hospitals

                    </a>
                </li>




                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Schools">
                        Schools

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/High_School_Attendance_Boundaries">
                        High School Attendance Boundaries

                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Chicago/Parks">

                        Parks
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Hydro">
                        Hydro

                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/heremap/Chicago/Forestry">
                        Forestry

                    </a>
                </li>
                                
                                
                            
                             
                                 
			
			</ul>
		</div>
            
            
		