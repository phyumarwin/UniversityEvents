<?php

class EventSponsorController extends Controller
{
    private $db;
    public function __construct()
    {
        $this->model('EventSponsorModel');

        $this->db = new Database();
    }

    public function index()
    {
        $event_sponsor = $this->db->readAll('event_sponsors');
        $data = [
            'event_sponsors'=>$event_sponsor
        ];
        $this->view('admin/event_sponsor/index',$data);
    }

    public function create(){
        $this->view('admin/event_sponsor/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $_POST['name'];
           
            $contact = $_POST['contact'];

            $event_sponsor = new EventSponsorModel();

            $event_sponsor->setName($name);
            $event_sponsor->setContact($contact);

            $eventSponsorCreated = $this->db->create('event_sponsors', $event_sponsor->toArray());
            // echo($event_sponsorCreated);
            // exit;
            setMessage('success', 'Create Sponsor successful!');
            redirect('EventSponsorController/index');
        }
    }

    public function edit($id)
    {
        $event_sponsor = $this->db->readAll('event_sponsors');

        $event_sponsor = $this->db->getById('event_sponsors', $id);

        $data = [
            'event_sponsors' => $event_sponsor
        ];

        $this->view('/admin/event_sponsor/edit', $data);
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Check if 'id' and other required fields are set in the POST request
            if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $contact = $_POST['contact'];

                // Create a new EventSponsorModel instance and set its properties
                $event_sponsor = new EventSponsorModel();
                $event_sponsor->setId($id);
                $event_sponsor->setName($name);
                $event_sponsor->setContact($contact);
                // echo('ok');
                // exit;
                // Update the event_sponsor in the database
                $updateEventSponsor = $this->db->update('event_sponsors', $event_sponsor->getId(), $event_sponsor->toArray());
                // echo($updatEventSponsor);
                // exit;
                if($updateEventSponsor) {
                    setMessage('success', 'Sponsor Updated Successfully');
                    redirect('EventSponsorController/index');
                } else {
                    setMessage('error', 'Failed to Update Sponsor');
                    redirect('EventSponsorController/index');
                }
            } else {
                // Handle the case where required POST fields are missing
                setMessage('error', 'Missing required fields');
                redirect('EventSponsorController/index');
            }
        }
    }

    public function destroy($id)
    {
        // Decode the ID
        $id = base64_decode($id);

        // echo $id;
        // exit;

        // Ensure the ID is valid
        if ($id && is_numeric($id)) {
            // Create a new EventSponsorModel instance and set its ID
            $event_sponsor = new EventSponsorModel();
            $event_sponsor->setId($id);

            // Delete the sponsor from the database
            $isdestroy = $this->db->delete('categories', $event_sponsor->getId());

            if ($isdestroy) {
                setMessage('success', 'Sponsor Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Sponsor');
            }
        } else {
            setMessage('error', 'Invalid Sponsor ID');
        }

        // Redirect to the sponsor index page
        redirect('EventSponsorController/index');
    }

}
