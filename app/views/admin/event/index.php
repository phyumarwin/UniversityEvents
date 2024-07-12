<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <div class="container">
            <button type="submit" class="btn btn-warning float-right px-5">
                <a href="<?php echo URLROOT; ?>/EventController/create">Add New</a>
            </button>
            <h5 style="font-weight: bold; font-style: italic; color: #016064">Events List</h5>
            <?php require APPROOT . '/views/components/auth_message.php'; ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Venue</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['events'] as $event) { ?>
                        <tr>
                            <td><?php echo isset($event['id']) ? $event['id'] : ''; ?></td>
                            <td><?php echo isset($event['title']) ? $event['title'] : ''; ?></td>
                            <td><?php echo isset($event['description']) ? $event['description'] : ''; ?></td>
                            <td><?php echo isset($event['venue']) ? $event['venue'] : ''; ?></td>
                            <td><?php echo isset($event['start_time']) ? $event['start_time'] : ''; ?></td>
                            <td><?php echo isset($event['end_time']) ? $event['end_time'] : ''; ?></td>
                            <td><?php echo isset($event['category_name']) ? $event['category_name'] : ''; ?></td>
                            <td><?php echo isset($event['date']) ? $event['date'] : ''; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/EventController/edit/<?php echo isset($event['id']) ? $event['id'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo URLROOT; ?>/EventController/destroy/<?php echo isset($event['id']) ? base64_encode($event['id']) : ''; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b><?php echo count($data['events']); ?></b> entries</div>
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
