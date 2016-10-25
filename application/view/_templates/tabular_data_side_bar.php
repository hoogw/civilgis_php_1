        
          <!---- local DataTables CSS JS   -->
         
          <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/jquery.dataTables.js"></script>
         <link href="<?php echo Config::get('URL'); ?>public/css/jquery.dataTables.css" rel="stylesheet">
         
         
         <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/js/dataTables.scroller.min.js"></script>
          <link href="<?php echo Config::get('URL'); ?>public/css/scroller.dataTables.min.css" rel="stylesheet">
          
         
   
         
         
        
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
					<a href="<?php echo Config::get('URL'); ?>data/tablelistpaged/new_york" >
						
						<span class="hidden-xs">New York</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>data/tablelistScroller/chicago" >
						
						<span class="hidden-xs">Chicago</span>
					</a>
				</li>
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>data/tablelistScroller/san_francisco" >
						
						<span class="hidden-xs">San Francisco</span>
					</a>
					
				</li>
                                
                                
			
			</ul>
		</div>
            
            
            
            
            
         
            
		