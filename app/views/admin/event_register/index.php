<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="container-fluid p-4">
        <div class="container">
            <h5 style="font-weight: bold; font-style: italic; color: #016064">Event Register List</h5>
            <?php require APPROOT . '/views/components/auth_message.php'; ?>
          <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Venue</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['eventsRegister'] as $event) { ?>
                            <tr>
                                <td><?php echo isset($event['username']) ? $event['username'] : ''; ?></td>
                                <td><?php echo isset($event['event_title']) ? $event['event_title'] : ''; ?></td>
                                <td><?php echo isset($event['event_description']) ? $event['event_description'] : ''; ?></td>
                                <td><?php echo isset($event['event_venue']) ? $event['event_venue'] : ''; ?></td>
                                <td><?php echo isset($event['start_time']) ? $event['start_time'] : ''; ?></td>
                                <td><?php echo isset($event['end_time']) ? $event['end_time'] : ''; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
          </div>
            <div class="clearfix">
                <div class="hint-text">Showing <b><?php echo count($data['eventsRegister']); ?></b> entries</div>
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
