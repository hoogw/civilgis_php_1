

   
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
					<a href="<?php echo Config::get('URL'); ?>/home/corporate/blue" class="dropdown-toggle">
						<i class="fa fa-globe"></i>
						<span class="hidden-xs">Product</span>
					</a>
                                    
                                        
				</li>
                                
                                
                                
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
                                                                    <span>Local Maps</span>
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
                                                        
                                                         <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/Newport_Beach/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/newport_beach.png" alt=""/>
                                                        </button>
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/city/'">City</button>
                                                        
                                                         <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/Santa_Monica/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/santa_monica.jpg" alt=""/>
                                                        </button>
                                                        
                                                       
                                                        
                                                         <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/county/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/orange_county.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <!--
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/Los_Angeles_County/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/la_county.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/Los_Angeles/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_of_los_angeles.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/New_York/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/San_Francisco/'">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>home/local/Chicago/'">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.png" alt=""/>
                                                        </button>
                                                        
                                                       -->
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
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
                                                        
                                                            
                                                            
                                                           
                                                            
                                                             <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedfulltablemap/city/address'">address point</button>
                                                          
                                                             <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedfulltablemap/city/parcels'" >parcel polygon </button>
                                                             
                                                            
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/city/general_landuse'">General Land Use</button>
                                                            
                                                            
                                                            
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclusterpagedclienttablemap/county/education_facility'">Point Cluster with paged table[ Education Facility]</button>
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclusterscrollerclienttablemap/county/fire_stations'" >Point Cluster with scroller table [ Fire Stations]</button>
                                                            
                                                              <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localscrollerfulltablemap/map/city/streets'" >street lines</button>
                                                            
                                                            <button type="button" class="btn btn-danger">...</button>
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