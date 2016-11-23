<?php

class VgController extends Controller
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
   public function simplemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/simplemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
     public function justtiles($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/justtiles');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
     public function simpleclustermap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/simpleclustermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function clusterpagedclienttablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/clusterpagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function clusterscrollerclienttablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/clusterscrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    //----------------------- End simple map section -------------------------------
    
    
    
    
    
   //-------------------------------- maplist section -------------------------------- 
    public function maplistpaged($area)
    {
         
        
        
         
        
         $data['area'] = $area;
        
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/maplistpaged');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function maplistscroller($area)
    {
         
        
        
         
        
         $data['area'] = $area;
        
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/maplistscroller');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    //-------------------------------- End maplist section -------------------------------- 
    
    
    //----------------------- table map section -------------------------------
    
    public function pagedclienttablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/pagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function pagedservertablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/pagedservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function pagedfulltablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/pagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function scrollerclienttablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/scrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function scrollerservertablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/scrollerservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function scrollerfulltablemap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/scrollerfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
   
    //-----------------------End  table map section -------------------------------
    
   
    
    
    
    
    
    //----------------------- classification map section -------------------------------
   public function classifycheckboxbuttonmap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/classifycheckboxbuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
   
    
    
    public function classifyradiobuttonmap($frontmap, $area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['frontmap'] = $frontmap;
         
         $side_panel_path = '_templates/vg/'.$frontmap.'/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'vg/'.$frontmap.'/classifyradiobuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    //-----------------------end  classification map section -------------------------------
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
