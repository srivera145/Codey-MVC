<?php include 'includes/header.view.php'; ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/signup.css">
<script src="https://kit.fontawesome.com/3813eddddc.js" crossorigin="anonymous"></script>
</head>

<body>

	<body>
		<div class="container signup-container">
			<div class="signup-card">
				<div class="signup-logo d-flex align-items-center justify-content-center">
					<img src="<?= ROOT ?>/assets/images/logo_light.png" alt="SemlyAI logo">
				</div>
				<div class="signup-content">
					<h1 class="mb-3">Sign Up for SemlyAI</h1>

					<?php $signup = $user->getError('first_name') || $user->getError('last_name') || $user->getError('email') || $user->getError('password') || $user->getError('password2') ?>

					<?php if ($signup) : ?>
						<div class="alert alert-danger" role="alert">There was an error with your submission. Please check the form and try again. Please check the following errors below:
							<ul></ul>
							<?php if ($user->getError('first_name')) : ?>
								<li><?= $user->getError('first_name') ?></li>
							<?php endif; ?>
							<?php if ($user->getError('last_name')) : ?>
								<li><?= $user->getError('last_name') ?></li>
							<?php endif; ?>
							<?php if ($user->getError('email')) : ?>
								<li><?= $user->getError('email') ?></li>
							<?php endif; ?>
							<?php if ($user->getError('password')) : ?>
								<li><?= $user->getError('password') ?></li>
							<?php endif; ?>
							<?php if ($user->getError('password2')) : ?>
								<li><?= $user->getError('password2') ?></li>
							<?php endif; ?>
							</ul>
						</div>
					<?php endif; ?>

					<form method="post">
						<div class="form-floating mb-2">
							<input value="<?= old_value('first_name') ?>" type="text" name="first_name" class="form-control" placeholder="First name" required>
							<label for="first_name">First Name</label>
						</div>
						<div class="form-floating mb-2">
							<input value="<?= old_value('last_name') ?>" type="text" name="last_name" class="form-control" placeholder="Last name" required>


							<label for="last_name" style="color: black;">Last Name</label>

						</div>
						<div class="form-floating mb-2">
							<input value="<?= old_value('email') ?>" type="email" name="email" class="form-control" placeholder="Email" required>


							<label for="email">Email</label>

							<small id="emailHelp" class="form-text">*We'll never share your email with anyone else.</small>
						</div>
						<div class="form-floating mb-2">
							<input value="<?= old_value('password') ?>" type="password" name="password" class="form-control" placeholder="Password" required><i class="fa-solid fa-eye"></i>


							<label for="password">Password</label>

						</div>
						<div class="form-floating mb-2">
							<input value="<?= old_value('password2') ?>" type="password" name="password2" class="form-control" placeholder="Retype Password" required>


							<label for="password2">Confirm Password</label>
							<i id="eye2" class="fa-solid fa-eye"></i>
						</div>

						<button type="submit" class="btn btn-primary btn-custom w-100">Sign Up</button>
					</form>
					<div class="link-secondary mt-3">
						<p>Already have an account? <a href="login">Log In</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- add JavaScript to show password -->
		<script src="<?= ROOT ?>/assets/js/show_password_signup.js"></script>

		<script src="<?= ROOT ?>/assets/js/bootstrap.min.js"></script>
	</body>

	</html>