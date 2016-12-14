

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/postgis/">PostGIS</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/postgis/mapquest/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                       
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/city/address'">Address</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/city/parcels'">Parcels</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/city/streets'">Streets</button>
                                                       
                                                        
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                            
                                                            
                                                           
                                                            
                                                           
                                                             
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifycheckboxbuttonmap/mapquest/city/zoning'">Zoning [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifyradiobuttonmap/mapquest/city/zoning'">Zoning [radio button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifycheckboxbuttonmap/mapquest/city/general_land_use'">General Land Use [check box button]</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifyradiobuttonmap/mapquest/city/general_land_use'">General Land Use [radio button]</button>
                                                            
                                                            
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/neighbor'">Neighbor</button>
                                                            
                                                            
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/city/parks'">Parks</button>
                                                            
                                                            
                                                        
                                                        
                                                        
                                                        
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/city/schools'">Schools</button>
                                                        
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/law_agency'">Law agency</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/law_reportarea'">Law report area</button>
                                                        
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/law_geoproximity'">Law geoproximity</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/law_district'">Law district</button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/law_beat'">Law beat</button>
                                                        
                                                        
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
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                        
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/fire_station_boundary'">Fire station boundary</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/fire_geoproximity'">Fire geoproximity</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/fire_district'">Fire district</button>
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/city/fire_agency'">Fire agency</button>
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