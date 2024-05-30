<?php include 'includes/header.view.php'; ?>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/captcha.css">
</head>

<body>

    <div class="container login-container">
        <div class="login-card">
            <div class="login-logo d-flex align-items-center justify-content-center">
                <img src="assets/images/logo_light.png" alt="SemlyAI logo">
            </div>
            <div class="login-content">
                <h1 class="mb-3">Captcha SemlyAI</h1>

                <form method="post" action="<?= ROOT ?>/captcha/check_captcha">
                    <div class="form-floating mb-2">
                        <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Enter Captcha" required>
                        <label for="captcha">Enter Captcha</label>
                        <div class="form-group">
                            <img style="width:100%;margin-top: 10px;" src="<?= ROOT ?>/captcha/create_captcha" alt="Captcha">
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary btn-custom" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= ROOT ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>