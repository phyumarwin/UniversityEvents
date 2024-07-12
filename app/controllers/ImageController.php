<?php

class ImageController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
    }

    public function index()
    {
        $images = $this->db->readAll('images'); 
        
        // Prepare data to be passed to the view
        $data = [
            'images' => $images
        ];

        // Load the view to display the images
        $this->view('admin/image/index', $data);
    }

    public function create()
{
    // Retrieve all events
    $events = $this->db->readAll('events'); 
    
    $data = [
        'events' => $events
    ];

    // Load the view with events data
    $this->view('admin/image/create', $data);
}

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve form data
            $event_id = $_POST['event_id']; // Retrieve event_id from form
            $upload_url = $_POST['upload_url']; 
            
            $data = [
                'event_id' => $event_id,
                'upload_url' => $upload_url
            ];

            // Insert the image data into the Images table
            $imageInserted = $this->db->create('images', $data);

            if ($imageInserted) {
                setMessage('success', 'Image inserted successfully!');
            } else {
                setMessage('danger', 'Failed to insert image.');
            }

            // Redirect to index page or appropriate view
            redirect('ImageController/index');
        }
    }

}
?>
