

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>map/city/general_landuse" >
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">General land use</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/city/zoning" >
						<i class="fa fa-table"></i>
						<span class="hidden-xs">Zoning</span>
					</a>
				</li>
                                
                                
                                
                                	<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Zones</span>
                                        </a>
					<ul class="active dropdown-menu">
						<li><a href="<?php echo Config::get('URL'); ?>map/city/r1">Single family residential (R1)</a></li>
								<li><a href="<?php echo Config::get('URL'); ?>map/city/r2_md">Multiple family residential medium density (R2-MD)</a></li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/r2_hd">Multiple family residential high density (R2-HD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/r3">Multiple family residential (R3)</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c1">Local business (C1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c1s">Shopping center (C1S)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c2">General business (C2)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/cl">Commercial limited (CL)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/tc">Town center (TC)</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/mg">General industrial (MG)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/mp">Industrial park (MP)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/ir">Industrial and recreational and school (IRS)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdc">Planned development commercial (PDC)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdi">Planned development industrial (PDI)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_ld">Planned development residential low density (PDR-LD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_md">Planned development residential medium density (PDR-MD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_hd">Planned development residential high density (PDR-HD)</a>
                                                                    </li>



                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/ap">Administrative and professional</a>
                                                                    </li>
                                                
                                                
						
					</ul>
				</li>
                                
                                
                                
                                
                                
				<li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/parcels" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Parcels</span>
					</a>
					
				</li>
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/address" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Address</span>
					</a>
					
				</li>
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/streets" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Streets</span>
					</a>
					
				</li>
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/parks" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>

                                   
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/schools" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Schools</span>
					</a>
					
				</li>

                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/neighbor" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Neighbor</span>
					</a>
					
				</li>
                                   

                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/city_limit" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> City Limit</span>
					</a>
					
				</li>

                                    

                                
                                
                                
                                
                                
                                
                                
                                
                                
				<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs"> Police Fire</span>
					</a>
					<ul class="active dropdown-menu">
						
                                                
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_agency">Law agency</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_reportarea">Law report area</a>
                                                </li>




                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_geoproximity">Law geoproximity</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_district">Law district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_beat">Law beat</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_station_boundary">Fire station boundary</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_geoproximity">Fire geoproximity</a>
                                                </li>


                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_district">Fire district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_agency">Fire agency</a>
                                                </li>
                                                
					</ul>
				</li>
                                
                                
                                 
			
			</ul>
		</div>
            
            
		