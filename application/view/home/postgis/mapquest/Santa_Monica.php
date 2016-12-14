

   
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
                                                                    
                                                                    <span>Base Map</span>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/justtiles/mapquest/Santa_Monica/Buildings'">Buildings</button>
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Santa_Monica/Parcels'">Parcels</button>
                                                        
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Santa_Monica/Streets'">Streets</button>
                                                       
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Santa_Monica/Speed_Limit'">Speed Limit</button>
                                                         
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/scrollerfulltablemap/mapquest/Santa_Monica/Streets_Sweeping'">Streets Sweeping</button>
                                                        
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/simplemap/mapquest/Santa_Monica/Bike_Route'">Bike Route</button>
                                                         
                                                            
                                                        
                                                        
                                                        
                                                        
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
                                                            
                                                        
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifycheckboxbuttonmap/mapquest/Santa_Monica/Zoning'">Zoning [check box button]</button>
                                                        <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>postgis/classifyradiobuttonmap/mapquest/Santa_Monica/Zoning'">Zoning [radio button]</button>
                                                         
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                       <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Santa Monica. Copyright &copy; <?php echo date("Y"); ?> City of Santa Monica. All Rights Reserved
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