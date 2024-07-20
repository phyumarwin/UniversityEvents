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
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Venue</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['events'] as $event) { ?>
                        <tr>
                            <td><?php echo isset($event['event_id']) ? $event['event_id'] : ''; ?></td>
                            <td><?php echo isset($event['category_name']) ? $event['category_name'] : ''; ?></td>
                            <td><?php echo isset($event['title']) ? $event['title'] : ''; ?></td>
                            <td><?php echo isset($event['description']) ? $event['description'] : ''; ?></td>
                            <td><?php echo isset($event['venue']) ? $event['venue'] : ''; ?></td>
                            <td><?php echo isset($event['start_time']) ? $event['start_time'] : ''; ?></td>
                            <td><?php echo isset($event['end_time']) ? $event['end_time'] : ''; ?></td>
                            <td><?php echo isset($event['date']) ? $event['date'] : ''; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/EventController/edit/<?php echo isset($event['event_id']) ? $event['event_id'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <!-- <a href="<?php echo URLROOT; ?>/EventController/destroy/<?php echo isset($event['id']) ? base64_encode($event['id']) : ''; ?>" class="btn btn-danger">Delete</a> -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $event['event_id']; ?>">
                                    Delete
                                </button>
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

<!-- Example modal in a loop -->
<?php foreach ($data['events'] as $event): ?>
    <div class="modal fade" id="deleteModal_<?php echo $event['event_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $event['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="deleteModalLabel_<?php echo $event['event_id']; ?>">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <?php echo $event['title']; ?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo URLROOT; ?>/EventController/destroy/<?php echo base64_encode($event['event_id']); ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
