<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="submit" class="btn btn-danger float-right px-5"><a href="<?php echo URLROOT; ?>/EventController/index">Back</a></button>

        <div class="col-md-4">
            <h5 style="font-weight: bold; font-style: italic; color: #016064">New Event</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo URLROOT; ?>/ImageController/store" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>Event Title </label>
                            <select class="form-control" id="event_id" name="event_id" required>
                                <?php foreach ($data['events'] as $event): ?>
                                    <option value="<?php echo $event['id']; ?>"><?php echo $event['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept=".jpg, .jpeg, .png, .gif" required>
                        </div>

                        <button type="reset" class="btn btn-danger" style="margin-left:850px">Reset</button>
                        <button type="submit" class="btn btn-primary float-right" style="margin-right:10px">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
