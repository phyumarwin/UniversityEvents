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
            
            // Prepare data for insertion
            $event_register = new EventRegisterModel();
            $event_register->setEventId($event_id);
            $event_register->setUserId($user_id);
            $event_register->setRollNo($roll_no);
            $event_register->setPhone($phone);
    
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
