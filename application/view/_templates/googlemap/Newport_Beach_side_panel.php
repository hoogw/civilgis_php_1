

    
    

    
    
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
							<input type="text"  id="addr_txt" placeholder="search address example:1966 Harbor Blvd"/>
                                                           
                                                                
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
					<a href="<?php echo Config::get('URL'); ?>home/local/<?php echo $data['area'] ?>"><?php echo $data['area'] ?>
						
						<span class="hidden-xs"> </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localscrollerfulltablemap/Newport_Beach/Address" >
						
						<span class="hidden-xs">Address</span>
					</a>
					
				</li>
                                
                                
                               
                                
                                
                                
                            
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localscrollerfulltablemap/Newport_Beach/Parcels" >
						
						<span class="hidden-xs">Parcels</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localscrollerfulltablemap/Newport_Beach/Streets" >
						
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localjusttiles/Newport_Beach/Right_Of_Way" >
						
						<span class="hidden-xs">Right of Way</span>
					</a>
				</li>
                                
                                
                                
                                
                                
                                
				<li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localscrollerclienttablemap/Newport_Beach/Parks" >
						
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>
                                
                               
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Zoning [check box button]</span>
					</a>
					
				</li>

                                   
                                <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/Newport_Beach/Zoning" >
						
						<span class="hidden-xs">Zoning [radio button]</span>
					</a>
					
				</li>

                               <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localclassifycheckboxbuttonmap/Newport_Beach/General_Land_Use" >
						
						<span class="hidden-xs">General Land Use [check box button]</span>
					</a>
					
				</li>
                                
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>localmap/localclassifyradiobuttonmap/Newport_Beach/General_Land_Use" >
						
						<span class="hidden-xs">General Land Use [radio button]</span>
					</a>
					
				</li>
                                 
			
			</ul>
		</div>
            
            
		