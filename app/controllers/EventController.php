<?php

class EventController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->model('EventModel');

        $this->db = new Database();
    }

    public function index()
    {
        $events = $this->db->readAll('vw_category_event');

        $data = [
            'events' => $events
        ];

        $this->view('admin/event/index', $data);
    }

    public function create()
    {
        // Fetch all categories to populate the dropdown
        $categories = $this->db->readAll('categories');
        
        $data = [
            'categories' => $categories,
            'index' => 'event'
        ];

        $this->view('admin/event/create', $data);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve form data
            $title = $_POST['title'];
            $description = $_POST['description'];
            $venue = $_POST['venue'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];
            $date = date('Y-m-d H:i:s');
            $category_id = $_POST['category_id']; // Retrieve category_id from form

            // Create a new EventModel instance and set its properties
            $event = new EventModel();
            $event->setTitle($title);
            $event->setDescription($description);
            $event->setVenue($venue);
            $event->setStartTime($start_time);
            $event->setEndTime($end_time);
            $event->setCategoryId($category_id);
            $event->setDate($date);

            // Insert the event into the database
            $eventCreated = $this->db->create('events', $event->toArray());

            if ($eventCreated) {
                setMessage('success', 'Create Event successful!');
            } else {
                setMessage('danger', 'Create Event failed!');
            }
            redirect('EventController/index');
        }
    }

    public function edit($event_id) 
    {
        $categories = $this->db->readAll('categories');

        $event = $this->db->getById('events', $event_id);
        
        $data = [
            'categories' => $categories,
            'events' => $event
        ];
        // Load the view
        $this->view('admin/event/edit', $data);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Check if 'id' and other required fields are set in the POST request
            if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['venue']) && isset($_POST['start_time']) && isset($_POST['end_time']) && isset($_POST['date']) && isset($_POST['category_id'])) {
                // Retrieve form data
                $event_id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $venue = $_POST['venue'];
                $start_time = $_POST['start_time'];
                $end_time = $_POST['end_time'];
                $date = $_POST['date'];
                $category_id = $_POST['category_id']; // Retrieve category_id from form

                // Create a new EventModel instance and set its properties
                $event = new EventModel();
                $event->setTitle($title);
                $event->setDescription($description);
                $event->setVenue($venue);
                $event->setStartTime($start_time);
                $event->setEndTime($end_time);
                $event->setCategoryId($category_id);
                $event->setDate($date);

                // Update the event in the database
                $updateEvent = $this->db->update('events', $event->getEventId(), $event->toArray());

                var_dump("$updateEvent");
                exit;

                if ($updateEvent) {
                    setMessage('success', 'Event Updated Successfully');
                } else {
                    setMessage('error', 'Failed to Update Event');
                }
                redirect('EventController/index');
            } else {
                // Handle the case where required POST fields are missing
                setMessage('error', 'Missing required fields');
                redirect('EventController/index');
            }
        }
    }

    public function destroy($id)
    {
        // Decode the ID
        $id = base64_decode($id);

        // Ensure the ID is valid
        if ($id && is_numeric($id)) {
            // Create a new EventModel instance and set its ID
            $event = new EventModel();
            $event->setEventId($id);

            // Delete the event from the database
            $isdestroy = $this->db->delete('events', $event->getEventId());

            if ($isdestroy) {
                setMessage('success', 'Event Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Event');
            }
        } else {
            setMessage('error', 'Invalid Event ID');
        }

        // Redirect to the event index page
        redirect('EventController/index');
    }

}
