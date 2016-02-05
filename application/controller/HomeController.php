<?php

class HomeController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    
   // no header footer, local home page is self-contained one page
    public function corporate($subject)
    {
        
           $data['subject'] = $subject;
         
        $corporate_home_page =   'home/corporate/'.$subject;
        $this->View->renderWithoutHeaderAndFooter($corporate_home_page, $data);
    }
    
    
    
   
    // no header footer, local home page is self-contained one page
    public function local($area)
    {
        
           $data['area'] = $area;
         
        $local_home_page =   'home/local/'.$area;
        
         $side_panel_path = '_templates/'.$area.'_side_panel'; 
         $multifiles = array($side_panel_path,$local_home_page);
         
         
       
          $this->View->renderMulti($multifiles, $data);
        
        
        
       
    }
    
    
    
    
    public function index()
    {
        
          $data['title'] = 'index';
         
        $this->View->render('map/index', $data);
    }
    
    
   
    
    
}// map controller
