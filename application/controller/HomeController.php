<?php

class HomeController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
   // no header footer, local home page is self-contained one page
    public function corporate($subject)
    {
        
           $data['subject'] = $subject;
         
        $corporate_home_page =   'home/corporate/'.$subject;
        $this->View->renderWithoutHeaderAndFooter($corporate_home_page, $data);
    }
    
    
    
   
    // no header footer, local home page is self-contained one page
    public function local($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/local/'.$area;
        
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    
    
    
    // no header footer, local home page is self-contained one page
    public function googlemap($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/googlemap/'.$area;
        
         $side_panel_path = '_templates/googlemap/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    public function mapbox($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/mapbox/'.$area;
        
         $side_panel_path = '_templates/mapbox/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    public function mapboxgl($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/mapboxgl/'.$area;
        
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    public function mapquest($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/mapquest/'.$area;
        
         $side_panel_path = '_templates/mapquest/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    public function bingmap($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/bingmap/'.$area;
        
         $side_panel_path = '_templates/bingmap/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    public function leaflet($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/leaflet/'.$area;
        
         $side_panel_path = '_templates/leaflet/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    
    public function leafletmvt($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/leafletmvt/'.$area;
        
         $side_panel_path = '_templates/leafletmvt/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    
    public function openlayers($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/openlayers/'.$area;
        
         $side_panel_path = '_templates/openlayers/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    public function heremap($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/heremap/'.$area;
        
         $side_panel_path = '_templates/heremap/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    //---------- arcgis hybrid-------------
    
    public function arcgis($frontmap, $area)
    {
        
           $data['frontmap'] = $frontmap;
            $data['area'] = $area;
         
        $local_home_page =   'home/arcgis/'.$frontmap . '/'.$area;
        
         $side_panel_path = '_templates/arcgis/'.$frontmap . '/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    //--------- end arcgis hybrid-----
    
    
    
    
    public function arcgisleaflet($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/arcgisleaflet/'.$area;
        
         $side_panel_path = '_templates/arcgisleaflet/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    public function arcgisjavascriptapi($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/arcgisjavascriptapi/'.$area;
        
         $side_panel_path = '_templates/arcgisjavascriptapi/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
