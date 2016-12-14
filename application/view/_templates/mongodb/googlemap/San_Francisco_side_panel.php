

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mongodb/googlemap/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;<img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" />&nbsp; + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/google-maps-icon.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                               <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/googlemap/San_Francisco/Downtown_Zoning">

                        Downtown Zoning [check box button]
                    </a>

                </li>










                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/googlemap/San_Francisco/Downtown_Zoning">

                        Downtown Zoning [radio button]
                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/googlemap/San_Francisco/Downtown_Land_Use">

                        Downtown Land Use [check box button]
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/googlemap/San_Francisco/Downtown_Land_Use">

                        Downtown Land Use [radio button]
                    </a>
                </li>






                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/googlemap/San_Francisco/Downtown_Address">

                        Downtown Address
                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/googlemap/San_Francisco/Downtown_Zoning">

                        Downtown Parcels
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/googlemap/San_Francisco/Zoning_Districts">

                        Zoning Districts [check box button]
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/googlemap/San_Francisco/Zoning_Districts">

                        Zoning Districts [radio button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Height_And_Bulk_Districts">

                        Height And Bulk Districts
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Blocks">
                        Blocks

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Special_Sign_Districts">
                        Special Sign Districts

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Special_Sign_Districts_Scenic_Streets">
                        Special Sign Districts Scenic Streets

                    </a>

                </li>




                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Special_Use_Districts">
                        Special Use Districts

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/googlemap/San_Francisco/Major_Streets">
                        Major Streets

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/googlemap/San_Francisco/Streets">
                        Streets

                    </a>

                </li>





                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Street_Structures">

                        Street Structures
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/justtiles/googlemap/San_Francisco/Curb_Island">
                        Curb and Island

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/justtiles/googlemap/San_Francisco/Building">
                        Building Footprint

                    </a>

                </li>





                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Zipcode">

                        Zipcode
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/Realtor_Neighborhoods">

                        Realtor Neighborhoods
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/googlemap/San_Francisco/Schools_Public">
                        Schools Public

                    </a>

                </li>





                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/googlemap/San_Francisco/Schools_Public_Address">

                        Schools Public Address
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/googlemap/San_Francisco/City_Land">
                        City Land

                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simpleclustermap/googlemap/San_Francisco/City_Facility">
                        City Facility

                    </a>

                </li>
                                 
			
			</ul>
		</div>
            
            
		