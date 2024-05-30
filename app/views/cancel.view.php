<?php include 'includes/header.view.php'; ?>
<?php include 'includes/navbar.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/styles.css">
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/cancel.css">
</head>

<body>

    <div class="mx-auto col-md-4 shadow m-4 p-4 border rounded text-center">
        <h1>Your order has been cancelled</h1>
        <p>
            Your order has been cancelled.<br> You will be redirected to the home page in 2 seconds.
            <?php header("refresh:2;url=http://localhost/codey/public/home"); ?>
        </p>
    </div>

    <?php include 'includes/footer.view.php'; ?>