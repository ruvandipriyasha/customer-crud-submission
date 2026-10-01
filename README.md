# Customer Management CRUD Application

A simple Customer Management CRUD application built with Laravel and MySQL. The application allows users to create, view, update, and delete customer records through a clean and responsive web interface.

## Features

* Create new customer records
* View all customers
* View individual customer details
* Update customer information
* Delete customer records
* Server-side form validation
* Email format validation
* Duplicate email prevention
* Responsive Bootstrap user interface
* MySQL database integration

## Customer Fields

* Name
* Email
* Phone
* Address

## Technologies Used

* **Laravel 13**
* **PHP 8.5**
* **MySQL**
* **Blade**
* **Bootstrap 5**
* **HTML5**
* **CSS3**
* **JavaScript**
* **XAMPP**

## Laravel Concepts Used

* MVC architecture
* Eloquent ORM
* Resource Controllers
* Database Migrations
* Blade Templates
* Route Model Binding
* Form Validation
* Mass Assignment
* Named Routes
* CRUD Operations

## Project Structure

```text
customer-crud/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── CustomerController.php
│   └── Models/
│       └── Customer.php
├── database/
│   └── migrations/
│       └── create_customers_table.php
├── resources/
│   └── views/
│       └── customers/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
├── routes/
│   └── web.php
├── .env.example
├── artisan
├── composer.json
└── README.md
```

## Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/ruvandipriyasha/customer-crud.git
cd customer-crud
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the environment file

```bash
cp .env.example .env
```

On Windows PowerShell, you can also use:

```powershell
Copy-Item .env.example .env
```

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure the database

Create a MySQL database named:

```text
customer_crud
```

Then update the database settings in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=customer_crud
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run database migrations

```bash
php artisan migrate
```

### 7. Start the Laravel development server

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Validation

The application includes server-side validation for customer information.

Examples:

* Name is required
* Email is required
* Email must have a valid format
* Email must be unique
* Phone is optional
* Address is optional

## CRUD Operations

| Operation | Description                               |
| --------- | ----------------------------------------- |
| Create    | Add a new customer                        |
| Read      | View customer list and individual details |
| Update    | Edit existing customer information        |
| Delete    | Remove a customer record                  |

## Project Purpose

This project was developed as a practical Laravel CRUD application to demonstrate fundamental web application development skills, including MVC architecture, database integration, Eloquent ORM, routing, controllers, Blade views, and server-side validation.

## Author

**Ruvandi Priyasha**

HNDIT Undergraduate | Web Developer Intern

GitHub: https://github.com/ruvandipriyasha

