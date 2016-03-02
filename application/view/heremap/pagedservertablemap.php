

         
          <!----  DataTables CSS JS  must load after the Jquery.js -->
         
          <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/jquery.dataTables.js"></script>
         <link href="<?php echo Config::get('URL'); ?>public/css/jquery.dataTables.css" rel="stylesheet">
         
        <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init/heremap.js"></script>
       
        
         <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/heremap/pagedservertablemap.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
   
         
         
         
         
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
   
    

    
    
    
    
    
    
    
    



            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>home/heremap/<?php echo $data['area'] ?>"><?php echo $data['area'] ?></a></li> 
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>heremap/pagedservertablemap/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                    <div class="box">
                                            
                                                 
                                                 
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-table"></i>

                                                                                 <span><?php echo $data['subject'] ?></span>  
                                                               
                                                                        </div>
                                                                    
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
                                                                     
                                                                     
                                                                     
                                                                </div>
                                        
                                            
                                                            <div class="box-content">

                                                                        <div id="tableDivX">

                                                                        </div>

                                                                
                                                              </div> 
                                        
                                                 
                                               
                                            
                                       </div>  <!--  box for top datatables-->
                                    
                                     
                                       <!--    info-table must be out side of box  -->
                                    <div id="info-tableX"> </div>   
                                  
                                     
                                    
                                    
                                        <div class="box">
                                            
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-map-marker"></i>

                                                                                <span><?php echo $data['subject'] ?> </span> 
                                                                                 <img id="ajaxload" src="<?php echo Config::get('URL'); ?>/public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" />
                                                                        </div>
                                                                    
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
                                                                     
                                                                     
                                                                     
                                                                </div>
                                            
                                            <div class="box-content">
                                                
                                                        
                                                        <div id="map-canvas" class="box-content" style="height: 800px;"> </div>

                                                        <div id="legend" class="alert alert-warning"></div>

                                                        
                                                        
                                                        <div id="title_info" > </div>
                                                        
                                                       
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
                                                                                                        
                                                     
                                              </div> 
                                            
                                        </div>  <!--  box for map -->
                                        
                                        
                                    
                                                <!-- info-table must be out side of box -->
                                    <div id="info-table"> </div>   
                                    
                                </div>
                        </div>
                        
                        
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>