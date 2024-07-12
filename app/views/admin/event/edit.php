<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="button" class="btn btn-danger float-right px-5">
            <a href="<?php echo URLROOT; ?>/EventController/index" style="color: white; text-decoration: none;">Back</a>
        </button>

        <div class="col-md-4">
            <h5 class="ml-0" style="color: #016064;">Edit Event</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo URLROOT; ?>/EventController/update" method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['events']['id']; ?>">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $data['events']['title']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" style="height:100px;" required><?php echo $data['events']['description']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Venue</label>
                            <textarea class="form-control" name="venue" style="height:100px;" required><?php echo $data['events']['venue']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Start Time</label>
                            <input type="datetime-local" class="form-control" name="start_time" value="<?php echo $data['events']['start_time']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>End Time</label>
                            <input type="datetime-local" class="form-control" name="end_time" value="<?php echo $data['events']['end_time']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Category </label>
                            <select class="form-control" name="category_id">
                                <?php foreach ($data['categories'] as $category) { ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($category['id'] == $data['events']['category_id']) 
                                        {
                                            echo " selected";
                                        } ?>>

                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php } ?>
                            </select>                        
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo $data['events']['date']; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-warning float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
