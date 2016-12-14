

    
    

    
    
    <header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo Config::get('URL'); ?><?php echo Config::get('URL'); ?>map/index/">Transparent Gov</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="<?php echo Config::get('URL'); ?>#" class="show-sidebar">
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
					<a href="<?php echo Config::get('URL'); ?>home/mongodb/bingmap/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;<img style="height:30px;" src="<?php echo Config::get('URL'); ?>public/images/logo/mongodb.svg" alt="" />&nbsp; + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/bing-map-icon.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                                 <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Newport_Beach/Address">

                        Address
                    </a>

                </li>










                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Newport_Beach/Parcels">

                        Parcels
                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerfulltablemap/bingmap/Newport_Beach/Streets">

                        Streets
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/justtiles/bingmap/Newport_Beach/Right_Of_Way">

                        Right of Way
                    </a>
                </li>






                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/scrollerclienttablemap/bingmap/Newport_Beach/Parks">

                         Parks
                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/bingmap/Newport_Beach/Zoning">

                        Zoning [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/bingmap/Newport_Beach/Zoning">

                        Zoning [radio button]
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifycheckboxbuttonmap/bingmap/Newport_Beach/General_Land_Use">

                        General Land Use [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>mongodb/classifyradiobuttonmap/bingmap/Newport_Beach/General_Land_Use">

                        General Land Use [radio button]
                    </a>

                </li>
                                 
			
			</ul>
		</div>
            
            
		