<?php

$ses = new \Core\Session;

?>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="home"><img src="<?= ROOT ?> /assets/images/logo_light.png" style="width: 145px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="subscribe">Subscribe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
            </li>
            <?php if ($ses->is_logged_in()) : ?>
                <li class="nav-item dropdown float-end">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, <?= $ses->user('first_name') ?>
                    </a>
                    <ul class="dropdown-menu float-end">
                        <li><a class="dropdown-item" href="logout">Log Out</a></li>

                        <?php if ($ses->user('role') == 'admin') : ?>
                            <li><a class="dropdown-item" href="<?= ROOT ?>/admin">Admin</a></li>
                        <?php endif ?>
                    </ul>
    </div>
</nav>
<?php endif ?>