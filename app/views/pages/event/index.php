<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/navbar.php' ?>

<div class="container-fluid">
    <h3 class="text-center">All Events</h3>
    <div class="container">
        <div class="row">
            <?php if (isset($data['eventsRegister'])): ?>
                <?php foreach ($data['eventsRegister'] as $event): ?>
                    <div class="col-4 mt-2">
                        <div class="card ml-5">
                            <img src="<?php echo URLROOT; ?>/public/<?php echo $event['upload_url'] ?>" class="card-img-top lazyload" alt="Event Image">
                            <div class="card-body">
                                <h5 class="card-title truncate"><?php echo $event['title'] ?></h5>
                                <p class="card-text truncate-multiline"><?php echo $event['description'] ?></p>
                                <button type="button" class="btn btn-custom-primary" data-toggle="modal" data-target="#viewAllModal" 
                                    data-title="<?php echo $event['title']; ?>" 
                                    data-description="<?php echo $event['description']; ?>" 
                                    data-venue="<?php echo $event['venue']; ?>" 
                                    data-start_time="<?php echo $event['start_time']; ?>"
                                    data-end_time="<?php echo $event['end_time']; ?>">
                                    View All
                                </button>
                                <button type="button" class="btn btn-custom-primary" data-toggle="modal" data-target="#registerModal" data-title="<?php echo $event['title']; ?>">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No Events available.</p>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>


<!-- Modal for Viewing All Details -->
<div class="modal fade" id="viewAllModal" tabindex="-1" role="dialog" aria-labelledby="viewAllModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewAllModalLabel">Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 id="eventTitle"></h5>
                <p id="eventDescription"></p>
                <p><strong>Venue:</strong> <span id="eventVenue"></span></p>
                <p><strong>Start Time:</strong> <span id="eventStartTime"></span></p>
                <p><strong>End Time:</strong> <span id="eventEndTime"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#viewAllModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var title = button.data('title');
        var description = button.data('description');
        var venue = button.data('venue');
        var start_time = button.data('start_time');
        var end_time = button.data('end_time');

        var modal = $(this);
        modal.find('#eventTitle').text(title);
        modal.find('#eventDescription').text(description);
        modal.find('#eventVenue').text(venue);
        modal.find('#eventStartTime').text(start_time);
        modal.find('#eventEndTime').text(end_time);
    });
</script>


<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register for Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Alert will be inserted here -->
                <div id="alertPlaceholder"></div>
                <form id="registerForm" method="POST">
                    <input type="hidden" name="event_id" id="event_id">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Type your Name" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Type your Roll NO" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Type your Phone" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Type your Email" required/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Custom Script -->
<script>
$(document).ready(function() {
    $('#registerModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var title = button.data('title');
        var eventId = button.data('id'); 
        var modal = $(this);
        modal.find('.modal-title').text('Register for ' + title);
        modal.find('#event_id').val(eventId);
    });

    $('#registerForm').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: '<?php echo URLROOT; ?>/EventRegisterController/store',
            method: 'POST',
            data: formData,
            success: function(response) {
                // Display success message
                $('#alertPlaceholder').html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
                // Clear form fields
                $('#registerForm')[0].reset();
                // Close modal after a delay
                setTimeout(function() {
                    $('#registerModal').modal('hide');
                }, 2000);
            },
            error: function(xhr, status, error) {
                // Display error message
                $('#alertPlaceholder').html('<div class="alert alert-danger" role="alert">An error occurred: ' + xhr.responseText + '</div>');
            }
        });
    });
});
</script>
