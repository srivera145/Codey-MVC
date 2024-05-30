<?php include 'includes/header.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/verify.css">
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/styles.css">
<link rel="icon" type="image/x-icon" href="<?= ROOT ?>/assets/images/favicon.ico">
</head>

<body>

    <div id="verify" class="col-6 p-2 shadow border rounded text-center">
        
            <h1 class="text-center">Verify Account</h1>
            <h2 class="text-center">You need to verify your account before going to the home page.</h2>
            <h3 class="text-center">Please click the button below to send a verification email to your email address.</h3>
            <form action="<?= ROOT ?>/verify/send_verification" method="post">
                <button type="submit" class="btn btn-primary">Send Verification Email</button>
            </form>
        
    </div>

    <?php include 'includes/footer.view.php'; ?>