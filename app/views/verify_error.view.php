<?php include 'includes/header.view.php'; ?>
<?php include 'includes/navbar.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/styles.css">
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/verify_error.css">
<link rel="icon" type="image/x-icon" href="<?= ROOT ?>/assets/images/favicon.ico">
</head>

<body>

    <div class="mx-auto col-12 mt-3 shadow m-4 p-4 border rounded text-center">
        <h1 class="text-center">Verification Failed</h1>
        <p class="text-center">Invalid verification token. Please try again.</p>
        <?= redirect('verify') ?>
    </div>

    <?php include 'includes/footer.view.php'; ?>