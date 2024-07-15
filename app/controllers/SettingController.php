<?php
class SettingController extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();   
    }

    public function setting()
    {
        $this->view('admin/setting');

    }

}
