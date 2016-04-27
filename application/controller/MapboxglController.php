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
    
    
    
    public function multilayersimplemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersimplecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function singlelayersimplemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersimplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    //----------------------- End simple map section -------------------------------
    
    
    
    
    
   
    
    
    //----------------------- table map section -------------------------------
    
    public function multilayerrenderedfeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerrenderedfeaturepagedtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersourcefeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersourcefeaturepagedtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function multilayerpagedfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerpagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function multilayerrenderedfeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerrenderedfeaturescrollertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersourcefeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersourcefeaturescrollertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function multilayerscrollerfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerscrollerfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    // ...................... single layer ...............
    
    
     public function singlelayerrenderedfeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturepagedtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayersourcefeaturepagedtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturepagedtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayerpagedfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerpagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function singlelayerrenderedfeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturescrollertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayersourcefeaturescrollertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturescrollertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayerscrollerfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerscrollerfulltablemap');
         
         
       
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
