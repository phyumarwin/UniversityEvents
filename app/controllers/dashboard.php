<?php

class Dashboard extends Controller
{
    private $db;
    
    public function __construct()
    {
        $this->model('EventRegisterModel');
        $this->db = new Database();   
    }

    public function admin()
    {
        $event_registers = $this->db->readAll('vw_user_registers');
        $data = [
            'event_registers' => $event_registers
        ];
        $this->view('admin/dashboard', $data);
    }

    public function approve($id)
    {
        $event_register = $this->db->getById('event_registers', $id);
        $event_register->setStatus('approved');
        
        $updated = $this->db->update('event_registers', $id, $event_register->toArray());

        if ($updated) {
            setMessage('success', 'Registration approved successfully!');
        } else {
            setMessage('danger', 'Failed to approve registration.');
        }

        redirect('dashboard/admin');
    }

    public function reject($id)
    {
        $event_register = $this->db->getById('event_registers', $id);
        $event_register->setStatus('rejected');
        
        $updated = $this->db->update('event_registers', $id, $event_register->toArray());

        if ($updated) {
            setMessage('success', 'Registration rejected successfully!');
        } else {
            setMessage('danger', 'Failed to reject registration.');
        }

        redirect('dashboard/admin');
    }

    public function logout(){
        $this->view('pages/login');
    }

}
