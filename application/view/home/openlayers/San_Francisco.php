

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/openlayers/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/mapquest/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Downtown</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                        
                                                        
                                                          <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifycheckboxbuttonmap/San_Francisco/Downtown_Zoning'">Downtown Zoning [check box button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifyradiobuttonmap/San_Francisco/Downtown_Zoning'">Downtown Zoning [radio button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifycheckboxbuttonmap/San_Francisco/Downtown_Land_Use'">Downtown Land Use [check box button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifyradiobuttonmap/San_Francisco/Downtown_Land_Use'">Downtown Land Use [radio button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/scrollerfulltablemap/San_Francisco/Downtown_Address'">Downtown Address</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/scrollerfulltablemap/San_Francisco/Downtown_Zoning'">Downtown Parcels</button>

                            
                                                        
                                                        
                                                       
                                                    </div>
                                            </div>
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
                                                            
                                                        
                                                          <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifycheckboxbuttonmap/San_Francisco/Zoning_Districts'">Zoning Districts [check box button]</button>
                &nbsp;&nbsp;
                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/classifyradiobuttonmap/San_Francisco/Zoning_Districts'">Zoning Districts [radio button]</button>
                &nbsp;&nbsp;


                <br />

              
                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Height_And_Bulk_Districts'">Height And Bulk Districts</button>
                &nbsp;&nbsp;
                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Blocks'">Blocks</button>

                &nbsp;&nbsp;

                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Special_Sign_Districts'">Special Sign Districts</button>

                &nbsp;&nbsp;

                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Special_Sign_Districts_Scenic_Streets'">Special Sign Districts Scenic Streets</button>

                &nbsp;&nbsp;

                <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Special_Use_Districts'">Special Use Districts</button>

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
                                                                    
                                                                    <span>Civil</span>
                                                            </div>
                                                        
                                                        
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                       &nbsp;&nbsp;
                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/scrollerfulltablemap/San_Francisco/Major_Streets'">Major Streets</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/scrollerfulltablemap/San_Francisco/Streets'">Streets</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Street_Structures'">Street Structures</button>
                            &nbsp;&nbsp;


                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/justtiles/San_Francisco/Curb_Island'">Curb and Island</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/justtiles/San_Francisco/Building'">Building Footprint</button>
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
                                                            
                                                        
                                                      <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Zipcode'">Zipcode</button>
                            &nbsp;&nbsp;
                                
                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/Realtor_Neighborhoods'">Realtor Neighborhoods</button>

                            &nbsp;&nbsp;

                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/scrollerclienttablemap/San_Francisco/Schools_Public'">Schools Public</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simpleclustermap/San_Francisco/Schools_Public_Address'">Schools Public Address</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simplemap/San_Francisco/City_Land'">City Land</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn  btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapquest/simpleclustermap/San_Francisco/City_Facility'">City Facility</button>
                            &nbsp;&nbsp;

                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                       
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of San Francisco. Copyright &copy; <?php echo date("Y"); ?> City of San Francisco. All Rights Reserved
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