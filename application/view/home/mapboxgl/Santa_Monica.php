

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mapboxgl/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/mapboxgl/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li>
                                               
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
                                                        
                                                        
                                                         <button type="button" class="btn btn-xs btn-outline btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/multilayerrenderedfeaturescrollertablemap/Santa_Monica/overview'">Parcels Streets Zoning multi-layer with attribute table</button>
                                            &nbsp;&nbsp;
                                                       
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightlayermap/Santa_Monica/Buildings'">Buildings</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Santa_Monica/Blocks'">Blocks</button>
                                                        
                                                        
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap/Santa_Monica/Parcels'">Parcels</button>
                                                        
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Streets'">Streets</button>
                                                       
                                                        
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Speed_Limit'">Speed_Limit</button>
                                                          <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap/Santa_Monica/Streets_Sweeping'">Streets_Sweeping</button>
                                                        
                                                        
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
                                                            
                                                        
                                                       


                                            <button type="button" class="btn btn-xs btn-outline btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifypolygon1overlay/Santa_Monica/Zoning/Parcels'">Zoning & 1 overlay(parcels)</button>
                                            &nbsp;&nbsp;



                                            <button type="button" class="btn btn-xs btn-outline btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonswitch/Santa_Monica/Zoning'">Simple Zoning with switch</button>
                                            &nbsp;&nbsp;


                                            <button type="button" class="btn btn-xs btn-outline btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifypolygonsimple/Santa_Monica/Zoning'">Simple Zoning</button>
                                            &nbsp;&nbsp;
                                                    
                                                        
                                                        
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