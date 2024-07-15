<?php
class AboutController extends Controller 
{
    private $db;

    public function __construct() 
    {
        $this->db = new Database();   
    }

    public function about() 
    {
        $this->view('admin/about'); 
    }
}
