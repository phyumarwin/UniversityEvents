<?php

class Pages extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function index()
    {
        // echo('ok');
        // exit;
        $this->view('pages/login');
    }

    public function login()
    {
        $this->view('pages/login');
    }

    public function register()
    {
        $this->view('pages/register');
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function dashboard()
    {
        // $income = $this->db->incomeTransition();
        // $expense = $this->db->expenseTransition();
        // $data = [
        //     'income' => $income,
        //     'expense' => $expense
        // ];
        // $this->view('pages/dashboard', $data);
        $this->view('admin/dashboard');
    }

    public function home()
    {
        $this->view('pages/dashboard');
    }
}
