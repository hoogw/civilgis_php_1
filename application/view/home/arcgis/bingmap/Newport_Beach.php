

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/arcgis/">ArcGIS Rest API Home</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/arcgis/bingmap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Base Map</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/Newport_Beach/Address'">Address</button>
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/Newport_Beach/Parcels'">Parcels</button>
                                                        
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/bingmap/Newport_Beach/Streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/justtiles/bingmap/Newport_Beach/Right_Of_Way'">Right of Way</button>
                                                        
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/bingmap/Newport_Beach/Parks'">Parks</button>
                                                         
                                                            
                                                        
                                                        
                                                        
                                                        
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/bingmap/Newport_Beach/Zoning'">Zoning [check box button]</button>
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/bingmap/Newport_Beach/Zoning'">Zoning [radio button]</button>
                                                        
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/bingmap/Newport_Beach/General_Land_Use'">General Land Use [check box button]</button>
                                                         <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/bingmap/Newport_Beach/General_Land_Use'">General Land Use [radio button]</button>
                                                    
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                       
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Newport Beach. Copyright &copy; <?php echo date("Y"); ?> City of Newport Beach. All Rights Reserved
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