<?php

class MapboxglController extends Controller
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
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/simplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function simplecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/simplecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    
    
    
    
    //----------------------- End simple map section -------------------------------
    
    
    
    
    
   
    
    
    //----------------------- table map section -------------------------------
    
    public function renderedfeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/renderedfeaturepagedtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function sourcefeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/sourcefeaturepagedtablemap');
         
         
       
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
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/pagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function renderedfeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/renderedfeaturescrollertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function sourcefeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/sourcefeaturescrollertablemap');
         
         
       
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
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/scrollerfulltablemap');
         
         
       
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
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifycheckboxbuttonmap');
         
         
       
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
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifyradiobuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    //-----------------------end  classification map section -------------------------------
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
