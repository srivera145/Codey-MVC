# Codey MVC Framework

Codey MVC is a PHP MVC framework designed to be lightweight and easy to use.

## Features

- Simple and intuitive structure
- Captcha integration for form security
- User email verification for authentication
- Email capabilities for various notifications

## Directory Structure

- **codey** (root folder)
  - **App** folder
    - **codey**, **controllers**, **core**, **migrations**, **models**, **views** folders
    - **codey** folder contains:
      - samples folder
      - Codey.php
      - Database.php
      - init.php
      - Migration.php
    - samples folder contains:
      - controller-sample.php
      - migration-sample.php
      - model-sample.php
      - sample.php
      - seeder-sample.php
      - view-sample.view.php
      - sample.css
    - **core** folder contains:
      - App.php
      - config.php
      - Controller.php
      - Database.php
      - functions.php
      - init.php
      - Model.php
  - **public** folder
    - **assets** folder
    - .htaccess file
    - index.php file
  - codey file

## New Features

### Captcha Integration

Captcha has been integrated to enhance form security and prevent automated submissions. You can easily add Captcha to your forms by following the examples in the samples folder.

### User Email Verification

User email verification is now supported to ensure the authenticity of user registrations. When a user registers, they will receive an email with a verification link. They must click this link to verify their email address and activate their account.

### Email Capabilities

The framework now includes email capabilities, allowing you to send various types of emails such as:

- Registration confirmation
- Password reset
- Notifications

These features can be configured in the core configuration files. For detailed instructions, refer to the samples provided in the samples folder.

## Getting Started

1. **Installation**: Download and extract the Codey MVC framework.
2. **Configuration**: Update the configuration files in the core folder to match your environment.
3. **Run**: Access the application through your web server.

For detailed documentation and examples, please refer to the samples folder and the inline comments in the code.

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

Codey MVC is open-source and licensed under the MIT License.
