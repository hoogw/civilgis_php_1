<?php

class DataController extends Controller
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
         
        $this->View->render('data/index', $data);
    }
    
    
     public function listPaged($area)
    {
         // default route 
        
         if (!isset($area) || trim($area)==='')
         {
             $area = 'chicago';
         }
         
         
         $data['area'] = $area;
         
        $this->View->render('data/listPaged', $data);
    }
    
    
     public function listScroller($area)
    {
         // default route 
        
         if (!isset($area) || trim($area)==='')
         {
             $area = 'chicago';
         }
         
         
         $data['area'] = $area;
         
        $this->View->render('data/listScroller', $data);
    }
    
    
    
    
    
     public function paged($area, $subject)
    {
         // default route 
           
         if (!isset($subject) || trim($subject)==='')
         {
            // is only area provided, no subject provide, should re-direct to area table of contect list.
              $re_url = "Location: ".Config::get('URL')."data/listPaged/".$area."/";
             header($re_url);
             die();
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
        $this->View->render('data/paged', $data);
    }
    
    
    
    public function scroller($area, $subject)
    {
        
         // default route 
         if (!isset($subject) || trim($subject)==='')
         {
              $re_url = "Location: ".Config::get('URL')."data/listPaged/".$area."/";
             header($re_url);
             die();
         }
        
         $data['subject'] = $subject;
         $data['area'] =$area;
         
        $this->View->render('data/scroller', $data);
    }
    
    
    
}
