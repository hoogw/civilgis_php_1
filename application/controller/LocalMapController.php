<?php

class LocalMapController extends Controller
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
    
    
   public function localsimplemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localsimplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function localmaplistpaged($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmaplistpaged');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function localmaplistscroller($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmaplistscroller');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function localmapclienttable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapclienttable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
   
    
    public function localmapservertable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapservertable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function localmapclientservertable($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localmapclientservertable');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function localzoning($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localzoning');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function localgenerallanduse($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localgenerallanduse');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function localzones($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localzones');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
   
    
    
    
   
    
    
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
