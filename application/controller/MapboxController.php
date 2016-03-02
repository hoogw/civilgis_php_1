<?php

class MapboxController extends Controller
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
    
    
    //----------------------- simple map section -------------------------------
   public function simplemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/simplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
     public function justtiles($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/justtiles');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
     public function simpleclustermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/simpleclustermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function clusterpagedclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/clusterpagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function clusterscrollerclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/clusterscrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    //----------------------- End simple map section -------------------------------
    
    
    
    
    
   //-------------------------------- maplist section -------------------------------- 
    public function maplistpaged($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/maplistpaged');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function maplistscroller($area)
    {
         
        
        
         
        
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/maplistscroller');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    //-------------------------------- End maplist section -------------------------------- 
    
    
    //----------------------- table map section -------------------------------
    
    public function pagedclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/pagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function pagedservertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/pagedservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function pagedfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/pagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function scrollerclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/scrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function scrollerservertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/scrollerservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function scrollerfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/scrollerfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
   
    //-----------------------End  table map section -------------------------------
    
   
    
    
    
    
    
    //----------------------- classification map section -------------------------------
   public function classifycheckboxbuttonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/classifycheckboxbuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
   
    
    
    public function classifyradiobuttonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapbox/classifyradiobuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    //-----------------------end  classification map section -------------------------------
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
