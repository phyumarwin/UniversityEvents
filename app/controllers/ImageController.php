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
        $images = $this->db->readAll('vw_events_images');
        
    //     echo '<pre>';
    // print_r($images);
    // echo '</pre>';
    // die();
        $data = [
            'images' => $images
        ];

        $this->view('admin/image/index', $data);
    }

    public function create()
    {
        $events = $this->db->readAll('events');
        
        $data = [
            'events' => $events,
            'index' => 'images'
        ];

        $this->view('admin/image/create', $data);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            
            if (!in_array($imageExtension, $validImageExtension))
            {
                setMessage('danger', 'Invalid image extension.');
                redirect('ImageController/create');
            }
            else if ($fileSize > 1000000)
            {
                setMessage('danger', 'Image size is too large!');
                redirect('ImageController/create');
            }
            else
            {
                $newImageName = uniqid() . '.' . $imageExtension;
                $uploadPath = 'images/' . $newImageName;

                if (move_uploaded_file($tmpName, $uploadPath))
{
    $event_id = $_POST['event_id'];
    $upload_url = $uploadPath;
    
    $imageModel = $this->model('ImageModel');
    $imageModel->setEventId($event_id);
    $imageModel->setUploadUrl($upload_url);

    $data = $imageModel->toArray();

    $imageInserted = $this->db->create('images', $data);

    if ($imageInserted)
    {
        setMessage('success', 'Image inserted successfully!');
    }
    else
    {
        setMessage('danger', 'Failed to insert image into database.');
    }

    redirect('ImageController/index');
}
else
{
    setMessage('danger', 'Failed to upload image.');
    redirect('ImageController/create');
}

            }
        }
        else
        {
            redirect('ImageController/create');
        }
    }
}
?>
