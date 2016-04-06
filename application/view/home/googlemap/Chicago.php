

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/googlemap/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/googlemap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
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
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifycheckboxbuttonmap/Chicago/Zoning'"> Zoning [check box button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/classifyradiobuttonmap/Chicago/Zoning'"> Zoning [radio button]</button>
                            &nbsp;&nbsp;
                            
                            

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Planning_Districts'">Planning Districts</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Planning_Regions'">Planning Regions</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Community'">Community</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Neighborhoods'">Neighborhoods</button>

                            &nbsp;&nbsp;
                            <br/>
                            <br />

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Industrial_Corridors'">Industrial Corridors</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Enterprises_Communities'">Enterprises Communities</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Landmark_Districts'">Landmark Districts</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Conservation_Areas'">Conservation Areas</button>

                            &nbsp;&nbsp;



                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Empowerment_Zones'">Empowerment Zones</button>

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
                                                            
                                                        
                                                           <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Police_Beat'">Police Beat</button>
                &nbsp;&nbsp;

                <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Police_District'">Police District</button>
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
                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/Chicago/Major_Streets'">Major Streets</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Railroads'">Railroads</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Streets_Sweeping'">Streets Sweeping</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerfulltablemap/Chicago/Bike_Routes'">Bike Routes</button>
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
                                                            
                                                        
                                                       <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Census_Tracts'">Census Tracts</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Hospitals'">Hospitals</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Schools'">Schools</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/High_School_Attendance_Boundaries'">High School Attendance Boundaries</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/scrollerclienttablemap/Chicago/Parks'">Parks</button>
                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Hydro'">Hydro</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>googlemap/simplemap/Chicago/Forestry'">Forestry</button>
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