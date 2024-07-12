<?php

class CategoryController extends Controller
{
    private $db;
    public function __construct()
    {
        $this->model('CategoryModel');

        $this->db = new Database();
    }

    public function index()
    {
        $category = $this->db->readAll('categories');
        $data = [
            'categories'=>$category
        ];
        $this->view('admin/category/index',$data);
    }

    public function create(){
        $this->view('admin/category/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $_POST['name'];
           
            $description = $_POST['description'];

            $category = new CategoryModel();

            $category->setName($name);
            $category->setDescription($description);

            $categoryCreated = $this->db->create('categories', $category->toArray());
            // echo($categoryCreated);
            // exit;
            setMessage('success', 'Create Category successful!');
            redirect('categoryController/index');
        }
    }

    public function edit($id)
    {
        $category = $this->db->readAll('categories');

        $category = $this->db->getById('categories', $id);

        $data = [
            'categories' => $category
        ];

        $this->view('/admin/category/edit', $data);
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Check if 'id' and other required fields are set in the POST request
            if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];

                // Create a new CategoryModel instance and set its properties
                $category = new CategoryModel();
                $category->setId($id);
                $category->setName($name);
                $category->setDescription($description);
                // echo('ok');
                // exit;
                // Update the category in the database
                $updateCategory = $this->db->update('categories', $category->getId(), $category->toArray());
                // echo($updateCategory);
                // exit;
                if($updateCategory) {
                    setMessage('success', 'Category Updated Successfully');
                    redirect('categoryController/index');
                } else {
                    setMessage('error', 'Failed to Update Category');
                    redirect('categoryController/index');
                }
            } else {
                // Handle the case where required POST fields are missing
                setMessage('error', 'Missing required fields');
                redirect('categoryController/index');
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
            // Create a new CategoryModel instance and set its ID
            $category = new CategoryModel();
            $category->setId($id);

            // Delete the category from the database
            $isdestroy = $this->db->delete('categories', $category->getId());

            if ($isdestroy) {
                setMessage('success', 'Category Deleted Successfully');
            } else {
                setMessage('error', 'Failed to Delete Category');
            }
        } else {
            setMessage('error', 'Invalid Category ID');
        }

        // Redirect to the category index page
        redirect('categoryController/index');
    }

}
