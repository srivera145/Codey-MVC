# Codey MVC Framework

Codey MVC is a lightweight PHP MVC framework designed for developers to create robust and scalable web applications. This framework comes with built-in features to streamline the development process.
You can also get help learning how to use Cody with the Codey MVC GPT Assisant at: https://chatgpt.com/g/g-gTAQk5vWg-codey-assistant

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

## Installation

1. Clone the repository: `git clone https://github.com/srivera145/codey-mvc.git`
2. Navigate to the project directory: `cd your-repo`
3. Install dependencies: `composer install`
4. Navigate to `codey/core/config.php` and change the required variables

## Codey CLI Commands

Usage: php codey [command] [options]

    Commands
      help               Displays this help message.
      serve              Starts the built-in PHP server.
      make:controller    Generates a new controller file.
      make:model         Generates a new model file.
      make:view          Generates a new view file.
      make:migration     Generates a new migration file.
      make:seeder        Generates a new seeder file.
      migrate            Locates and runs a migration file.
      migrate:refresh    Runs the 'down' & then 'up' method for a migration file.
      migrate:rollback   Runs the 'down' method for a migration file.
      list:migrations    Displays all migration files available.
      list:controllers   Displays all controllers available.
      list:models        Displays all models available.
      list:views         Displays all views available.
      db:create          Create a new database schema.
      db:seed            Runs the specified seeder to populate known data into the database.
      db:table           Retrieves information on the selected table.
      db:drop            Drop/Delete a database.
      version            Displays the current version of Codey.
      about              Displays information about Codey.
      clear              Clears the screen.
      exit               Exits the Codey CLI.
      quit               Exits the Codey CLI.

    Examples
        php codey make:controller HomeController
        php codey make:model User
        php codey make:view home
        php codey make:migration create_users_table
        php codey make:seeder UsersTableSeeder
        php codey migrate
        php codey migrate:refresh
        php codey migrate:rollback
        php codey list:migrations
        php codey list:controllers
        php codey list:models
        php codey list:views
        php codey db:create
        php codey db:seed
        php codey db:table users
        php codey db:drop
        php codey serve

## Contributing

Contributions are welcome! Please fork the repository and submit pull requests.

## License

This project is licensed under the [MIT License](LICENSE).
