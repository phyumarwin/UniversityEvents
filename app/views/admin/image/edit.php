<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="submit" class="btn btn-danger float-right px-5"><a href="<?php echo URLROOT; ?>/CategoryController/index">Back</a></button>

        <div class="col-md-4">
            <h5 class="ml-0" style="color: #016064;">Edit Image</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form  action="<?php echo URLROOT; ?>/ImageController/update" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['images']['id']; ?>">
                            <div class="form-group">
                                <label>Event Title</label>
                                <select class="form-control" name="event_id">
                                    <?php foreach ($data['events'] as $event) { ?>
                                        <option value="<?php echo $event['id']; ?>" 
                                            <?php if ($event['id'] == $data['images']['event_id']) {
                                                echo " selected";
                                            } ?>>
                                            <?php echo $event['title']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                            </div>
                                <button type="submit" class="btn btn-warning float-right">Update</button>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>