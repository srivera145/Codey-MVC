<?php include 'includes/header.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/welcome.css">
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
    <div class="card-custom text-center">
        <div class="card-logo">
            <img src="assets/images/logo_light.png" alt="SemlyAI logo">
        </div>
        <div class="card-body">
            <h1>Welcome to SemlyAI</h1>
            <div class="list-group">
                <a href="signup" class="btn btn-custom">Sign Up</a>
                <a href="login" class="btn btn-custom">Log In</a>
            </div>
        </div>
    </div>

    <script src="<?= ROOT ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>