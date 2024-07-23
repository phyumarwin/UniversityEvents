<!-- <div class="container-fluid"> -->
  <nav class="navbar navbar-expand-lg" style="background-color: #00594C;">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>/Pages/home" style="color: #fff;margin-left:1.5%"><h4>UniEvents</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 1.5%;">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT; ?>/Pages/home"  style="color: #fff;"><h6>Home</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/EventRegisterController/toShowEvent"  style="color: #fff;"><h6>Events</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/Pages/about"  style="color: #fff;"><h6>About</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/SettingController/UserSetting"  style="color: #fff;"><h6>Setting</h6></a>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['user_name'])): ?>
          <!-- href="<?php echo URLROOT; ?>/Auth/login" -->
          <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-white"><?= $_SESSION['user_name'] ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" id="logoutLink">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
              </a>
          </div>
          <?php else: ?>
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/login"  style="color: #fff;"><h6>Login</h6></a>
        <?php endif; ?>
        </li>

      </ul>
    </div>
  </nav>
</div>

<script>
document.getElementById('logoutLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    window.location.href = "<?php echo URLROOT; ?>/Auth/logout"; // Redirect to login page
});
</script>
