

    
    

    
    
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
					<a href="<?php echo Config::get('URL'); ?>home/arcgis/openlayers/<?php echo $data['area'] ?>">
						
						<span class="hidden-xs"> <?php echo $data['area'] ?>  &nbsp; &nbsp;ESRI ArcGIS Server Rest API + &nbsp; <img src="<?php echo Config::get('URL'); ?>public/images/logo/openlayers.png" alt=""/>  Map </span>
                                        </a>
					
				</li>
                            
                            
                            
                            
                               <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/Newport_Beach/Address">

                        Address
                    </a>

                </li>










                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/Newport_Beach/Parcels">

                        Parcels
                    </a>
                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerfulltablemap/openlayers/Newport_Beach/Streets">

                        Streets
                    </a>
                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/justtiles/openlayers/Newport_Beach/Right_Of_Way">

                        Right of Way
                    </a>
                </li>






                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/scrollerclienttablemap/openlayers/Newport_Beach/Parks">

                        Parks
                    </a>

                </li>



                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/Newport_Beach/Zoning">

                        Zoning [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/openlayers/Newport_Beach/Zoning">

                        Zoning [radio button]
                    </a>

                </li>

                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifycheckboxbuttonmap/openlayers/Newport_Beach/General_Land_Use">

                        General Land Use [check box button]
                    </a>

                </li>


                <li>
                    <a href="<?php echo Config::get('URL'); ?>arcgis/classifyradiobuttonmap/openlayers/Newport_Beach/General_Land_Use">

                        General Land Use [radio button]
                    </a>

                </li>

                                 
			
			</ul>
		</div>
            
            
		