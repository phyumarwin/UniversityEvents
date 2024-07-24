<?php

class EventRegisterController extends Controller
{
    private $db;
    
    public function __construct()
    {
        $this->model('EventRegisterModel');
        $this->db = new Database();
    }

    public function index()
    {
        $eventsRegisters = $this->db->readAll('vw_user_registers');

        // var_dump($eventsRegisters); 

        $data = [
            'eventsRegister'=>$eventsRegisters
        ];
        
        $this->view('admin/event_register/index', $data);    
    }

    public function toShowEvent()
    {
        $eventsRegisters = $this->db->readAll('vw_category_event');

        // var_dump($eventsRegisters); 

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
    
            // Fetch event details
            $event = $this->db->getById('events', $event_id);
            if (!$event) {
                http_response_code(404);
                echo json_encode(['message' => 'Event not found!']);
                return;
            }
    
            // Ensure the timezone is set correctly
            date_default_timezone_set('Asia/Yangon');
    
            // Fetch event start_time and current date/time
            $eventStartTime = new DateTime($event['start_time']);
            $eventEndTime = new DateTime($event['end_time']);
            $currentDateTime = new DateTime();
    
            // Debug: Log event start_time, end_time and current date/time
            error_log("Event Start Time: " . $eventStartTime->format('Y-m-d H:i:s'));
            error_log("Event End Time: " . $eventEndTime->format('Y-m-d H:i:s'));
            error_log("Current Date Time: " . $currentDateTime->format('Y-m-d H:i:s'));
    
            // Check if the event has expired
            if ($eventStartTime < $currentDateTime) {
                http_response_code(400);
                echo json_encode(['message' => 'Event has already expired!']);
                return;
            }
        
            // Check if the user has already registered for an event with overlapping time
            $existingRegistrations = $this->db->readAll('event_registers', ['user_id' => $user_id]);
            foreach ($existingRegistrations as $registration) {
                $existingEvent = $this->db->getById('events', $registration['event_id']);
                if ($existingEvent) {
                    $existingEventStartTime = new DateTime($existingEvent['start_time']);
                    $existingEventEndTime = new DateTime($existingEvent['end_time']);
                    
                    // Check for overlapping time
                    if (($eventStartTime < $existingEventEndTime) && ($eventEndTime > $existingEventStartTime)) {
                        // Send alert if the event times overlap
                        header('Content-Type: application/json');
                        echo json_encode(['message' => 'You have already registered for an event that overlaps in time!']);
                        return;
                    }
                }
            }
    
            // Prepare data for insertion
            $event_register = new EventRegisterModel();
            $event_register->setEventId($event_id);
            $event_register->setUserId($user_id);
            $event_register->setRollNo($roll_no);
            $event_register->setPhone($phone);
    
            // Insert the registration into the database
            $eventRegisterCreated = $this->db->create('event_registers', $event_register->toArray());
    
            header('Content-Type: application/json');
            if ($eventRegisterCreated) {
                echo json_encode(['message' => 'Registration successful']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Registration failed!']);
            }
        }
    }
    

}
    
    