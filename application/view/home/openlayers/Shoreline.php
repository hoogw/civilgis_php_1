

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/openlayers/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/openlayers/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Planning</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                        
                                                         
                                                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/classifycheckboxbuttonmap/Shoreline/Zoning'">Zoning [check box button]</button>
                                                            &nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/classifyradiobuttonmap/Shoreline/Zoning'">Zoning [radio button]</button>
                                                            &nbsp;&nbsp;
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/classifycheckboxbuttonmap/Shoreline/Land_Use_Comp_Plan'">Land Use Comp Plan [check box button]</button>
                                                            &nbsp;&nbsp;
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/classifyradiobuttonmap/Shoreline/Land_Use_Comp_Plan'">Land Use Comp Plan [radio button]</button>


                                                         
                                                         
                                                         
                                                         
                                                         
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                   
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Land</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                         <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerfulltablemap/Shoreline/Address_Central'">Address Central</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerfulltablemap/Shoreline/Tax_Parcel_Central'">Tax Parcel Central</button>
                            &nbsp;&nbsp;
                           
                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/justtiles/Shoreline/Buildings'">Buildings</button>
                            &nbsp;&nbsp;


                                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Park'">Park</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Neighborhood'">Neighborhood</button>


                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simpleclustermap/Shoreline/Monument'">Monument</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Land_Mark'">Land Mark</button>
                            
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Encumbrance'">Encumbrance</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Art'">Art</button>
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Streets</span>
                                                            </div>
                                                        
                                                        
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                            

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerfulltablemap/Shoreline/Street'">Street</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simpleclustermap/Shoreline/Street_Light'">Street_Light</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Sidewalk'">Sidewalk</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerfulltablemap/Shoreline/Pavement_Condition'">Pavement_Condition</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerfulltablemap/Shoreline/Pavement'">Pavement</button>
                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Intersections'">Intersections</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Guard_Rail'">Guard_Rail</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Fence'">Fence</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simpleclustermap/Shoreline/Curb_Ramp'">Curb_Ramp</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Curb'">Curb</button>
                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Bridge'">Bridge</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Bike_Facility'">Bike_Facility</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Railroad'">Railroad</button>

                            &nbsp;&nbsp;


                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simplemap/Shoreline/Trail'">Trail</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/simpleclustermap/Shoreline/Signal'">Signal</button>

                            &nbsp;&nbsp;



                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/justtiles/Shoreline/Crosswalk_Driveways'">Crosswalk_Driveways</button>
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
                                                                    
                                                                    <span>Traffic</span>
                                                            </div>
                                                        
                                                        
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                            

                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Cable'">Traffic_Cable</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Cam'">Traffic_Cam</button>

                &nbsp;&nbsp;


                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Circle'">Traffic_Circle</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_EV_Device'">Traffic_EV_Device</button>

                &nbsp;&nbsp;


                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Flashing_Beacon'">Traffic_Flashing_Beacon</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Pave_Striping'">Traffic_Pave_Striping</button>

                &nbsp;&nbsp;


                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Ped_Push_Button'">Traffic_Ped_Push_Button</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Ped_Signal_Display'">Traffic_Ped_Signal_Display</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Radar_Sign'">Traffic_Radar_Sign</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_School_Flasher'">Traffic_School_Flasher</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Signal_Cabinet'">Traffic_Signal_Cabinet</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Signal_Head'">Traffic_Signal_Head</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Signal_Loop'">Traffic_Signal_Loop</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Signalized_Intersection'">Traffic_Signalized_Intersection</button>

                &nbsp;&nbsp;

                <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>openlayers/scrollerclienttablemap/Shoreline/Traffic_Support_Structure'">Traffic_Support_Structure</button>

                &nbsp;&nbsp;
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                       
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Shoreline. Copyright &copy; <?php echo date("Y"); ?> City of Shoreline. All Rights Reserved
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