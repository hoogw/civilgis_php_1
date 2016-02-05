

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/local/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
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
                                                        
                                                        
                                                        
                                                        
                                                         <button type="button" class="btn btn-success">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/orange_county.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-info">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/la_county.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-danger">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city_of_los_angeles.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-primary">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/nyc.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success">
                                                             <img src="<?php echo Config::get('URL'); ?>public/images/logo/San-Francisco-Logo.png" alt=""/>
                                                        </button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-info">
                                                            <img src="<?php echo Config::get('URL'); ?>public/images/logo/city-of-chicago-logo.png" alt=""/>
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
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Featured Tabular Data</span>
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>data/tablelistScroller/chicago/'">Chicago Data Portal (scroller)</button>
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>data/tablelistPaged/chicago/'">Chicago Data Portal (paged)</button>
                                                            
                                                        
                                                        
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