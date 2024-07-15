<?php require_once APPROOT . '/views/inc/header.php' ?>
    <link rel="stylesheet" type="text/css" href="css/new_style.css">

<body>
    <div class="header">
        <div class="wrapper">
            <a href="/"><h3 class="branding-title">UniEvents</h3></a>
            <!-- <h1 class="branding-title"><a href="/">Personal Media Library</a></h1> -->
            <ul class="nav">
                <li><a href="<?php echo URLROOT; ?>/pages/home">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/login">Login</a></li>
            </ul>
        </div>
    </div>

    <div id="content">
<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
