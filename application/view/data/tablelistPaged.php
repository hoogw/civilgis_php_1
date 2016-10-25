        
        
         
         <!-- our js -->
         <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/tabledata/tablelist_paged.js"></script>
         
         
        
         
         
         
  
    
    

    
   
    
    
    
    

            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>data/tabular_data_home/">Tabular data home</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>data/tablelistPaged/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                   
                                    
                                        <div class="box">
                                            
                                                 
                                                 
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-map-marker"></i>

                                                                                <span><?php echo $data['area'] ?></span>  
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
                                            
                                            
                                               
                                            
                                            
                                            
                                                 
                                            
                                                            <table id="tabledata" class="display" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        

                                                                        <th> Table of Content</th>
                                                                    </tr>
                                                                </thead>

                                                                <tfoot>
                                                                    <tr>
                                                                        

                                                                        <th>Table of Content</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                     
                                                     
                                                     
                                                     
                                                     
                                                                                        
                                                        
                                            
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