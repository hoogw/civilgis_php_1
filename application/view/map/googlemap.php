
 <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mapjs/map_index.js"></script>


   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    
    
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
	<div class="row" >
        
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                            
                            
                            
                            
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-globe"></i>
						<span class="hidden-xs">Map Provider</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/googlemap" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp; Google Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/bingmap" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp; Bing Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/leaflet" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp; Leaflet </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/openlayers" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp; Openlayers </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/mapbox/" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp; MapBox </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/mapquest/" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;  MapQuest</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/map/heremap" class="dropdown-toggle">
						
						<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;  Here Map</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                               
                                
                                
                                
                                
                                
                                
                                
                                
                                <!--
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#price" class="dropdown-toggle">
						<i class="fa fa-usd"></i>
						<span class="hidden-xs">Pricing</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#contact" class="dropdown-toggle">
						<i class="fa fa-phone-square"></i>
						<span class="hidden-xs">Contact</span>
					</a>
					
				</li>
                                
                                -->
                                
                                 
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-phone-square"></i>
						<span class="hidden-xs">310-710-6501</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue#contact" class="dropdown-toggle">
						<i class="fa fa-envelope-square"></i>
						<span class="hidden-xs">huguowen@gmail.com</span>
					</a>
					
				</li>
                                
                                
                                
                          
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href=".">TransparentGov</a></li>
                                                <li><a href=".">Google Map</a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
                     
              
                    
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Local Maps</span>
                                                            </div>
                                                           
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/Newport_Beach/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/newport_beach.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/Santa_Monica/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/santa_monica.png" alt=""/>
                                                        </button>
                                                        
                                                          
                                                            &nbsp;&nbsp;
                                                          
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/Los_Angeles/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_of_los_angeles.png" alt=""/>
                                                        </button>
                                                        
                                                            
                                                            
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/New_York/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                          
                                                            &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/San_Francisco/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                            
                                                              &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/Chicago/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.png" alt=""/>
                                                        </button>
                                                        
                                                              
                                                                &nbsp;&nbsp;
                                                            
                                                            
                                                         <button type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/county/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/orange_county.png" alt=""/>
                                                        </button>
                                                              
                                                              
                                                                 &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/googlemap/city/'">Sample City</button>
                                                        
                                                       
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                        
       <div class="row">
                 
             <div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Featured Maps</span>
				</div>
				
			</div>
			<div class="box-content" id="accordion">
				<h5>Zoning Land Use</h5>
				<div>
                                    
                                    <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifycheckboxbuttonmap/Santa_Monica/Zoning'">Santa Monica Zoning [check box button]</button>
                                         
                                           &nbsp;&nbsp;
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifyradiobuttonmap/Santa_Monica/Zoning'">Santa Monica Zoning [radio button]</button>
                                         
                                    
                                     &nbsp;&nbsp;
                                    
					 <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifycheckboxbuttonmap/city/zoning'">Sample City Zoning - check box</button>
                                         
                                           &nbsp;&nbsp;
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifyradiobuttonmap/city/zoning'">Sample City Zoning - radio</button>
                                           &nbsp;&nbsp;
                                         
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifycheckboxbuttonmap/city/general_land_use'">Sample City General Land Use - check box</button>
                                                    &nbsp;&nbsp;          
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifyradiobuttonmap/city/general_land_use'">Sample City General Land Use - radio</button>
                                           &nbsp;&nbsp;
                                         
                                         
                                         
				</div>
				<h5>Parcels</h5>
				<div>
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/Newport_Beach/Parcels'" >Newport Beach Parcels </button>
                                      &nbsp;&nbsp;
					 <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/city/parcels'" >Sample City Parcels </button>
                                                  &nbsp;&nbsp;             
                                         
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/New_York_Manhattan/Zoning'" >New York City Manhattan Parcels </button>
                                         
                                         
                                         
                                         
                                         
				</div>
				<h5>Address And Streets</h5>
				<div>
					
                                   
                                     
                                     <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/Newport_Beach/Address'">Newport Beach Address </button>
                                            &nbsp;&nbsp;
                                     <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/Santa_Monica/Streets'" >Santa Monica Street</button>
                                             &nbsp;&nbsp;      
                                     
                                      <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/city/address'">Sample City Address </button>
                                            &nbsp;&nbsp;
                                     <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/city/streets'" >Sample City Street Lines</button>
                                       &nbsp;&nbsp;
                                    
				</div>
				<h5>Others</h5>
				<div>
					                 
                                                            
                                                            
                               
                                    
                                    
                                    
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/clusterpagedclienttablemap/county/education_facility'">Point Cluster with paged table[ Education Facility]</button>
                                                             &nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/clusterscrollerclienttablemap/county/fire_stations'" >Point Cluster with scroller table [ Fire Stations]</button>
                                                              &nbsp;&nbsp;
                                                             
                                                            <button type="button" class="btn btn-info">...</button>
				</div>
			</div>
		</div>
	</div>
    
                        
                        
                        
                        
                  </div>
                    
                    
                    
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-th"></i>
                                                                    <span>Tabular Data</span>
                                                            </div>
                                                           
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                       <!--     
                                                        
                                                        <button type="button" class="btn btn-warning">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_of_los_angeles.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-danger">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        -->
                                                        
                                                         <button type="button" class="btn btn-info" onclick="location.href = '/data/listscroller/Chicago/'">Chicago </button>
                                &nbsp;&nbsp;

                                <button type="button" class="btn btn-info" onclick="location.href = '/data/listscroller/New_York/'">New York</button>
                                &nbsp;&nbsp;

                                <button type="button" class="btn btn-info" onclick="location.href = '/data/listscroller/San_Francisco/'">San Francisco</button>
                                                        
                                                      
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                         <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Disclaimer</span>
                                                            </div>
                                                            
                                                    </div>
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        This application may contain and/or utilize information which was originally compiled by individual government agency for governmental purposes. 
                                                        The information may subsequently been modified by entity/entities other than original individual government agency. 
                                                        The original individual government agency make no representation as to the accuracy or usefulness of the information provided by this application or the information's suitability for any purpose and disclaim any liability for omissions or errors that may be contained therein. 
                                                        The public is advised to observe posted signage for compliance with applicable laws and regulations.
                                                        
                                                        Permission for use of these proprietary data is granted by the original individual government agency. 
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                       
                   
                    
                    
                    
                    
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>