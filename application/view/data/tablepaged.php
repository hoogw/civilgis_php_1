       
         
         
        
         <!-- our js -->
         <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/tabledata/tabledata_paged.js"></script>
         
        
   
         
         
  
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>data/tabular_data_home/">Tabular data home</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>data/tablelistPaged/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>data/tablepaged/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                   
                                    
                                        <div class="box">
                                            
                                                 
                                                 
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-map-marker"></i>

                                                                                <span><?php echo $data['subject'] ?></span>  
                                                                        </div>
                                                                    
                                                                        <div class="box-icons">
                                                                             <!--
                                                                                <a class="collapse-link">
                                                                                        <i class="fa fa-chevron-up"></i>
                                                                                </a>
                                                                                -->
                                                                                <a class="expand-link">
                                                                                        <i class="fa fa-expand"></i>
                                                                                </a>
                                                                                <a class="close-link">
                                                                                        <i class="fa fa-times"></i>
                                                                                </a>
                                                                        </div>

                                                                        <div class="no-move"></div>
                                                                     
                                                                     
                                                                     
                                                                </div>
                                            
                                            
                                               
                                                            <div id="tableDiv">
                                                           

                                                            </div>
                                            
                                            
                                                            <div id="info-table"> </div>
                                            
                                                 <!--
                                            
                                                            <table id="tabledata" class="display" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Name</th>
                                                                        <th>Position Title</th>
                                                                        <th>Department</th>

                                                                        <th>Employee Annual Salary</th>
                                                                    </tr>
                                                                </thead>

                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Name</th>
                                                                        <th>Position Title</th>
                                                                        <th>Department</th>

                                                                        <th>Employee Annual Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                     -->
                                                     
                                                     
                                                     
                                                     
                                                    <!-- 
                                                        <div id="map-canvas" class="box-content" style="height: 700px;"> </div>

                                                        <div id="legend" class="alert alert-warning"></div>

                                                        <div><img id="ajaxload" src="/civilgis/public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" /></div>
                                                        
                                                        <div id="title_info" > </div>
                                                        
                                                        <div id="info-table"> </div>

                                                    -->                                                        
                                                        
                                            
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