

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/arcgis/mapquest/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;ESRI ArcGIS Server Rest API + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/mapquest.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                            
                                 <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/justtiles/mapquest/Santa_Monica/Buildings">

                        Buildings
                    </a>

                </li>










                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/Santa_Monica/Parcels">

                        Parcels
                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/Santa_Monica/Streets">

                        Streets
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/Santa_Monica/Speed_Limit">

                        Speed Limit
                    </a>
                </li>






                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/mapquest/Santa_Monica/Streets_Sweeping">

                        Street Sweeping
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/simplemap/mapquest/Santa_Monica/Bike_Route">

                        Bike Route
                    </a>

                </li>




                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/mapquest/Santa_Monica/Zoning">

                        Zoning [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/mapquest/Santa_Monica/Zoning">

                        Zoning [radio button]
                    </a>

                </li>

                               
                                
                                 
			
			</ul>
		</div>
            
            
		