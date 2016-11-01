

    
    

    
    
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
                    <a href="/arcgis/classifycheckboxbuttonmap/heremap/New_York/Zone_Districts">

                        New York Zone Districts - check box
                    </a>

                </li>

                <li>
                    <a href="/arcgis/classifyradiobuttonmap/heremap/New_York/Zone_Districts">

                        New York Zone Districts - radio
                    </a>

                </li>


                <li>
                    <a href="/arcgis/classifycheckboxbuttonmap/heremap/New_York/Commercial_Zone">

                        New York Commercial Zone - check box
                    </a>

                </li>


                <li>
                    <a href="/arcgis/classifyradiobuttonmap/heremap/New_York/Commercial_Zone">

                        New York Commercial Zone - radio
                    </a>

                </li>



                <li>
                    <a href="/arcgis/classifycheckboxbuttonmap/heremap/New_York_Manhattan/Zoning">

                        Manhattan Zoning - check box
                    </a>

                </li>

                <li>
                    <a href="/arcgis/classifyradiobuttonmap/heremap/New_York_Manhattan/Zoning">

                        Manhattan Zoning - radio
                    </a>

                </li>


                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York_Manhattan/Zoning">

                        Parcels - Manhattan
                    </a>

                </li>



                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York/Project_Zone">

                        New York Project Zone
                    </a>

                </li>

                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York/Limited_Height_District">

                        New York Limited Height District
                    </a>

                </li>


                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York/Special_Districts">

                        New York Special Districts
                    </a>

                </li>


                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York/Special_Subdistricts">

                        New York Special Subdistricts
                    </a>

                </li>


                <li>
                    <a href="/arcgis/simplemap/heremap/New_York/Boroughs">

                        New York Boroughs
                    </a>

                </li>

                <li>
                    <a href="/arcgis/scrollerclienttablemap/heremap/New_York/Neighborhoods">

                        New York Neighborhoods
                    </a>

                </li>


                <li>
                    <a href="/arcgis/scrollerclienttablemap/heremap/New_York/Community_Districts">

                        New York Community Districts
                    </a>

                </li>


                <li>
                    <a href="/arcgis/simplemap/heremap/New_York/Building_Demolition">

                        New York Building Demolition
                    </a>

                </li>


                <li>
                    <a href="/arcgis/justtiles/heremap/New_York/Building">

                        New York Building
                    </a>

                </li>

                <li>
                    <a href="/arcgis/scrollerfulltablemap/heremap/New_York/Parks">

                        New York Parks
                    </a>

                </li>


                <li>
                    <a href="/arcgis/simplemap/heremap/New_York/Parking_Lots">

                        New York Parking Lots
                    </a>

                </li>
                                
                                
                                
                                
                                
                                
                                
                                
                                
			
			</ul>
		</div>
            
            
		