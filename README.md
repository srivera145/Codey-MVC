# Codey MVC Framework

Codey MVC is a lightweight PHP MVC framework designed for developers to create robust and scalable web applications. This framework comes with built-in features to streamline the development process.

## Features

### User Authentication
Codey MVC includes a complete user authentication system. It supports user registration, login, password recovery, and user role management.

### CAPTCHA Integration
The framework integrates CAPTCHA to enhance the security of your forms. This helps in preventing spam and automated submissions.

### Email Verification
To ensure the authenticity of registered users, Codey MVC includes an email verification system using PHPMailer. New users receive a verification email to confirm their email addresses.

### Email Capabilities
Built-in email capabilities using PHPMailer allow you to send emails directly from your application. This can be used for notifications, newsletters, or any other email communications.

### Subscription Payments with Stripe
Codey MVC supports subscription-based payments through Stripe. Easily integrate payment processing into your application for subscription services.

### Database Migrations
Manage your database schema with ease using Codey MVC's migration system. Create, modify, and rollback database changes efficiently.

### MVC Structure
The framework follows the Model-View-Controller (MVC) pattern, promoting organized and maintainable code.

### Template Engine
A simple yet powerful templating engine allows you to separate your logic from your presentation.

### Sample Code
The framework includes sample code for controllers, models, migrations, and views to help you get started quickly.

## Directory Structure
`codey/
├── App/
│ ├── controllers/
│ ├── core/
│ ├── migrations/
│ ├── models/
│ ├── views/
│ ├── codey/
│ │ ├── samples/
│ │ │ ├── controller-sample.php
│ │ │ ├── migration-sample.php
│ │ │ ├── model-sample.php
│ │ │ ├── sample.php
│ │ │ ├── seeder-sample.php
│ │ │ ├── view-sample.view.php
│ │ │ ├── sample.css
│ │ ├── Codey.php
│ │ ├── Database.php
│ │ ├── init.php
│ │ ├── Migration.php
│ ├── core/
│ │ ├── App.php
│ │ ├── config.php
│ │ ├── Controller.php
│ │ ├── Database.php
│ │ ├── functions.php
│ │ ├── init.php
│ │ ├── Model.php
├── public/
│ ├── assets/
│ │ ├── vendor/
│ │ │ ├── stripe/
│ ├── .htaccess
│ ├── index.php
├── codey`

## Installation

1. Clone the repository: `git clone https://github.com/srivera145/codey-mvc.git`
2. Navigate to the project directory: `cd your-repo`
3. Install dependencies: `composer install`
4. Navigate to `codey/core/config.php` and change the required variables

## Usage

1. Run the application: `php -S localhost:8000 -t public`
2. Open your browser and visit `http://localhost/codey/public`

## Contributing

Contributions are welcome! Please fork the repository and submit pull requests.

## License

This project is licensed under the [MIT License](LICENSE).
