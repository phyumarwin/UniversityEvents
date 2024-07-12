<?php
class dashboard extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();   
    }

    public function admin()
    {
        $this->view('admin/dashboard');

    }
    public function logout(){
        $this->view('pages/login');
    }

}
