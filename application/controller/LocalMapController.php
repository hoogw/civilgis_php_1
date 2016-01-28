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
    
    
    //----------------------- simple map section -------------------------------
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
    
    
    
    
     public function localsimpleclustermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localsimpleclustermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function localclusterpagedclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localclusterpagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    public function localclusterscrollerclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localclusterscrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    //----------------------- End simple map section -------------------------------
    
    
    
    
    
   //-------------------------------- maplist section -------------------------------- 
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
    
   
    //-------------------------------- End maplist section -------------------------------- 
    
    
    //----------------------- table map section -------------------------------
    
    public function localpagedclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localpagedclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function localpagedservertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localpagedservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function localpagedfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localpagedfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function localscrollerclienttablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localscrollerclienttablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function localscrollerservertablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localscrollerservertablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function localscrollerfulltablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localscrollerfulltablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
   
    //-----------------------End  table map section -------------------------------
    
   
    
    
    
    
    
    //----------------------- classification map section -------------------------------
   public function localclassifycheckboxbuttonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localclassifycheckboxbuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
   
    
    
    public function localclassifyradiobuttonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'localmap/localclassifyradiobuttonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    //-----------------------end  classification map section -------------------------------
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
