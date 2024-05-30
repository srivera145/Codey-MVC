<?php include 'includes/header.view.php'; ?>
<?php include 'includes/navbar.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/styles.css">
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/success.css">
</head>

<body>

    <div class="mx-auto col-md-4 m-1 p-3 text-center">
        <card>
            <h1>
                Thank You for your Subscription! <br>
                Your monthly subscription is active!
            </h1>

            <p>
                We appreciate your time!
                If you have any questions, please email: admin@semlyai.com
            </p>

            <?php header("refresh:2;url=http://localhost/codey/public/home"); ?>
        </card>
    </div>

    <?php include 'includes/footer.view.php'; ?>