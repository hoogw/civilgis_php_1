

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mongodb/bingmap/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;<img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" />&nbsp; + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                               
                                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/bingmap/Shoreline/Zoning">
                        Zoning [check box button]
                        
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/bingmap/Shoreline/Zoning">
                        Zoning [radio button]

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/bingmap/Shoreline/Land_Use_Comp_Plan">
                        Land Use Comp Plan [check box button]

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/bingmap/Shoreline/Land_Use_Comp_Plan">
                        Land Use Comp Plan [radio button]

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Shoreline/Address_Central">
                        Address Central

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Shoreline/Tax_Parcel_Central">
                        Tax Parcel Central

                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/justtiles/bingmap/Shoreline/Buildings">
                        Buildings

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Park">

                        Park
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Neighborhood">
                        Neighborhood

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/bingmap/Shoreline/Monument">
                        Monument

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Land_Mark">

                        Land Mark
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Encumbrance">
                        Encumbrance

                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Art">
                        Art

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Shoreline/Street">
                        Street

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/bingmap/Shoreline/Street_Light">
                        Street Light

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Sidewalk">
                        Sidewalk

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Shoreline/Pavement_Condition">
                        Pavement Condition

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Shoreline/Pavement">
                        Pavement

                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Intersections">
                        Intersections

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Guard_Rail">
                        Guard Rail

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Fence">
                        Fence

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/bingmap/Shoreline/Curb_Ramp">
                        Curb Ramp

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Curb">
                        Curb

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Bridge">
                        Bridge

                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Bike_Facility">
                        Bike Facility

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Railroad">

                        Railroad
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/bingmap/Shoreline/Trail">

                        Trail
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/bingmap/Shoreline/Signal">
                        Signal

                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/justtiles/bingmap/Shoreline/Crosswalk_Driveways">
                        Crosswalk Driveways

                    </a>

                </li>


                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Cable">Traffic_Cable</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Cam">Traffic_Cam</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Circle">Traffic_Circle</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_EV_Device">Traffic_EV_Device</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Flashing_Beacon">Traffic_Flashing_Beacon</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Pave_Striping">Traffic_Pave_Striping</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Ped_Push_Button">Traffic_Ped_Push_Button</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Ped_Signal_Display">Traffic_Ped_Signal_Display</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Radar_Sign">Traffic_Radar_Sign</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_School_Flasher">Traffic_School_Flasher</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Signal_Cabinet">Traffic_Signal_Cabinet</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Signal_Head">Traffic_Signal_Head</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Signal_Loop">Traffic_Signal_Loop</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Signalized_Intersection">Traffic_Signalized_Intersection</a></li>

                <li> <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Shoreline/Traffic_Support_Structure">Traffic_Support_Structure</a></li>


                                
                                
                                 
			
			</ul>
		</div>
            
            
		