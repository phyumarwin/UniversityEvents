<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/navbar.php' ?>

<div class="container-fluid">
    <h3 class="text-center">All Events</h3>
    <div class="container">
        <div class="row">
            <?php if (isset($data['events'])): ?>
                <?php foreach ($data['events'] as $event): ?>
                    <div class="col-4 mt-2">
                        <div class="card ml-5">
                            <img src="<?php echo URLROOT; ?>/public/<?php echo $event['upload_url'] ?>" class="card-img-top" alt="Event Image">
                            <div class="card-body">
                                <h5 class="card-title truncate"><?php echo $event['title'] ?></h5>
                                <p class="card-text truncate-multiline"><?php echo $event['description'] ?></p>
                                <button type="button" class="btn btn-custom-primary" data-toggle="modal" data-target="#registerModal" data-title="<?php echo $event['title']; ?>">
                                    Register
                                </button>
                                <button type="button" class="btn btn-custom-primary" data-toggle="modal" data-target="#registerModal" data-title="<?php echo $event['title']; ?>">
                                    Sponsor
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
                    <form id="registerForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="rollNO" id="rollNO" placeholder="Type your Roll NO" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Type your Phone" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Type your Email" required/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="registerBtn">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom Script -->
<script>
    $(document).ready(function() {
        $('#registerModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var title = button.data('title');
            var modal = $(this);
            modal.find('.modal-title').text('Register for ' + title);
        });

        $('#registerBtn').click(function() {
            const alertHtml = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Thank You Registration for This Event.</br>
                    Please Wait Our Response!
                </div>`;
            $('#alertPlaceholder').html(alertHtml);
        });
    });
</script>
