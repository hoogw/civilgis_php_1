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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localsimplemap');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localsimplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function thememaplistpaged($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmaplistpaged');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function thememaplistscroller($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmaplistscroller');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapclienttable');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapservertable');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapclientservertable');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localzoning');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localgenerallanduse');
         
         
       
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
         
         $side_panel_path =  '_templates/'.$subject.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localzones');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
   
    
    
    
   
    
    
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
