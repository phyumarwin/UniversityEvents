<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <div class="container">
            <button type="submit" class="btn btn-warning float-right px-5">
                <a href="<?php echo URLROOT; ?>/CategoryController/create">Add New</a>
            </button>
            <h5 style="font-weight: bold; font-style: italic; color: #016064">Categories List</h5>
            <?php require APPROOT . '/views/components/auth_message.php'; ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['categories'] as $category) { ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['description']; ?></td>
                        <td>
                            <a href="<?php echo URLROOT; ?>/CategoryController/edit/<?php echo $category['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo URLROOT; ?>/CategoryController/destroy/<?php echo base64_encode($category['id']); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b><?php echo count($data['categories']); ?></b> entries</div>
                <br>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>