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
        $event_register = $this->db->readAll('event_registers');
        $data = [
            'event_registers'=>$event_register
        ];
        $this->view('admin/event_register/index',$data);
    }

    public function create(){
        $this->view('admin/event_register/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $_POST['name'];
           
            $event_id = $_POST['event_id'];

            $user_id = $_POST['user_id'];

            $registration_date = $_POST['registration_date'];

            $event_register = new EventRegisterModel();

            $event_register->setName($name);
            $event_register->setEventId($event_id);
            $event_register->setUserId($user_id);
            $event_register->setRegistrationDate(date('Y-m-d H:i:s'));

            $eventRegisterCreated = $this->db->create('event_registers', $event_register->toArray());
            // echo($eventRegisterCreated);
            // exit;
            setMessage('success', 'Create Event Register successful!');
            redirect('EventRegisterController/index');
        }
    }

    public function edit($id)
    {
        $event_register = $this->db->readAll('event_registers');

        $event_register = $this->db->getById('event_registers', $id);

        $data = [
            'event_registers' => $event_register
        ];

        $this->view('/admin/event_register/edit', $data);
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Check if 'id' and other required fields are set in the POST request
            if(isset($_POST['id']) && isset($_POST['event_id']) && isset($_POST['user_id']) && isset($_POST['registration_date'])){
                $id = $_POST['id'];
                $event_id = $_POST['event_id'];
                $user_id = $_POST['user_id'];
                $registration_date = $_POST['registration_date'];

                // Create a new EventRegisterModel instance and set its properties
                $event_register = new EventRegisterModel();
                $event_register->setId($id);
                $event_register->setEventId($event_id);
                $event_register->setUserId($user_id);
                $event_register->setUserId($registration_date);

                // echo('ok');
                // exit;
                // Update the eventRegister in the database
                $updateEventRegister = $this->db->update('event_register', $event_register->getId(), $event_register->toArray());
                // echo($updateEventRegister);
                // exit;
                if($updateEventRegister) {
                    setMessage('success', 'Event Register Updated Successfully');
                    redirect('EventRegisterController/index');
                } else {
                    setMessage('error', 'Failed to Update Event Register');
                    redirect('EventRegisterController/index');
                }
            } else {
                // Handle the case where required POST fields are missing
                setMessage('error', 'Missing required fields');
                redirect('EventRegisterController/index');
            }
        }
    }

    public function destroy($id)
    {
        // Decode the ID
        $id = base64_decode($id);

        // Ensure the ID is valid
        if ($id && is_numeric($id)) {
            // Create a new eventRegisterModel instance and set its ID
            $event_register = new EventRegisterModel();
            $event_register->setId($id);

            // Delete the EventRegister from the database
            $isdestroy = $this->db->delete('categories', $event_register->getId());

            if ($isdestroy) {
                setMessage('success', 'Event Register Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Event Register');
            }
        } else {
            setMessage('error', 'Invalid Event Register ID');
        }

        // Redirect to the Event Register index page
        redirect('EventRegisterController/index');
    }

}
