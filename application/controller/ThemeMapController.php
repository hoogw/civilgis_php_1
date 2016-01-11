<?php

class ThemeMapController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
     //  how to use: /civilgis/maponly/area/subject    area will include _template/area_side_panel.php
    // maponly have multi form
    
    
   public function themesimplemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/themesimplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
     public function themesimpleclustermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/themesimpleclustermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function thememaplistpaged($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/thememaplistpaged');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function thememaplistscroller($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/thememaplistscroller');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function thememapclienttable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/thememapclienttable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
   
    
    public function thememapservertable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/thememapservertable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function thememapclientservertable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/thememapclientservertable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function themezoning($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/themezoning');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function themegenerallanduse($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/themegenerallanduse');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function themezones($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'thememap/themezones');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
   
    
    
    
   
    
    
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
