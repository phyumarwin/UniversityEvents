<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="submit" class="btn btn-danger float-right px-5"><a href="<?php echo URLROOT; ?>/CategoryController/index">Back</a></button>

        <div class="col-md-4">
            <h5 style="font-weight: bold; font-style: italic; color: #016064">New Category</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form  action="<?php echo URLROOT; ?>/categoryController/store" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea class="form-control" name="description" style="height:100px;" required></textarea>
                                </div>
                                <button type="reset" class="btn btn-danger" style="margin-left:800px">Reset</button>
                                <button type="submit" class="btn btn-primary float-right" style="margin-right:50px">Add</button>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>