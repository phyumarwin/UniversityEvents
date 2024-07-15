<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">About</h3>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Application Information</h6>
                </div>
                <div class="card-body">
                    <p><strong>Version:</strong> 1.0.0</p>
                    <p><strong>Release Notes:</strong> Added new event management features, improved UI, fixed bugs.</p>
                    <p><strong>Developer Information:</strong> Developed by University IT Department. Contact: it@university.edu</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">University Information</h6>
                </div>
                <div class="card-body">
                    <p><strong>Overview:</strong> Computer University is committed to providing excellent education and fostering research and development.</p>
                    <p><strong>Contact Details:</strong> Address, Phone Number, Email</p>
                    <p><strong>History:</strong> Founded in 1900, Computer University has a rich history of academic excellence and innovation.</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">User Guide</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="how-to-guides.html">How-to Guides</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="tutorials.html">Tutorials</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Policies</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-of-service.html">Terms of Service</a></li>
                        <li><a href="code-of-conduct.html">Code of Conduct</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Support</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="help-center.html">Help Center</a></li>
                        <li><a href="contact-support.html">Contact Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content close -->
</div>
<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>
