

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/local/<?php echo $data['area'] ?>"><?php echo $data['area'] ?> - Department of City Planning </a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>City of Los Angeles - Department of City Planning</span>
                                                            </div>
                                                        
                                                        
                                                        <!--
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
                                                        -->
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Los_Angeles/Zoning_Overlook'">Zoning Overlook - check box button</button>
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/Los_Angeles/Zoning_Overlook'">Zoning Overlook - radio button</button>
                                                            <button type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Los_Angeles/Zoning'">Zoning - Parcel based </button>
                                                            
                                                        
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Los_Angeles/General_Land_Use_Overlook'">General Land Use Overlook - check box button</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/Los_Angeles/General_Land_Use_Overlook'">General Land Use Overlook  - radio button</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Los_Angeles/General_Land_Use'">General Land Use  - Parcel based </button>
                                                        
                                                            
                                                       
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                   
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Planning Area</span>
                                                            </div>
                                                        
                                                        
                                                        <!--
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

-->
                                                    </div>
                                                    <div class="box-content">
                                                            
                                                         
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Area_Planning_Commissions'">Area Planning Commissions</button>
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Communities_And_Planning_Areas'">Communities and Planning Areas</button>
                                                        
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Specific_Plans'">Specific Plans</button>
                                                       
                                                         <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Other_Districts'">Other Districts</button>
                                                       
                                                        
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Historic_Preservation_Overlay_Zone'">Historic Preservation Overlay Zone</button>
                                                        <button type="button" class="btn btn-success"  onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localpagedclienttablemap/Los_Angeles/Historic_Cultural_Monuments'">Historic Cultural Monuments</button>
                                                        
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Economic Development Areas</span>
                                                            </div>
                                                        
                                                        <!--
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
                                                        
                                                        -->
                                                    </div>
                                                    <div class="box-content">
                                                              
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/Los_Angeles/Federal_Renewal_Community'">Federal Renewal Community</button>
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/Los_Angeles/State_Enterprise_Zone'">State Enterprise Zone</button>
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/Los_Angeles/Business_Improvement_District'">Business Improvement District</button>
                                                         <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>localmap/localsimplemap/Los_Angeles/Targeted_Neighborhood_Initiative'">Targeted Neighborhood Initiative</button>
                                                            
                                                        
                                                        
                                                      
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of Los Angeles Department of City Planning. &nbsp; &nbsp;  Copyright &copy; <?php echo date("Y"); ?> City of Los Angeles. All Rights Reserved
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