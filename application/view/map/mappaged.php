

         
          <!---- local DataTables CSS JS  must load after the Jquery.js -->
         
          <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/jquery.dataTables.js"></script>
         <link href="<?php echo Config::get('URL'); ?>public/css/jquery.dataTables.css" rel="stylesheet">
         
        <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/map_init.js"></script>
       
        <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/area_boundary.js"></script>
         <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/mappaged.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
   
         
         
         
         
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['subject'] ?>></input>
     <input type="hidden" id="areaID" value=<?php echo $data['area'] ?>></input>
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
   
    

    
    
    <header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
                                            
						<div id="search">
							<input type="text"  id="addr_txt" placeholder="search address"/>
                                                           
                                                                
                                                                    <i class="fa fa-search" id="search_addr"></i>
                                                              
                                                            
						</div>
                                            
                                            
					</div>
                                    
                                    
				</div>
			</div>
		</div>
	</div>
</header>
    
    
    
    
    


<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/maplistPaged/newyork" >
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">New York</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/maplistPaged/chicago" >
						<i class="fa fa-table"></i>
						<span class="hidden-xs">Chicago</span>
					</a>
				</li>
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>map/maplistPaged/losangeles" >
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Los Angeles</span>
					</a>
					
				</li>
                                
                                
			
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/maplistPaged/<?php echo $data['area'] ?>/"><?php echo $data['area'] ?></a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mappaged/<?php echo $data['area'] ?>/<?php echo $data['subject'] ?>"><?php echo $data['subject'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                    <div class="box">
                                            
                                                 
                                                 
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-table"></i>

                                                                                <span><?php echo $data['subject'] ?> [click any row FLY on map]</span>  
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
                                                
                                                        
                                                        <div id="map-canvas" class="box-content" style="height: 400px;"> </div>

                                                        <div id="legend" class="alert alert-warning"></div>

                                                        <div><img id="ajaxload" src="<?php echo Config::get('URL'); ?>public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" /></div>
                                                        
                                                        <div id="title_info" > </div>
                                                        
                                                       
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
                                                                                                        
                                                     
                                              </div> 
                                            
                                        </div>  <!--  box for map -->
                                        
                                        
                                         <div class="box">
                                            
                                                                <div class="box-header">
                                                                        <div class="box-name">
                                                                                <i class="fa fa-table"></i>

                                                                                <span><?php echo $data['subject'] ?>  visible on current map viewport only</span>  
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
                                        
                                                <div id="tableDiv">
                                                          
                                                            <!--
                                                                    <table id="tabledata" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Position Title</th>
                                                                                <th>Department</th>


                                                                            </tr>
                                                                        </thead>

                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Position Title</th>
                                                                                <th>Department</th>


                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                               -->
                                                        </div>
                                                
                                        
                                            </div> 
                                            
                                        </div>  <!--  box  for bottom datatables-->
                                        
                                        
                                    
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