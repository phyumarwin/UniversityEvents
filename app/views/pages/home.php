<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/navbar.php' ?>

<style>
.fullscreen-bg {
  background-image: url('../images/az.jpg');
  height: 100vh; /* Full viewport height */
  background-size: cover; /* Ensure the image covers the div */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Prevent image repetition */
}

.mask {
  background-color: rgba(0, 0, 0, 0.2); /* Semi-transparent overlay */
  height: 100%; /* Ensure the overlay covers the entire div */
  width: 100%;
}

.center-content {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  text-align: center; /* Center-align text */
}

h3, h5 {
  font-weight: bold; 
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
  font-family: 'Arial', sans-serif; 
  color: #fff; 
}

.center-content div {
  max-width: 600px; /* Optional: Limit the width of the text container */
}
</style>

<section>
    <!-- Hero -->
    <div class="fullscreen-bg">
      <div class="mask">
        <div class="center-content">
          <div>
            <h3 class="mb-3">Our University</h3>
            <h5 class="mb-3">
            University events aim to foster community and engagement among students, 
            faculty, and staff. They offer opportunities for personal and professional 
            growth through networking and workshops.</h5>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-success" href="<?php echo URLROOT; ?>/EventController/toShowEvent" role="button">Register NOW</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero -->
  </section>


<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
