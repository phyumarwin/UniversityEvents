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

    public function UserSetting()
    {
        $this->view('pages/setting');

    }

}
