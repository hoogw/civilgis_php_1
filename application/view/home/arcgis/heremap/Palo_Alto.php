

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/arcgis/">ArcGIS Rest API Home</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/arcgis/heremap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Zoning</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                       <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/heremap/Palo_Alto/Zoning'">Zoning [check box button]</button>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/heremap/Palo_Alto/Zoning'">Zoning [radio button]</button>




                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Palo_Alto/PAN_Areas'">PAN Areas</button>
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
                                                                    
                                                                    <span></span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                        
                                                        <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/Palo_Alto/Addresses'">Addresses</button>
                            &nbsp;&nbsp;
                            
                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/Palo_Alto/Parcels'">Parcels</button>
                            &nbsp;&nbsp;
                           
                            
                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/heremap/Palo_Alto/Building'">Building</button>
     
                                                        
                                                        
                                                        
                                                        
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
                                                            
                                                        
                                                         <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/heremap/Palo_Alto/Streets'">Streets</button>
                            &nbsp;&nbsp;

                            <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>arcgis/justtiles/heremap/Palo_Alto/Right_of_way'">Right of way</button>
                            &nbsp;&nbsp;
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                       <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Palo Alto. Copyright &copy; <?php echo date("Y"); ?> City of Palo Alto. All Rights Reserved
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