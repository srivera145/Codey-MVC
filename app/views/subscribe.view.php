<?php include 'includes/header.view.php'; ?>
<?php include 'includes/navbar.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/subscribe.css">
</head>

<body>
    <div class="plans-container">
        <h2 class="plans">Codey MVC Subscription Plans</h2>
    </div>
    <br>
    <div class="columns">
        <ul class="price">
            <li class="header">Basic</li>
            <li class="grey">$ 25.00 / month</li>
            <li>No Appointment Fees!</li>
            <li>Free Subscription to Weekly newsletter!</li>
            <li>Free One on One Help with the OMMU Website!</li>
            <br>
            <br>
            <br>
            <li class="grey"><a href="basic" class="button">Subscribe</a></li>
        </ul>
    </div>

    <div class="columns">
        <ul class="price">
            <li class="header" style="background-color:#7fbd54">Pro</li>
            <li class="grey">$ 50.00 / month</li>
            <li>Everything that comes with the Basic Plan Plus:</li>
            <li>Free Invite to Monthly Seminar!</li>
            <li>Lorem ipsum dolor!</li>
            <li>Lorem ipsum dolor!</li>
            <li class="grey"><a href="pro" class="button">Subscribe</a></li>
        </ul>
    </div>

    <div class="columns">
        <ul class="price">
            <li class="header">Premium</li>
            <li class="grey">$ 75.00 / month</li>
            <li>Everything that comes with the Basic & Pro Plans Plus:</li>
            <li>Lorem ipsum dolor!</li>
            <li>Lorem ipsum dolor!</li>
            <li>Lorem ipsum dolor!</li>
            <li class="grey"><a href="premium" class="button">Subscribe</a></li>
        </ul>
    </div>

    <?php include 'includes/footer.view.php'; ?>