<?php

class EventRegisterController extends Controller
{
    private $db;
    
    public function __construct()
    {
        $this->model('EventRegisterModel');
        $this->db = new Database();
    }

    public function toShowEvent()
    {
        $eventsRegisters = $this->db->readAll('vw_category_event');

        // var_dump($events); 

        $data = [
            'eventsRegister'=>$eventsRegisters
        ];
        
        $this->view('pages/event/index', $data);    
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $event_id = $_POST['event_id'];
            $user_id = $_POST['user_id'];
            $roll_no = $_POST['roll_no'];
            $phone = $_POST['phone'];
            // var_dump($user_id);
            // exit;
            // Check if the event_id exists in the events table
            // $events = $this->db->readAll('events', ['id' => $event_id]);
            // if (empty($events)) {
            //     header('Content-Type: application/json');
            //     http_response_code(400);
            //     echo json_encode(['message' => 'The specified event does not exist.']);
            //     return;
            // }
    
            // Check if the user_id exists in the users table
            // $users = $this->db->readAll('users', ['id' => $user_id]);
            // if (empty($users)) {
            //     header('Content-Type: application/json');
            //     http_response_code(400);
            //     echo json_encode(['message' => 'The specified user does not exist.']);
            //     return;
            // }
    
            // Prepare data for insertion
            $event_register = new EventRegisterModel();
            $event_register->setEventId($event_id);
            $event_register->setUserId($user_id);
            $event_register->setRollNo($roll_no);
            $event_register->setPhone($phone);
            $event_register->setStatus('pending');
    
            $eventRegisterCreated = $this->db->create('event_registers', $event_register->toArray());
    
            header('Content-Type: application/json');
            if ($eventRegisterCreated) {
                echo json_encode(['message' => 'Registration successful! Awaiting admin approval.']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Registration failed!']);
            }
        }
    }
    
    
}
