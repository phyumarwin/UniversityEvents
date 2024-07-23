<?php require_once APPROOT . '/views/inc/header.php' ?>

<div class="main">
        <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container-fluid">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?php echo URLROOT; ?>/images/1aa.png" alt="sing up image"></figure>
                    <a href="<?php echo URLROOT; ?>/pages/register" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" class="register-form" id="login-form" action="<?php echo URLROOT; ?>/Auth/login">
                    <?php require APPROOT . '/views/components/auth_message.php'; ?>
                        <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i></label>
                            <input type="text" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                                <i class="mdi mdi-eye-off toggle-password" id="toggle-password"></i>
                             </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
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