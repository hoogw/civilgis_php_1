

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mapbox/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;&nbsp;<img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/></span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/city/parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
					
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/city/address" >
						
						<span class="hidden-xs"> Address</span>
					</a>
					
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerfulltablemap/city/streets" >
						
						<span class="hidden-xs"> Streets</span>
					</a>
					
				</li>
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifycheckboxbuttonmap/city/zoning" >
						
						<span class="hidden-xs">Zoning(check box)</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifyradiobuttonmap/city/zoning" >
						
						<span class="hidden-xs">Zoning(radio)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifycheckboxbuttonmap/city/general_land_use" >
						
						<span class="hidden-xs">General land use (check box)</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/classifyradiobuttonmap/city/general_land_use" >
						
						<span class="hidden-xs">General land use (radio)</span>
					</a>
				</li>
                                
                                
                                
                                	<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						
						 <span class="hidden-xs">Zones</span>
                                        </a>
					<ul class="active dropdown-menu">
						                

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/c1">Local business (C1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/c1s">Shopping center (C1S)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/c2">General business (C2)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/cl">Commercial limited (CL)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/tc">Town center (TC)</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/mg">General industrial (MG)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/mp">Industrial park (MP)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/ir">Industrial and recreational and school (IRS)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/pdc">Planned development commercial (PDC)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/pdi">Planned development industrial (PDI)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/pdr_ld">Planned development residential low density (PDR-LD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/pdr_md">Planned development residential medium density (PDR-MD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/pdr_hd">Planned development residential high density (PDR-HD)</a>
                                                                    </li>



                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/ap">Administrative and professional</a>
                                                                    </li>
                                                                    
                                                                    <li><a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/r1">Single family residential (R1)</a></li>
								<li><a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/r2_md">Multiple family residential medium density (R2-MD)</a></li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/r2_hd">Multiple family residential high density (R2-HD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/r3">Multiple family residential (R3)</a>
                                                                    </li>

                                                
                                                
						
					</ul>
				</li>
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/neighbor" >
						
						<span class="hidden-xs"> Neighbor</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerclienttablemap/city/parks" >
						
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>mapbox/scrollerclienttablemap/city/schools" >
						
						<span class="hidden-xs"> Schools</span>
					</a>
					
				</li>

                                
				<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						
						 <span class="hidden-xs"> Police and Fire</span>
					</a>
					<ul class="active dropdown-menu">
						
                                                
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/law_agency">Law agency</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/law_reportarea">Law report area</a>
                                                </li>




                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/law_geoproximity">Law geoproximity</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/law_district">Law district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/law_beat">Law beat</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/fire_station_boundary">Fire station boundary</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/fire_geoproximity">Fire geoproximity</a>
                                                </li>


                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/fire_district">Fire district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>mapbox/simplemap/city/fire_agency">Fire agency</a>
                                                </li>
                                                
					</ul>
				</li>
                                
                                
                                 
			
			</ul>
		</div>
            
            
		