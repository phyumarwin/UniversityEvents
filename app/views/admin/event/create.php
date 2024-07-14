<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
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
                            <form  action="<?php echo URLROOT; ?>/EventController/store" method="POST">
                                <div class="form-group">
                                    <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea class="form-control" name="description" style="height:100px;" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Venue </label>
                                    <textarea class="form-control" name="venue" style="height:100px;" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Start Time </label>
                                    <textarea class="form-control" name="start_time" style="height:100px;" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>End Time </label>
                                    <textarea class="form-control" name="end_time" style="height:100px;" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category Id </label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <?php foreach ($data['categories'] as $category): ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Date </label>
                                    <textarea class="form-control" name="date" style="height:100px;" required></textarea>
                                </div>

                                <button type="reset" class="btn btn-danger" style="margin-left:900px">Reset</button>
                                <button type="submit" class="btn btn-primary float-right" style="margin-right:10px">Add</button>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>