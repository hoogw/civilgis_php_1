

   
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
                                                                    
                                                                    <span> Planning</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifycheckboxbuttonmap/mapquest/Chicago/Zoning'"> Zoning [check box button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifyradiobuttonmap/mapquest/Chicago/Zoning'"> Zoning [radio button]</button>
                            &nbsp;&nbsp;
                            
                            

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Planning_Districts'">Planning Districts</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Planning_Regions'">Planning Regions</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Community'">Community</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Neighborhoods'">Neighborhoods</button>

                            &nbsp;&nbsp;
                            <br/>
                            <br />

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Industrial_Corridors'">Industrial Corridors</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Enterprises_Communities'">Enterprises Communities</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Landmark_Districts'">Landmark Districts</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Conservation_Areas'">Conservation Areas</button>

                            &nbsp;&nbsp;



                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Empowerment_Zones'">Empowerment Zones</button>

                            &nbsp;&nbsp;
                            
                                                        
                                                        
                                                       
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                   
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Police</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                           <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Police_Beat'">Police Beat</button>
                &nbsp;&nbsp;

                <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Police_District'">Police District</button>
                &nbsp;&nbsp;

                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Transportation</span>
                                                            </div>
                                                        
                                                        
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                       &nbsp;&nbsp;
                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Chicago/Major_Streets'">Major Streets</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Railroads'">Railroads</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Streets_Sweeping'">Streets Sweeping</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Chicago/Bike_Routes'">Bike Routes</button>
                            &nbsp;&nbsp;
                           

                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Public</span>
                                                            </div>
                                                        
                                                        
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                       <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Census_Tracts'">Census Tracts</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Hospitals'">Hospitals</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Schools'">Schools</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/High_School_Attendance_Boundaries'">High School Attendance Boundaries</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerclienttablemap/mapquest/Chicago/Parks'">Parks</button>
                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Hydro'">Hydro</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Chicago/Forestry'">Forestry</button>
                            &nbsp;&nbsp;

                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                       
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Chicago. Copyright &copy; <?php echo date("Y"); ?> City of Chicago. All Rights Reserved
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