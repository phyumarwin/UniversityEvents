<?php require_once APPROOT . '/views/inc/header.php' ?>

<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="<?php echo URLROOT; ?>/auth/register">
                        <?php require APPROOT . '/views/components/auth_message.php'; ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                          
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                                <i class="mdi mdi-eye-off toggle-password" id="toggle-password"></i>
                             </div>
  
                             
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo URLROOT; ?>/images/1uu.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php require_once APPROOT . '/views/inc/footer.php' ?>

<script>
        const passwordInput = document.getElementById('pass');
        const togglePassword = document.getElementById('toggle-password');
        const showPasswordCheckbox = document.getElementById('show-password');

        togglePassword.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.classList.remove('mdi-eye-off');
                togglePassword.classList.add('mdi-eye');
            } else {
                passwordInput.type = 'password';
                togglePassword.classList.remove('mdi-eye');
                togglePassword.classList.add('mdi-eye-off');
            }
        });

        showPasswordCheckbox.addEventListener('change', function () {
            if (this.checked) {
                passwordInput.type = 'text';
                togglePassword.classList.remove('mdi-eye-off');
                togglePassword.classList.add('mdi-eye');
            } else {
                passwordInput.type = 'password';
                togglePassword.classList.remove('mdi-eye');
                togglePassword.classList.add('mdi-eye-off');
            }
        });
</script>
