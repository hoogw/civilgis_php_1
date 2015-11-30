<script>

    function set_initial_location() {

        // current location array ["area", init_Lat, init_long, init_zoom level, "init_bounding_box"]

        //return ["city", 33.65992448007282, -117.91505813598633, 12, "/-117.963690/33.634180/-117.854780/33.702970/"];
        return ["city", 33.65992448007282, -117.91505813598633, 13, "/-117.963690/33.634180/-117.854780/33.702970/"];
    }



 // color zoning
    function styleFeature(feature) {


        var _strokecolor = "000000";
        var _fillcolor = "000000";
        var _fillopacity = 0.1;
        var _zone = "";

        if ($("#subjectID").val() == 'zoning') {
             _zone = feature.getProperty('ZONE_CODE')

        }
        else   // general_landuse
                { 


            _zone = feature.getProperty('GP_CODE')

                }

        
        // zoning

        // residential
        if ((_zone == 'R1') || (_zone == 'R3') || (_zone == 'R2-MD') || (_zone == 'R2-HD') || (_zone == 'LDR') || (_zone == 'MDR') || (_zone == 'HDR')) {
          
            _fillcolor = "#FFFF66";
            _fillopacity = 0.6;
        }
        
        // commercial

        if ((_zone == 'CL') || (_zone == 'C1') || (_zone == 'C1-S') || (_zone == 'C2') || (_zone == 'TC') || (_zone == 'PDC') || (_zone == 'CC') || (_zone == 'GC') || (_zone == 'CR') || (_zone == 'NC') || (_zone == 'RC') || (_zone == 'UCC')) {
           
            _fillcolor = "#FF0000";
            _fillopacity = 0.6;
        }


        // industrial

        if ((_zone == 'MG') || (_zone == 'MP') || (_zone == 'PDI') || (_zone == 'LI') || (_zone == 'IP') || (_zone == 'CAC')) {
           
            _fillcolor = "#0000FF";
            _fillopacity = 0.6;
        }


        // recreation institutional 

        if ((_zone == 'I&R') || (_zone == 'PI') || (_zone == 'F') || (_zone == 'GC')) {
           
            _fillcolor = "#669900";
            _fillopacity = 0.6;
        }


        // general landuse 

        // residential
        if (  (_zone == 'MDR') || (_zone == 'HDR')) {

            _fillcolor = "#99CCFF";
            _fillopacity = 0.6;
        }

        if ((_zone == 'LDR') ) {

            _fillcolor = "#FFFF00";
            _fillopacity = 0.6;
        }


        // commercial

        if ( (_zone == 'CC') || (_zone == 'GC') || (_zone == 'CR') || (_zone == 'NC') || (_zone == 'RC') || (_zone == 'UCC')) {

            _fillcolor = "#66FF66";
            _fillopacity = 0.6;
        }


        // industrial

        if ( (_zone == 'LI') || (_zone == 'IP') || (_zone == 'CAC')) {

            _fillcolor = "#CC6699";
            _fillopacity = 0.6;
        }


        // recreation institutional 

        if ( (_zone == 'PI') || (_zone == 'F') || (_zone == 'GC')) {

            _fillcolor = "#669999";
            _fillopacity = 0.6;
        }



        return {
            // disable stroke color looks like google bug, fail to correctly color it. 
            // strokeColor: _strokecolor,

            strokeWeight: 0,
            fillColor: _fillcolor,
            
            fillOpacity: _fillopacity,
            //visible: true

        };


    }// style Feature









</script>



   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['title'] ?>></input>
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
					<a href="<?php echo Config::get('URL'); ?>map/city/general_landuse" >
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">General land use</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/city/zoning" >
						<i class="fa fa-table"></i>
						<span class="hidden-xs">Zoning</span>
					</a>
				</li>
                                
                                
                                
                                	<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Zones</span>
                                        </a>
					<ul class="active dropdown-menu">
						<li><a href="<?php echo Config::get('URL'); ?>map/city/r1">Single family residential (R1)</a></li>
								<li><a href="<?php echo Config::get('URL'); ?>map/city/r2_md">Multiple family residential medium density (R2-MD)</a></li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/r2_hd">Multiple family residential high density (R2-HD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/r3">Multiple family residential (R3)</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c1">Local business (C1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c1s">Shopping center (C1S)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/c2">General business (C2)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/cl">Commercial limited (CL)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/tc">Town center (TC)</a>
                                                                    </li>


                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/mg">General industrial (MG)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/mp">Industrial park (MP)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/ir">Industrial and recreational and school (IRS)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdc">Planned development commercial (PDC)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdi">Planned development industrial (PDI)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_ld">Planned development residential low density (PDR-LD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_md">Planned development residential medium density (PDR-MD)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/pdr_hd">Planned development residential high density (PDR-HD)</a>
                                                                    </li>



                                                                    <li>
                                                                        <a href="<?php echo Config::get('URL'); ?>map/city/ap">Administrative and professional</a>
                                                                    </li>
                                                
                                                
						
					</ul>
				</li>
                                
                                
                                
                                
                                
				<li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/parcels" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Parcels</span>
					</a>
					
				</li>
                                
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/address" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Address</span>
					</a>
					
				</li>
                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/streets" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Streets</span>
					</a>
					
				</li>
                                
                                 <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/parks" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Parks</span>
					</a>
					
				</li>

                                   
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/schools" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Schools</span>
					</a>
					
				</li>

                                
                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/neighbor" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> Neighbor</span>
					</a>
					
				</li>
                                   

                                <li class="dropdown">
					<a href="<?php echo Config::get('URL'); ?>map/city/city_limit" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs"> City Limit</span>
					</a>
					
				</li>

                                    

                                
                                
                                
                                
                                
                                
                                
                                
                                
				<li class="active dropdown">
					<a href="#" class="active dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs"> Police Fire</span>
					</a>
					<ul class="active dropdown-menu">
						
                                                
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_agency">Law agency</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_reportarea">Law report area</a>
                                                </li>




                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_geoproximity">Law geoproximity</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_district">Law district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/law_beat">Law beat</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_station_boundary">Fire station boundary</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_geoproximity">Fire geoproximity</a>
                                                </li>


                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_district">Fire district</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Config::get('URL'); ?>map/city/fire_agency">Fire agency</a>
                                                </li>
                                                
					</ul>
				</li>
                                
                                
                                 
			
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/index/">TransparentGov</a></li>
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/city/">City</a></li>
                                                
                                                <li><a href="<?php echo $data['title'] ?>"><?php echo $data['title'] ?></a></li>
                                        </ol>
                                </div>
                        </div>
                        
                        
                        <div class="row">
                                <div class="col-xs-12">
                                    
                                   
                                    
                                        <div class="box">
                                            
                                                 
                                                 
                                                <div class="box-header">
                                                        <div class="box-name">
                                                                <i class="fa fa-map-marker"></i>
                                                                
                                                                <span><?php echo $data['title'] ?></span>  
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
                                            
                                                
                                                <div id="map-canvas" class="box-content" style="height: 700px;">
                                                    
                                                    
                                                </div>
                                           
                                            <div id="legend" class="alert alert-warning"></div>
                                            
                                            <div><img id="ajaxload" src="/civilgis/public/img/devoops_getdata.gif"  alt="Loading ... " style="top: 25px;left: 15px;color:#ebebeb;" /></div>
                                            <div id="title_info" > </div>
                                            <div id="info-table">
          
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