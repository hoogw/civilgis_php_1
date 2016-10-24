<?php

class MapController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
    public function index()
    {
        
          $data['title'] = 'index';
         
       // $this->View->render('map/index', $data);
        
          
          $index_map_with_header_footer = ['_templates/index_side_bar','map/index','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
       
    }
    
    
    
    
    
     public function googlemap()
    {
        
          $data['title'] = 'googlemap';
         
       // $this->View->render('map/googlemap', $data);
          
          
           $index_map_with_header_footer = ['_templates/index_side_bar','map/googlemap','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
          
          
    }
    
    
     public function heremap()
    {
        
          $data['title'] = 'heremap';
         
       // $this->View->render('map/heremap', $data);
          
           $index_map_with_header_footer = ['_templates/index_side_bar','map/heremap','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
          
          
    }
    
    
    
     public function bingmap()
    {
        
          $data['title'] = 'bingmap';
         
       // $this->View->render('map/bingmap', $data);
          
           $index_map_with_header_footer = ['_templates/index_side_bar','map/bingmap','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
          
          
    }
    
    
     public function mapbox()
    {
        
          $data['title'] = 'mapbox';
         
       // $this->View->render('map/mapbox', $data);
          
           $index_map_with_header_footer = ['_templates/index_side_bar','map/mapbox','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
          
    }
    
    
    
    public function mapboxgl()
    {
        
          $data['title'] = 'mapboxgl';
         
      
          
           $index_map_with_header_footer = ['_templates/index_side_bar','map/mapboxgl','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
          
    }
    
    
    
    public function mapquest()
    {
        
          $data['title'] = 'mapquest';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/mapquest','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
    public function leaflet()
    {
        
          $data['title'] = 'leaflet';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/leaflet','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
     public function leafletmvt()
    {
        
          $data['title'] = 'leafletmvt';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/leafletmvt','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
    
    
     public function openlayers()
    {
        
          $data['title'] = 'openlayers';
         
        $index_map_with_header_footer = ['_templates/index_side_bar','map/openlayers','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
    
    
    public function arcgis()
    {
        
          $data['title'] = 'arcgis';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/arcgis','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    public function arcgisleaflet()
    {
        
          $data['title'] = 'arcgisleaflet';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/arcgisleaflet','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
    
    public function arcgisjavascriptapi()
    {
        
          $data['title'] = 'arcgisjavascriptapi';
         
         $index_map_with_header_footer = ['_templates/index_side_bar','map/arcgisjavascriptapi','_templates/disclaimer'];
          
        $this->View->renderMulti($index_map_with_header_footer, $data);
    }
    
    
    
    
    
     // -------------   below are old, testing only, not in use --------------------------  
    
     public function city($subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             $subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = 'city';
         
         
        $this->View->render('map/city', $data);
    }
    
    
    
    
    
    
    public function county($subject)
    {
        
         // default route 
         if (!isset($subject) || trim($subject)==='')
         {
             $subject = 'cities';
         }
        
          $data['subject'] = $subject;
         $data['area'] = 'county';
         
         
         
        $this->View->render('map/county', $data);
    }
    
    public function maplistpaged($area)
    {
        
         // default route 
        if (!isset($area) || trim($area)==='')
         {
             $area = 'newyork';
         }
        
         
         
         $data['area'] = $area;
       
         
        $this->View->render('map/maplistpaged', $data);
    }
    
    
    public function maplistscroller($area)
    {
        
         // default route 
         if (!isset($area) || trim($area)==='')
         {
             $area = 'newyork';
         }
        
         $data['area'] = $area;
       
         
        $this->View->render('map/maplistscroller', $data);
    }
    
    
    
    public function mappaged($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mappaged', $data);
    }
    
    
   
    
    
    public function mapsmpp($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mapsmpp', $data);
    }
    
    
    
    
    
    public function mapsmps($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mapsmps', $data);
    }
    
    
    
    
    public function mapscroller($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mapscroller', $data);
    }
    
    
    public function mapadvs($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mapadvs', $data);
    }
    
    public function mapadvp($area, $subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('map/mapadvp', $data);
    }
    
    
    
    
    
     //--------------------above testing only, not in use --------------------------------------
    
    
    
    
    
    
    
    
    
    
    
}// map controller
