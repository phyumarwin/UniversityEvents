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
        $event_sponsor = $this->db->readAll('sponsors');
        $data = [
            'sponsors'=>$event_sponsor
        ];
        $this->view('admin/event_sponsor/index',$data);
    }

    public function create() {
        // Initialize data with default values
        $data = [
            'sponsors' => [
                'event_id' => '',
                'name' => '',
                'contact_person' => '',
                'email' => '',
                'phone' => '',
                'address' => '',
                'website' => '',
                'sponsorship_amount' => ''
            ],
            'events' => $this->db->readAll('events') 
        ];
        $this->view('admin/event_sponsor/create', $data);
    }
    

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $event_id = $_POST['event_id'];

            $name = $_POST['name'];
           
            $contact_person = $_POST['contact_person'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $address = $_POST['address'];

            $website = $_POST['website'];

            $sponsorship_amount = $_POST['sponsorship_amount'];

            $event_sponsor = new EventSponsorModel();

            $event_sponsor->setEventId($event_id);
            $event_sponsor->setName($name);
            $event_sponsor->setContactPerson($contact_person);
            $event_sponsor->setEmail($email);
            $event_sponsor->setPhone($phone);
            $event_sponsor->setAddress($address);
            $event_sponsor->setWebsite($website);
            $event_sponsor->setSponsorshipAmount($sponsorship_amount);

            $eventSponsorCreated = $this->db->create('sponsors', $event_sponsor->toArray());
            // echo($event_sponsorCreated);
            // exit;
            setMessage('success', 'Create Sponsor successful!');
            redirect('EventSponsorController/index');
        }
    }

    public function edit($id)
    {
        $event_sponsor = $this->db->readAll('sponsors');

        $event_sponsor = $this->db->getById('sponsors', $id);

        $data = [
            'sponsors' => $event_sponsor
        ];

        $this->view('/admin/event_sponsor/edit', $data);
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Check if 'id' and other required fields are set in the POST request
            if(isset($_POST['id']) && 
                isset($_POST['event_id']) &&
                isset($_POST['name']) &&
                isset($_POST['contact_person']) &&
                isset($_POST['email']) && 
                isset($_POST['phone']) &&
                isset($_POST['address']) &&
                isset($_POST['website']) &&
                isset($_POST['sponsorship_amount']))
            {
                $id = $_POST['id'];
                $event_id = $_POST['event_id'];
                $name = $_POST['name'];
                $contact_person = $_POST['contact_person'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $website = $_POST['website'];
                $sponsorship_amount = $_POST ['sponsorship_amount'];

                // Create a new EventSponsorModel instance and set its properties
                $event_sponsor = new EventSponsorModel();
                $event_sponsor->setId($id);
                $event_sponsor->setId($event_id);
                $event_sponsor->setId($name);
                $event_sponsor->setId($contact_person);
                $event_sponsor->setId($email); 
                $event_sponsor->setId($phone); 
                $event_sponsor->setId($address);
                $event_sponsor->setId($website);
                $event_sponsor->setId($sponsorship_amount);
                // echo('ok');
                // exit;
                // Update the event_sponsor in the database
                $updateEventSponsor = $this->db->update('sponsors', $event_sponsor->getId(), $event_sponsor->toArray());
                // echo($updateEventSponsor);
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
