<?php

class IndexController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    /*
    public function index()
    {
        $this->View->render('index/index');
    }
    */
    
     public function gis($subject)
    {
         $data['title'] = $subject;
       // $data['welcome_message'] = $this->language->get('welcome_message');
         
         
        $this->View->render('index/index', $data);
    }
    
    
}
