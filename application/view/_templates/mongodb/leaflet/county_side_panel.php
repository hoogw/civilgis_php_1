

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/mongodb/leaflet/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;<img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" />&nbsp; + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/leaflet-logo.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                                 <li>
                    <a href="/mongodb/scrollerclienttablemap/leaflet/county/cities"> Cities</a>
                </li>


                <li>
                    <a href="/mongodb/simplemap/leaflet/county/rails"> Rails</a>
                </li>


                <li>
                    <a href="/mongodb/scrollerclienttablemap/leaflet/county/parks"> Parks</a>
                </li>

                <li>
                    <a href="/mongodb/simplemap/leaflet/county/water"> Water</a>
                </li>


                <li>
                    <a href="/mongodb/clusterscrollerclienttablemap/leaflet/county/education_facility"> Education Facility</a>
                </li>


                <li>
                    <a href="/mongodb/simplemap/leaflet/county/hospitals"> Hospitals</a>
                </li>


                <li>
                    <a href="/mongodb/clusterscrollerclienttablemap/leaflet/county/fire_stations"> Fire station</a>
                </li>


                                   
                                

                               
                                
                                 
			
			</ul>
		</div>
            
            
		