<!doctype html>
<html>
<head>
    <title>TransparentGov</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    
    <!--script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script -->
    <!-- script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script -->
    <script type="text/javascript" src="/civilgis/public/js/googlemapjs.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
        <!--link rel="stylesheet" href="/public/jquery/css/jquery.ui.all.css">
	<script src="/public/jquery/jquery-1.10.2.js"></script>
	<script src="/public/jquery/jquery.ui.core.js"></script>
	<script src="/public/jquery/jquery.ui.widget.js"></script>	
	<script src="/public/jquery/jquery.ui.button.js"></script -->
    
    
        <script>
           
          //  Dom must be stay here, can't move to seperate javascript js file. 
          google.maps.event.addDomListener(window, 'load', initialize);
             
             
             
        </script>
        
        
        
</head>
<body>
    
    
    
    <!-- wrapper, to center website -->
    <div class="wrapper">

        <!-- logo -->
        <div class="logo"></div>

        <!-- navigation -->
        <ul class="navigation">
             
            <!-- ZONING -->
            
            <li  <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                <!-- a href="<?php echo Config::get('URL'); ?>zoning/feature/zoning">ZONING</a -->
                <a>LAND USE ZONE</a>
                
                <ul class="navigation-submenu">
                    
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/zoning">ZONING</a>
                         
                        
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/general_landuse">GENERAL LAND USE</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/r1">SINGLE FAMILY RESIDENTIAL (R1)</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/r2_md">MULTIPLE FAMILY RESIDENTIAL MEDIUM DENSITY (R2-MD)</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/r2_hd">MULTIPLE FAMILY RESIDENTIAL HIGH DENSITY (R2-HD)</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/r3">MULTIPLE FAMILY RESIDENTIAL (R3)</a>
                    </li>
                    
                    
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/c1">LOCAL BUSINESS (C1)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/c1s">SHOPPING CENTER (C1S)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/c2">GENERAL BUSINESS (C2)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/cl">COMMERCIAL LIMITED (CL)</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/tc">TOWN CENTER (TC)</a>
                    </li>
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/mg">GENERAL INDUSTRIAL (MG)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/mp">INDUSTRIAL PARK (MP)</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/ir">INDUSTRIAL AND RECREATIONAL AND SCHOOL (IRS)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/pdc">PLANNED DEVELOPMENT COMMERCIAL (PDC)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/pdi">PLANNED DEVELOPMENT INDUSTRIAL (PDI)</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/pdr_ld">PLANNED DEVELOPMENT RESIDENTIAL LOW DENSITY (PDR-LD)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/pdr_md">PLANNED DEVELOPMENT RESIDENTIAL MEDIUM DENSITY (PDR-MD)</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/pdr_hd">PLANNED DEVELOPMENT RESIDENTIAL HIGH DENSITY (PDR-HD)</a>
                    </li>
                    
                   
                    
                    <li <?php if (View::checkForActiveController($filename, "zoning")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>zoning/feature/ap">ADMINISTRATIVE AND PROFESSIONAL</a>
                    </li>
                   
                    
                </ul>
            </li>
            
            
            
             <!-- PARCEL -->
            
            <li  <?php if (View::checkForActiveController($filename, "parcel")) { echo ' class="active" '; } ?> >
                
                <a>PARCEL</a>
                
                <ul class="navigation-submenu">
                    
                     <li <?php if (View::checkForActiveController($filename, "parcel")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>parcel/feature/parcels">PARCELS</a>                     
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "parcel")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>parcel/feature/address">ADDRESS</a>
                    </li>
                    
                    
                </ul>
            </li>
            
            
            
            
            
            
            <!-- CITY -->
            
            <li  <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                <!-- a href="<?php echo Config::get('URL'); ?>city/feature/streets">STREETS</a -->
                <a> CITY </a>
                
                <ul class="navigation-submenu">
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/streets">STREETS</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/parks">PARKS</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/schools">SCHOOLS</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/neighbor">NEIGHBOR</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/law_agency">LAW AGENCY</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/law_reportarea">LAW REPORT AREA</a>
                    </li>
                    
                    
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/law_geoproximity">LAW GEOPROXIMITY</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/law_district">LAW DISTRICT</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/law_beat">LAW BEAT</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/fire_station_boundary">FIRE STATION BOUNDARY</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/fire_geoproximity">FIRE GEOPROXIMITY</a>
                    </li>
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/fire_district">FIRE DISTRICT</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/fire_agency">FIRE AGENCY</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "city")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>city/feature/city_limit">CITY LIMIT</a>
                    </li>
                    
                </ul>
            </li>
            
            
            
            
            
            
            <!-- COUNTY -->
            
            <li  <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                
                <a> COUNTY </a>
                
                <ul class="navigation-submenu">
                    
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_streets">COUNTY STREETS</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_parks">COUNTY PARKS</a>
                    </li>
                    
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_education_facility">COUNTY EDUCATION FACILITY</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_cities">COUNTY CITIES</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_address">COUNTY ADDRESS</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_rails">COUNTY RAILS</a>
                    </li>
                    
                    
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_fire_grid">COUNTY FIRE GRID</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_fire_stations">COUNTY FIRE STATIONS</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_hospitals">COUNTY HOSPITALS</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_bounds">COUNTY BOUNDS</a>
                    </li>
                     <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_hwy_majorrd">COUNTY HIGHWAY MAJOR ROAD</a>
                    </li>
                    
                    
                    <li <?php if (View::checkForActiveController($filename, "county")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>county/feature/oc_water">COUNTY WATER</a>
                    </li>
                    
                    
                </ul>
            </li>
            
            
            
            
            
            
            
            
            
            
            <!-- li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>index/index">Index</a>
            </li -->
            
            
            
            
            <li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
            </li>
            <?php if (Session::userIsLoggedIn()) { ?>
                <li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
                </li>
                <li <?php if (View::checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
                </li>
            <?php } else { ?>
                <!-- for not logged in users -->
                <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
                </li>
                <li <?php if (View::checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>login/register">Register</a>
                </li>
            <?php } ?>
        </ul>

        <!-- my account -->
        <ul class="navigation right">
        <?php if (Session::userIsLoggedIn()) : ?>
            <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>login/showprofile">My Account</a>
                <ul class="navigation-submenu">
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/changeUserRole">Change account type</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/editAvatar">Edit your avatar</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/editusername">Edit my username</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/edituseremail">Edit my email</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                    </li>
                </ul>
            </li>
            <?php if (Session::get("user_account_type") == 7) : ?>
                <li <?php if (View::checkForActiveController($filename, "admin")) {
                    echo ' class="active" ';
                } ?> >
                    <a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        </ul>