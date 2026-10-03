# Customer Management CRUD Application

A simple Customer Management CRUD web application built using Laravel and MySQL. This project demonstrates the implementation of Create, Read, Update, and Delete operations with server-side form validation and a responsive user interface.

## Features

* Add new customer records
* View all customers
* View individual customer details
* Edit customer information
* Delete customer records
* Server-side form validation
* Required field validation
* Email format validation
* Duplicate email prevention
* Responsive user interface
* MySQL database integration
* Bootstrap 5 user interface

## Customer Information

The application manages the following customer details:

* Name
* Email
* Phone
* Date of Birth
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

* MVC Architecture
* Eloquent ORM
* Resource Controllers
* Database Migrations
* Blade Templates
* Route Model Binding
* Server-Side Form Validation
* Mass Assignment
* Named Routes
* CRUD Operations

## Project Structure

```text
customer-crud-submission/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── CustomerController.php
│   └── Models/
│       └── Customer.php
│
├── database/
│   └── migrations/
│       └── 2026_10_01_193224_create_customers_table.php
│
├── resources/
│   └── views/
│       └── customers/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.md
```

## Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/ruvandipriyasha/customer-crud-submission.git
cd customer-crud-submission
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the environment file

On Windows PowerShell:

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

* Name is required
* Name must be a string
* Email is required
* Email must have a valid format
* Email must be unique
* Phone is optional
* Address is optional

Validation errors are displayed on the customer forms when invalid data is submitted.

## CRUD Operations

| Operation  | Description                                            |
| ---------- | ------------------------------------------------------ |
| **Create** | Add a new customer                                     |
| **Read**   | View the customer list and individual customer details |
| **Update** | Edit existing customer information                     |
| **Delete** | Remove a customer record                               |

## Application Flow

```text
Customer List
      │
      ├── Add Customer
      │       └── Create Customer
      │
      ├── View
      │       └── Customer Details
      │
      ├── Edit
      │       └── Update Customer
      │
      └── Delete
              └── Remove Customer
```

## Project Purpose

This project was developed as a practical Laravel CRUD application to demonstrate fundamental web application development skills, including MVC architecture, routing, controllers, Blade templates, database migrations, Eloquent ORM, MySQL database integration, and server-side validation.

## Author

**Ruvandi Priyasha**

HNDIT Undergraduate | Web Developer Intern

GitHub:
https://github.com/ruvandipriyasha

Project Repository:
https://github.com/ruvandipriyasha/customer-crud-submission
