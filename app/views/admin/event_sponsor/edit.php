<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="submit" class="btn btn-danger float-right px-5"><a href="<?php echo URLROOT; ?>/EventSponsorController/index">Back</a></button>

        <div class="col-md-4">
            <h5 class="ml-0" style="color: #016064;">Edit Sponsor</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form  action="<?php echo URLROOT; ?>/EventSponsorController/update" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['sponsors']['id']; ?>">
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
                                    <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $data['sponsors']['name'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Contact Person</label>
                                        <input type="text" name="contact_person" class="form-control" value="<?php echo $data['sponsors']['contact_person'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo $data['sponsors']['email'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo $data['sponsors']['phone'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="<?php echo $data['sponsors']['address'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Website</label>
                                        <input type="text" name="website" class="form-control" value="<?php echo $data['sponsors']['website'] ?>" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Sponsorship Amount </label>
                                    <input type="text" class="form-control" name="sponsor_amg" value="<?php echo $data['sponsors']['sponsor_amount'] ?>" required>
                                </div>
                                <button type="submit" class="btn btn-warning float-right">Update</button>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>