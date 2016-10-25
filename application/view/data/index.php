

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
	<div class="row" >
        
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				
                            
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/city/zoning/" class="active">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Sample City</span>
					</a>
				</li>
                                
                                
                                
                                <li>
					<a href="<?php echo Config::get('URL'); ?>map/county/bounds/" >
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Sample County</span>
					</a>
				</li>
                                
                                
                                
                                
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">California</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/county/bounds/">Los Angeles</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/city/zoning/">Newport Beach</a></li>
						
					</ul>
				</li>
                                
                                
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">New York</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">New York</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Albany</a></li>
						
					</ul>
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Texas</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Houston</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Dallas</a></li>
						
					</ul>
				</li>
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Washington</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Seattle</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Tacoma</a></li>
						
					</ul>
				</li>
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Colorado</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Denver</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Fort Collins</a></li>
						
					</ul>
				</li>
                                
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Florida</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Orlando</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Tampa</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Miami</a></li>
					</ul>
				</li>
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Arizona</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Phoenix</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Tucson</a></li>
						
					</ul>
				</li>
                                
                                
                                <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Oregon</span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Portland</a></li>
						<li><a  href="<?php echo Config::get('URL'); ?>map/index/">Vancouver</a></li>
						
					</ul>
				</li>
                                
				
                                 
                          
			</ul>
		</div>
            
            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href=".">TransparentGov</a></li>
                                                <li><a href=".">Maps</a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
                     
                    
                    
                    
                    
                        
                    <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Sample</span>
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
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>map/city/zoning/'">City</button>
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>map/county/bounds/'">County</button>
                                                            <button type="button" class="btn btn-success">&nbsp;</button>
                                                            <button type="button" class="btn btn-info">&nbsp;</button>
                                                            <button type="button" class="btn btn-warning">&nbsp;</button>
                                                            <button type="button" class="btn btn-danger">&nbsp;</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                        
                                    <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>California</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">Los Angeles</button>
                                                        <button type="button" class="btn btn-primary">Newport Beach</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                                    
                        
                        
                         <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>New York</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">New York</button>
                                                        <button type="button" class="btn btn-primary">Albany</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                            </div>    
                    
                    
                       
                    
                    
                    <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Texas</span>
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
                                                            <button type="button" class="btn btn-warning">Houston</button>
                                                            <button type="button" class="btn btn-primary">Dallas</button>
                                                            <button type="button" class="btn btn-success">&nbsp;</button>
                                                            <button type="button" class="btn btn-info">&nbsp;</button>
                                                            <button type="button" class="btn btn-warning">&nbsp;</button>
                                                            <button type="button" class="btn btn-danger">&nbsp;</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                        
                                    <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Washington</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">Seattle</button>
                                                        <button type="button" class="btn btn-primary">Tacoma</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                                    
                        
                        
                         <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Colorado</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">Denver</button>
                                                        <button type="button" class="btn btn-primary">Fort Collins</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                            </div>
                    
                    
                    <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Florida</span>
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
                                                            <button type="button" class="btn btn-warning">Orlando</button>
                                                            <button type="button" class="btn btn-primary">Tampa</button>
                                                            <button type="button" class="btn btn-success">Miami</button>
                                                            <button type="button" class="btn btn-info">&nbsp;</button>
                                                            <button type="button" class="btn btn-warning">&nbsp;</button>
                                                            <button type="button" class="btn btn-danger">&nbsp;</button>
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                        
                                    <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span>Arizona</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">Phoenix</button>
                                                        <button type="button" class="btn btn-primary">Tucson</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        
                                    
                        
                        
                         <div class="col-xs-12 col-sm-4">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    <i class="fa fa-table"></i>
                                                                    <span> Oregon</span>
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
                                                            
                                                        <button type="button" class="btn btn-warning">Portland</button>
                                                        <button type="button" class="btn btn-primary">Vancouver</button>
                                                        <button type="button" class="btn btn-success">&nbsp;</button>
                                                        <button type="button" class="btn btn-info">&nbsp;</button>
                                                        <button type="button" class="btn btn-warning">&nbsp;</button>
                                                        <button type="button" class="btn btn-danger">&nbsp;</button>
                                                        
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