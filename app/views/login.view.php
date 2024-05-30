<?php include 'includes/header.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
<script src="https://kit.fontawesome.com/3813eddddc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container login-container">
        <div class="login-card">
            <div class="login-logo d-flex align-items-center justify-content-center">
                <img src="assets/images/logo_light.png" alt="SemlyAI logo">
            </div>
            <div class="login-content">
                <h1 class="mb-3">Log In to SemlyAI</h1>
                <?php $login = $user->getError('email')  || $user->getError('password') ?>

                <?php if ($login) : ?>
                    <div class="alert alert-danger" role="alert">There was an error with your submission. Please check the form and try again. Please check the following errors below:
                        <ul>
                            <?php if ($user->getError('email')) : ?>
                                <li><?= $user->getError('email') ?></li>
                            <?php endif; ?>
                            <?php if ($user->getError('password')) : ?>
                                <li><?= $user->getError('password') ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="post">
                    <div class="form-floating mb-2">
                        <input value="<?= old_value('email') ?>" type="email" name="email" class="form-control" placeholder="name@example.com" required>
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input value="<?= old_value('password') ?>" type="password" name="password" class="form-control" placeholder="Password" required><i id="eye" class="fa-solid fa-eye"></i>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary btn-custom" type="submit">Log In</button>
                </form>
                <div class="link-secondary mt-3">
                    <p>Don't have an account? <a href="signup">Sign Up</a></p>
                    <p>Forgot your password? <a href="forgot.php">Click here</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= ROOT ?>/assets/js/show_password_login.js"></script>
    <script src="<?= ROOT ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>