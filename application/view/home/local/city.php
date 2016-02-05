

   
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
                                                                    
                                                                    <span>Administrative Base Map</span>
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
                                                        
                                                        
                                                       
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedfulltablemap/city/address'">Address</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedfulltablemap/city/parcels'">Parcels</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedfulltablemap/city/streets'">Streets</button>
                                                       
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                        
                    <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Community and Economic Development Map</span>
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
                                                        
                                                            
                                                            
                                                           
                                                            
                                                           
                                                             
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/city/general_landuse'">General Land Use</button>
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/neighbor'">Neighbor</button>
                                                            
                                                            
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Parks & Recreation Map</span>
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/city/parks'">Parks</button>
                                                            
                                                            
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>School Education</span>
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/city/schools'">Schools</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Police Map</span>
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
                                                            
                                                        
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/law_reportarea'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/law_beat'">Law beat</button>
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                        <div class="row">
                                    
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Fire Map</span>
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
                                                            
                                                        
                                                        
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/city/fire_agency'">Fire agency</button>
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