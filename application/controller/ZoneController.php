<?php

class ZoneController extends Controller
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
    
    
    
    
    
    
     public function city($subject)
    {
         // default route 
        
         if (!isset($subject) || trim($subject)==='')
         {
             $subject = 'zoning';
         }
         
         $data['subject'] = $subject;
         $data['area'] = 'city';
         
         
        $this->View->render_theme('gentelella','zone/city', $data);
    }
    
    
     public function countyp($subject)
    {
        
         // default route 
         if (!isset($subject) || trim($subject)==='')
         {
             $subject = 'cities';
         }
        
          $data['subject'] = $subject;
         $data['area'] = 'county';
         
         
         
        $this->View->render('map/countyp', $data);
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
    
    
}// map controller
