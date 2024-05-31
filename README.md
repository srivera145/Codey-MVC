Codey MVC Framework
Codey MVC is a lightweight PHP MVC framework designed to help developers quickly build web applications. This framework includes several built-in features and follows the MVC (Model-View-Controller) architectural pattern, making it easy to maintain and scale your applications.

Features
MVC Structure: A clear separation of concerns with Models, Views, and Controllers.
Database Management: Easy database handling with built-in migration and seeder functionality.
Authentication:
User email verification using PHPMailer.
Captcha support for enhanced security.
Subscription Payments: Integrated Stripe payments for managing subscriptions.
Email Capabilities: Full email support for various use cases.
Sample Code: Includes sample controllers, models, views, and migrations to help you get started quickly.
Directory Structure
csharp
Copy code
Codey/
├── App/
│   ├── codey/
│   │   ├── samples/
│   │   │   ├── controller-sample.php
│   │   │   ├── migration-sample.php
│   │   │   ├── model-sample.php
│   │   │   ├── sample.php
│   │   │   ├── seeder-sample.php
│   │   │   ├── view-sample.view.php
│   │   │   └── sample.css
│   │   ├── Codey.php
│   │   ├── Database.php
│   │   ├── init.php
│   │   └── Migration.php
│   ├── controllers/
│   ├── core/
│   │   ├── App.php
│   │   ├── config.php
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   ├── functions.php
│   │   ├── init.php
│   │   └── Model.php
│   ├── migrations/
│   ├── models/
│   └── views/
├── public/
│   ├── assets/
│   ├── .htaccess
│   └── index.php
└── codey
Getting Started
Requirements
PHP 7.4 or higher
Composer
MySQL
Installation
Clone the repository:

sh
Copy code
git clone https://github.com/srivera145/codey-mvc.git
Navigate to the project directory:

sh
Copy code
cd codey-mvc
Install dependencies:

sh
Copy code
composer install
Set up the environment:

Navigate to the core/config.php file and configure your environment variables.
Run migrations:

sh
Copy code
php codey migrate
Seed the database:

sh
Copy code
php codey seed
Start the development server:

sh
Copy code
php -S localhost:8000 -t public
Usage
Controllers: Handle the logic of your application.
Models: Represent the data structure and interact with the database.
Views: Display the output to the user.
Examples
Creating a Controller:

php
Copy code
<?php

namespace App\controllers;

use Codey\core\Controller;

class SampleController extends Controller
{
    public function index()
    {
        return $this->view('sample.view', ['message' => 'Hello, World!']);
    }
}
Creating a Model:

php
Copy code
<?php

namespace App\models;

use Codey\core\Model;

class SampleModel extends Model
{
    protected $table = 'samples';

    public function getAllSamples()
    {
        return $this->all();
    }
}

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
