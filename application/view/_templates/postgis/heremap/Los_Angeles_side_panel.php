

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mongodb/heremap/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;<img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" />&nbsp; + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/here-logo.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                                
                               
                               
                                
                                 <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/heremap/Los_Angeles/Zoning"> Zoning - check box</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/heremap/Los_Angeles/Zoning"> Zoning - radio</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/heremap/Los_Angeles/General_Land_Use"> General Land Use  - check box</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/heremap/Los_Angeles/General_Land_Use"> General Land Use  - radio</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Communities"> Communities </a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Neighborhood_Councils"> Neighborhood_Councils </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Area_Planning_Commissions"> Area Planning Commissions </a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Communities_And_Planning_Areas"> Communities and Planning Areas</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Specific_Plans">Specific Plans </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Other_Districts">Other Districts </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Historic_Preservation_Overlay_Zone"> Historic Preservation Overlay Zone</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/heremap/Los_Angeles/Historic_Cultural_Monuments"> Historic Cultural Monuments</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/heremap/Los_Angeles/Federal_Renewal_Community"> Federal Renewal Community</a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/heremap/Los_Angeles/State_Enterprise_Zone">State Enterprise Zone </a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/heremap/Los_Angeles/Business_Improvement_District"> Business Improvement District</a>
                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/simplemap/heremap/Los_Angeles/Targeted_Neighborhood_Initiative">Targeted Neighborhood Initiative </a>
                </li>

                                
                                
                                
                                
                                
                                
                                
                                
			
			</ul>
		</div>
            
            
		