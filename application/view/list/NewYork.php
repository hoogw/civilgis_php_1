<script>

    function set_initial_location() {

        // current location array ["area", init_Lat, init_long, init_zoom level, "init_bounding_box"]
        return ["county", 33.693495, -117.793350, 10, "/-118.191605/33.367237/-117.406769/33.970698/"];
        
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
							<input type="text"  id="addr_txt" placeholder="exp:700 W Civic Center Dr"/>
                                                           
                                                                
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
					<a href="<?php echo Config::get('URL'); ?>map/county/cities">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Cities</span>
					</a>
				</li>
                                
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/address">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Address</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/bounds">
						<i class="fa fa-table"></i>
						<span class="hidden-xs">County Bounds</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/education_facility">
						<i class="fa fa-pencil-square-o"></i>
						<span class="hidden-xs">Education Facility</span>
					</a>
				</li>
				
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/fire_grid">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Fire Grid</span>
					</a>
				</li>
                                
				
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/fire_stations">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Fire Stations</span>
					</a>
				</li>
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/hospitals">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Hospitals</span>
					</a>
				</li>
				
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/hwy_majorrd">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">High Way Major Roads</span>
					</a>
				</li>
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/rails">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Rails</span>
					</a>
				</li>
				
                                 
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/streets">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Streets</span>
					</a>
				</li>
                                
                                 <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/water">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Water</span>
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
                                                
                                                <li><a href="<?php echo Config::get('URL'); ?>map/county/">County</a></li>
                                                
                                                
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
                                            
                                                <div id="map-canvas" class="box-content" style="height: 600px;">
                                                    
                                                    
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