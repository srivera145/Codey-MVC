<?php

use Stripe\Terminal\Location;

 include 'includes/header.view.php'; ?>
<?php include 'includes/navbar.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/styles.css">
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/verify_success.css">
<link rel="icon" type="image/x-icon" href="<?= ROOT ?>/assets/images/favicon.ico">
</head>

<body>

    <div class="mx-auto col-12 mt-3 shadow m-4 p-4 border rounded text-center">
        <h1 class="text-center">Account Verified</h1>
        <p class="text-center">Your account has been successfully verified.<br> You will be redirected to the log in page...</p>
        <!-- redirect to home page after two seconds -->
        
        <?php header("refresh:2;url=" . ROOT . "/login"); ?>
    </div>
    <?php include 'includes/footer.view.php'; ?>