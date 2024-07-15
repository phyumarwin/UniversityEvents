<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Website Settings</h3>
    </div>

    <!-- General Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">General Settings</h6>
        </div>
        <div class="card-body">
            <p><strong>Website Name:</strong> University Events</p>
            <p><strong>Description:</strong> They play a crucial role in fostering community engagement, providing opportunities for social interaction, and creating memorable experiences. Good events involve careful planning and coordination to ensure a seamless and enjoyable experience for participants.</p>
            <p><strong>Contact Email:</strong> <a href="#"> ucsmtla999@gmail.com</a> </p>
            <p><strong>Social Media Links:</strong><a href="#"> http://localhost/UniversityEvents </a></p>
        </div>
    </div>

    <!-- User Management -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
        </div>
        <div class="card-body">
            <p><strong>User Roles:</strong> User </p>
            <p><strong>User Profile Settings:</strong></p>
            <ul>
                <li>Name: User</li>
                <li>Email: user999@gmail.com</li>
                <!-- Add more profile settings as needed -->
            </ul>
        </div>
    </div>

    <!-- Content Management -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Content Management</h6>
        </div>
        <div class="card-body">
            <p><strong>Default Language:</strong> English</p>
            <p><strong>Content Moderation Settings:</strong></p>
            <ul>
                <li>Approval Workflow: </li>
                <ul>
                    <li>
                        <strong>Standard Workflow:</strong>
                        <ul>
                            <li>Draft → Pending Review → Approved → Published</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Extended Workflow:</strong>
                        <ul>
                            <li>Draft → Review → Revision → Final Review → Approved → Published</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Simple Workflow:</strong>
                        <ul>
                            <li>Draft → Approved → Published</li>
                        </ul>
                    </li>
                </ul>
            </ul>

        </div>
    </div>

    <!-- SEO and Analytics -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">SEO and Analytics</h6>
        </div>
        <div class="card-body">
            <p><strong>SEO Settings:</strong></p>
            <ul>
                <li>Meta Tags: Basic Meta Tags</li>
                <li>SEO Tools Integration: Enabled</li>
                <li>XML Sitemap: Enabled</li>
                <!-- Add more SEO settings as needed -->
            </ul>
            <p><strong>Analytics Integration:</strong></p>
            <ul>
                <li>Google Analytics ID: UA-123456789-1</li>
                <li>Google Search Console Verification Code: ucsmtla123456</li>
                <!-- Add more analytics settings as needed -->
            </ul>
        </div>
    </div>


    <!-- Security and Privacy -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Security and Privacy</h6>
        </div>
        <div class="card-body">
            <p><strong>Password Policies:</strong> Minimum 8 characters, including uppercase, lowercase, and special characters</p>
            <p><strong>Data Encryption:</strong> AES-256 encryption for sensitive data</p>
            <p><strong>Privacy Settings:</strong> <a href="#"> Change Password</a></p>
            <p class="dark-mode"><strong>Dark Mode:</strong> 
                <button id="theme-toggle" class="btn btn-primary">Dark Mode</button>
            </p>
        </div>
    </div>

    <!-- Notification Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Notification Settings</h6>
        </div>
        <div class="card-body">
            <p><strong>Email Preferences:</strong></p>
            <ul>
                <li>Subscription Emails: <a href="#"> ucsmtla999@gmail.com</a></li>
                <li>Notification Emails: <a href="#"> ucsmtla999@gmail.com</a></li>
            </ul>
        </div>
    </div>

    <!-- Advanced Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Advanced Settings</h6>
        </div>
        <div class="card-body">
            <p><strong>Developer Tools:</strong>Developer Tools </p>
            <p><strong>Debugging Settings:</strong> Debugging Settings</p>
            <p><strong>Database Management:</strong> Database Management</p>
        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
