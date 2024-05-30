        
        <style>
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                line-height: 30px;
                background-color: #f5f5f5;
            }
        </style>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div>&copy; <?php echo date("Y"); ?> <?= APP_NAME ?></div>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline text-right">
                            <li class="list-inline-item"><a class="text-decoration-none" href="home">Home</a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="about">About</a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="subscribe">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?= ROOT ?>/assets/js/bootstrap.min.js"></script>
    </body>
    </html>