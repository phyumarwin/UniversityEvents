<?php

class EventRegisterController extends Controller
{
    private $db;
    
    public function __construct()
    {
        $this->model('EventRegisterModel');
        $this->db = new Database();
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $event_id = $_POST['event_id'];
            $user_id = $_POST['user_id'];
            $roll_no = $_POST['roll_no'];
            $phone = $_POST['phone'];

            $event_register = new EventRegisterModel();
            $event_register->setEventId($event_id);
            $event_register->setUserId($user_id);
            $event_register->setRollNo($roll_no);
            $event_register->setPhone($phone);
            $event_register->setStatus('pending');

            $eventRegisterCreated = $this->db->create('event_registers', $event_register->toArray());

            if ($eventRegisterCreated) {
                setMessage('success', 'Registration successful! Awaiting admin approval.');
            } else {
                setMessage('danger', 'Registration failed!');
            }
            redirect('EventController/index');
        }
    }
}
