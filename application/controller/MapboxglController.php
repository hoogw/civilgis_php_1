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

                                        //................(1) Not highlight feature .......................     
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
    
    
    
    
                            //................End ........... Not highlight feature .......................    



                                        //....................(2) with highlight feature ..........................
    
    public function singlelayersimplehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersimplehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    public function singlelayersimplehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersimplehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersimplecolorhighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplecolorhighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersimplehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
     public function multilayersimplecolorhighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplecolorhighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function multilayersimplehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersimplehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    
    
                   //....................End ............... with highlight feature ..........................


        //----------------------- End simple map section -------------------------------
    
    
    
    
    
   
    
    
    //----------------------- table map section -------------------------------
    
    
    // .... multi layer rendered
    
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
    
    
    public function multilayerrenderedfeaturepagedtablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerrenderedfeaturepagedtablecolormap');
         
         
       
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
    
    
    public function multilayerrenderedfeaturescrollertablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerrenderedfeaturescrollertablecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
     //...........multi layer source
    
    
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
    
   
    
    public function multilayersourcefeaturepagedtablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersourcefeaturepagedtablecolormap');
         
         
       
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
    
   
    
    public function multilayersourcefeaturescrollertablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayersourcefeaturescrollertablecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
   
     // ................... multi layer both 
    
    public function multilayerpagedbothtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerpagedbothtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function multilayerscrollerbothtablemap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerscrollerbothtablemap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
     public function multilayerpagedbothtablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerpagedbothtablecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function multilayerscrollerbothtablecolormap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/multilayerscrollerbothtablecolormap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    // ...................... single layer  highlightlayer ...............
    
    
     public function singlelayerrenderedfeaturepagedtablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturepagedtablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayerrenderedfeaturescrollertablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturescrollertablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayersourcefeaturepagedtablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturepagedtablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function singlelayersourcefeaturescrollertablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturescrollertablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayerpagedbothtablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerpagedbothtablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayerscrollerbothtablehighlightlayermap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerscrollerbothtablehighlightlayermap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    
    
     // .................... single layer  highlightgeojson ................
    
    
     public function singlelayerrenderedfeaturepagedtablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturepagedtablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayerrenderedfeaturescrollertablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerrenderedfeaturescrollertablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayersourcefeaturepagedtablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturepagedtablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    public function singlelayersourcefeaturescrollertablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayersourcefeaturescrollertablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    public function singlelayerpagedbothtablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerpagedbothtablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
   
    
    public function singlelayerscrollerbothtablehighlightgeojsonmap($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/singlelayerscrollerbothtablehighlightgeojsonmap');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    
    
    
    
    
    
   
    //-----------------------End  table map section -------------------------------
    
   
    
    
    
    
    
    //----------------------- classification map section -------------------------------
    
    
     public function classifypolygon2overlay($area, $subject, $overlay1, $overlay2)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['overlay1'] = $overlay1;
         $data['overlay2'] = $overlay2;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifypolygon2overlay');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
     public function classifypolygon1overlay($area, $subject, $overlay1)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         $data['overlay1'] = $overlay1;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifypolygon1overlay');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
   public function classifypolygonswitch($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifypolygonswitch');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
   
    
    
    public function classifypolygonsimple($area, $subject)
    {
         
        
         if (!isset($subject) || trim($subject)==='')
         {
             //$subject = 'parks';
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         $side_panel_path = '_templates/mapboxgl/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,'mapboxgl/classifypolygonsimple');
         
         
       
          $this->View->renderMulti($multifiles, $data);
    }
    
    
    
    
    
    
    
    
    //-----------------------end  classification map section -------------------------------
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
