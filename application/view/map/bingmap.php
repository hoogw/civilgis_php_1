
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
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/globe-blue.png" alt=""/>
						<span class="hidden-xs">Map Provider</span>
					</a>
                                    
                                        
				</li>
                                
                                
                              
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/googlemap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/google-maps-icon.png" alt=""/> Google Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/bingmap" class="dropdown-toggle">
						
						<span class="hidden-xs">
                                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>  Map </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/leaflet" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/leaflet-logo.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/openlayers" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/openlayers.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapbox/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapbox-logo.png" alt=""/> </span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/mapquest/" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/mapquest.png" alt=""/></span>
					</a>
                                    
                                        
				</li>
                                
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/heremap" class="dropdown-toggle">
						
						<span class="hidden-xs"><img src="<?php echo Config::get('URL'); ?>public/images/logo/here-logo.png" alt=""/> Map</span>
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
                                
                                 <hr>
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/phone.png" alt=""/> 
						<span class="hidden-xs">310-710-6501</span>
					</a>
                                    
                                       
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<img src="<?php echo Config::get('URL'); ?>public/images/logo/email.png" alt=""/> 
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
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index">TransparentGov</a></li>
                                                <li> <a href="<?php echo Config::get('URL'); ?>map/bingmap"> Bing Map</a></li> 
                                                &nbsp;&nbsp;  <img src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>
                                               
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
                                                        
                                                     <!--   
                                                        
                                                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Denver/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/Denver_logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                        
                                                          <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Aurora/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/Aurora_logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                        
                                                          
                                                          <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Palo_Alto/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/Palo_Alto_logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                          
                                                          
                                                          
                                                          <button type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Bakersfield/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/Bakersfield_logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                          
                                                        -->  
                                                        
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Newport_Beach/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/newport_beach.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Santa_Monica/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/santa_monica.png" alt=""/>
                                                        </button>
                                                        
                                                          
                                                            &nbsp;&nbsp;
                                                          
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Los_Angeles/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_of_los_angeles.png" alt=""/>
                                                        </button>
                                                        
                                                            
                                                            
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
                                                        
                                                          &nbsp;&nbsp;
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/New_York/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                          
                                                            &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/San_Francisco/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/san_francisco.png" alt=""/>
                                                        </button>
                                                        
                                                            
                                                              &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/Chicago/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.png" alt=""/>
                                                        </button>
                                                        
                                                              
                                                                &nbsp;&nbsp;
                                                            
                                                            
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/county/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/orange_county.png" alt=""/>
                                                        </button>
                                                              
                                                              
                                                                 &nbsp;&nbsp;
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/bingmap/city/'">Sample City</button>
                                                        
                                                       
                                                        
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
                                    
                                    <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifycheckboxbuttonmap/Santa_Monica/Zoning'">Santa Monica Zoning [check box button]</button>
                                         
                                           &nbsp;&nbsp;
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifyradiobuttonmap/Santa_Monica/Zoning'">Santa Monica Zoning [radio button]</button>
                                         
                                    
                                     &nbsp;&nbsp;
                                    
					 <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifycheckboxbuttonmap/city/zoning'">Sample City Zoning - check box</button>
                                         
                                           &nbsp;&nbsp;
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifyradiobuttonmap/city/zoning'">Sample City Zoning - radio</button>
                                           &nbsp;&nbsp;
                                         
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifycheckboxbuttonmap/city/general_land_use'">Sample City General Land Use - check box</button>
                                                    &nbsp;&nbsp;          
                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/classifyradiobuttonmap/city/general_land_use'">Sample City General Land Use - radio</button>
                                           &nbsp;&nbsp;
                                         
                                         
                                         
				</div>
				<h5>Parcels</h5>
				<div>
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/Newport_Beach/Parcels'" >Newport Beach Parcels </button>
                                      &nbsp;&nbsp;
					 <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/city/parcels'" >Sample City Parcels </button>
                                                  &nbsp;&nbsp;             
                                         
                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/New_York_Manhattan/Zoning'" >New York City Manhattan Parcels </button>
                                         
                                         
                                         
                                         
                                         
				</div>
				<h5>Address And Streets</h5>
				<div>
					
                                   
                                     
                                     <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/Newport_Beach/Address'">Newport Beach Address </button>
                                            &nbsp;&nbsp;
                                     <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/Santa_Monica/Streets'" >Santa Monica Street</button>
                                             &nbsp;&nbsp;      
                                     
                                      <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/city/address'">Sample City Address </button>
                                            &nbsp;&nbsp;
                                     <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/scrollerfulltablemap/city/streets'" >Sample City Street Lines</button>
                                       &nbsp;&nbsp;
                                    
				</div>
				<h5>Others</h5>
				<div>
					                 
                                                            
                                                            
                               
                                    
                                    
                                    
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/clusterpagedclienttablemap/county/education_facility'">Point Cluster with paged table[ Education Facility]</button>
                                                             &nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>bingmap/clusterscrollerclienttablemap/county/fire_stations'" >Point Cluster with scroller table [ Fire Stations]</button>
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
                                                        
                                                         <button type="button" class="btn btn-info" onclick="location.href = '/data/listscroller/Chicago/'">
                                                          <img src="<?php echo Config::get('URL'); ?>public/images/logo/chicago-room.png" alt=""/>
                                                         </button>
                                &nbsp;&nbsp;

                                <button type="button" class="btn btn-warning" onclick="location.href = '/data/listscroller/New_York/'">
                                   <img src="<?php echo Config::get('URL'); ?>public/images/logo/new-york.png" alt=""/>
                                </button>
                                &nbsp;&nbsp;

                                <button type="button" class="btn btn-default" onclick="location.href = '/data/listscroller/San_Francisco/'">
                                    <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/> 
                                </button>
                                                        
                                                      
                                                        
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