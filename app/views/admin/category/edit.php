<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<!-- <div class="wrapper d-flex align-items-stretch"> -->
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
    <!-- <div id="content" class="p-4 p-md-5"> -->
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>

<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5">
        <button type="submit" class="btn btn-danger float-right px-5"><a href="<?php echo URLROOT; ?>/CategoryController/index">Back</a></button>

        <div class="col-md-4">
            <h5 class="ml-0" style="color: #016064;">Edit Category</h5>
            <p><?php echo "Today is " . date("Y/m/d") . "<br>";?></p>
        </div>
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form  action="<?php echo URLROOT; ?>/categoryController/update" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['categories']['id']; ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $data['categories']['name'] ?>" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea class="form-control" name="description" style="height:100px;" required><?php echo $data['categories']['description']  ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning float-right">Update</button>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>