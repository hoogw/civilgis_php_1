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
         
        $this->View->render('map/index', $data);
    }
    
    
    
    
    
     public function googlemap()
    {
        
          $data['title'] = 'googlemap';
         
        $this->View->render('map/googlemap', $data);
    }
    
    
     public function heremap()
    {
        
          $data['title'] = 'heremap';
         
        $this->View->render('map/heremap', $data);
    }
    
    
    
     public function bingmap()
    {
        
          $data['title'] = 'bingmap';
         
        $this->View->render('map/bingmap', $data);
    }
    
    
     public function mapbox()
    {
        
          $data['title'] = 'mapbox';
         
        $this->View->render('map/mapbox', $data);
    }
    
    
    public function mapquest()
    {
        
          $data['title'] = 'mapquest';
         
        $this->View->render('map/mapquest', $data);
    }
    
    
    
    public function leaflet()
    {
        
          $data['title'] = 'leaflet';
         
        $this->View->render('map/leaflet', $data);
    }
    
    
    
     public function openlayers()
    {
        
          $data['title'] = 'openlayers';
         
        $this->View->render('map/openlayers', $data);
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
