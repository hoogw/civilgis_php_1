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
    
    
    public function tabular_data_home()
    {
        
          $data['area'] = 'tabular_data_home';
         $data['subject'] = 'default';
          
          
           $tabular_data_sidebar = ['_templates/tabular_data_side_bar','data/tabular_data_home'];
          
        $this->View->renderMulti($tabular_data_sidebar, $data);
          
        
    }
    
    
    
     public function tablelistPaged($area)
    {
         // default route 
        
         if (!isset($area) || trim($area)==='')
         {
             $area = 'chicago';
         }
         
         
         $data['area'] = $area;
         $data['subject'] = 'default';
         
         $tabular_data_sidebar = ['_templates/tabular_data_side_bar','data/tablelistPaged'];
         
          $this->View->renderMulti($tabular_data_sidebar, $data);
         
       // $this->View->render('data/tablelistPaged', $data);
    }
    
    
     public function tablelistscroller($area)
    {
         // default route 
        
         if (!isset($area) || trim($area)==='')
         {
             $area = 'chicago';
         }
         
         
         $data['area'] = $area;
         $data['subject'] = 'default';
         
         
         
         $tabular_data_sidebar = ['_templates/tabular_data_side_bar','data/tablelistscroller'];
         
          $this->View->renderMulti($tabular_data_sidebar, $data);
         
         
       // $this->View->render('data/tablelistscroller', $data);
    }
    
    
    
    
    
     public function tablepaged($area, $subject)
    {
         // default route 
           
         if (!isset($subject) || trim($subject)==='')
         {
            // is only area provided, no subject provide, should re-direct to area table of contect list.
              $re_url = "Location: ".Config::get('URL')."data/tablelistPaged/".$area."/";
             header($re_url);
             die();
         }
         
         $data['subject'] = $subject;
         $data['area'] = $area;
         
         
          $tabular_data_sidebar = ['_templates/tabular_data_side_bar','data/tablepaged'];
         
          $this->View->renderMulti($tabular_data_sidebar, $data);
         
         
       // $this->View->render('data/tablepaged', $data);
    }
    
    
    
    public function tablescroller($area, $subject)
    {
        
         // default route 
         if (!isset($subject) || trim($subject)==='')
         {
              $re_url = "Location: ".Config::get('URL')."data/tablelistPaged/".$area."/";
             header($re_url);
             die();
         }
        
         $data['subject'] = $subject;
         $data['area'] =$area;
         
         
          $tabular_data_sidebar = ['_templates/tabular_data_side_bar','data/tablescroller'];
         
          $this->View->renderMulti($tabular_data_sidebar, $data);
         
         
         
       // $this->View->render('data/tablescroller', $data);
    }
    
    
    
}
