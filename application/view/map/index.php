

   
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
						<span class="hidden-xs">Product</span>
					</a>
                                    
                                        <ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-globe"></i>&nbsp;&nbsp;Maps</a></li>
						<li><a href="#"><i class="fa fa-table"></i>&nbsp;&nbsp;Tabular Data</a></li>
						
					</ul>
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-usd"></i>
						<span class="hidden-xs">Pricing</span>
					</a>
                                    
                                        <ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-road"></i>&nbsp;&nbsp;Initial Setup &nbsp;&nbsp;$5000</a></li>
						<li><a href="#"><i class="fa fa-wrench"></i>&nbsp;&nbsp;Customize &nbsp;&nbsp;$60/hour</a></li>
						<li><a href="#"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;Cloud Hosting &nbsp;&nbsp;$150/month</a></li>
					</ul>
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-phone-square"></i>
						<span class="hidden-xs">Contact</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-envelope"></i>&nbsp;&nbsp;huguowen@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-mobile"></i>&nbsp;&nbsp;208-310-0875</a></li>
						
					</ul>
				</li>
                                
                                
                                
                                 
                          
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href=".">TransparentGov</a></li>
                                                <li><a href=".">Gallery</a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
                     
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Map</span>
                                                            </div>
                                                            <div class="box-icons">
                                                                    <a class="collapse-link">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                    </a>
                                                                    <a class="expand-link">
                                                                            <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <a class="close-link">
                                                                            <i class="fa fa-times"></i>
                                                                    </a>
                                                            </div>
                                                            <div class="no-move"></div>
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        <button type="button" class="btn btn-warning">Los Angeles</button>
                                                        <button type="button" class="btn btn-primary">Newport Beach</button>
                                                        <button type="button" class="btn btn-success">San Francisco</button>
                                                        <button type="button" class="btn btn-info">Chicago</button>
                                                        <button type="button" class="btn btn-warning">New York</button>
                                                        <button type="button" class="btn btn-danger">Santa Monica</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-globe"></i>
                                                                    <span>Maps</span>
                                                            </div>
                                                            <div class="box-icons">
                                                                    <a class="collapse-link">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                    </a>
                                                                    <a class="expand-link">
                                                                            <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <a class="close-link">
                                                                            <i class="fa fa-times"></i>
                                                                    </a>
                                                            </div>
                                                            <div class="no-move"></div>
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        <button type="button" class="btn btn-warning">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_los_angeles.gif" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-info">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.jpg" alt=""/>
                                                        </button>
                                                        
                                                        <button type="button" class="btn btn-warning">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/santa_monica.jpg" alt=""/>
                                                        </button>
                                                        
                                                        <button type="button" class="btn btn-danger">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/newport_beach.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                        
                    <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    <span>Featured Maps</span>
                                                            </div>
                                                            <div class="box-icons">
                                                                    <a class="collapse-link">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                    </a>
                                                                    <a class="expand-link">
                                                                            <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <a class="close-link">
                                                                            <i class="fa fa-times"></i>
                                                                    </a>
                                                            </div>
                                                            <div class="no-move"></div>
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>map/county/education_facility'">Point Cluster [County Education Facility] </button>
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>map/mapscroller/county/address/'">860,000+ address point [county address] </button>
                                                            
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/mappaged/city/parks/'" >City parks paged</button>
                                                            
                                                             <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>map/mapscroller/city/address/'">city address</button>
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/mapscroller/city/streets/'" >City street</button>
                                                             <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/mapscroller/city/parcels/'" >23,000+ parcel polygon  [city parcels]</button>
                                                             
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/mappaged/city/address/'">20,000+ address point [city address] </button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>map/mapscroller/county/streets/'">332,000+ street lines  [county streets]</button>
                                                        
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/city/zoning/'">Zoning [color polygon]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>map/city/general_landuse/'">General Land Use [color polygon]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>data/listScroller/chicago/'">Chicago Data Portal (scroller)</button>
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>data/listPaged/chicago/'">Chicago Data Portal (paged)</button>
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>map/county/fire_stations/'">Point Cluster [County Fire Stations]</button>
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/county/fire_stations/'" >Point Cluster [County Fire Stations]</button>
                                                            <button type="button" class="btn btn-danger">city </button>
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Tabular Data</span>
                                                            </div>
                                                            <div class="box-icons">
                                                                    <a class="collapse-link">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                    </a>
                                                                    <a class="expand-link">
                                                                            <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <a class="close-link">
                                                                            <i class="fa fa-times"></i>
                                                                    </a>
                                                            </div>
                                                            <div class="no-move"></div>
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        <button type="button" class="btn btn-warning">Los Angeles</button>
                                                        <button type="button" class="btn btn-primary">Newport Beach</button>
                                                        <button type="button" class="btn btn-success">San Francisco</button>
                                                        <button type="button" class="btn btn-info">Chicago</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
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
                                                            <div class="box-icons">
                                                                    <a class="collapse-link">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                    </a>
                                                                    <a class="expand-link">
                                                                            <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <a class="close-link">
                                                                            <i class="fa fa-times"></i>
                                                                    </a>
                                                            </div>
                                                            <div class="no-move"></div>
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        <button type="button" class="btn btn-warning">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_los_angeles.gif" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-info">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.jpg" alt=""/>
                                                        </button>
                                                        
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                        <div class="row">
                                    
                        
                        
                        
                            </div>    
                    
                    
                       
                   
                    
                    
                    
                    
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>