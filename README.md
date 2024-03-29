# Library Management System

## Description

This Library Management System is a web-based application that allows for efficient management of library operations. The system facilitates separate access levels for admins and users, ensuring secure and organized control over library resources.

## Features

-   **Admin Login**: Admins can log in to manage books, including adding, updating, and removing listings.
-   **User Login**: Users can log in to browse available books and borrow them. Access to certain views is restricted.
-   **Book Borrowing**: Books can be borrowed by users and will be marked as unavailable until returned.
-   **User History**: Users have a tab to view the history of their borrowed books.

## Middleware

The application uses middleware to handle authentication and authorization, providing a secure environment for both admins and users.

## Technologies Used

-   **Backend**: PHP with Laravel framework
-   **Testing**: Unittest for application testing

## Installation

Provide step-by-step instructions on how to get a development environment running.

```bash
# clone the repository
git clone https://github.com/AhmedGamal905/LibraryManagementSystem

# navigate to the project directory
cd library-management-system

# install dependencies
composer install

# run migrations
php artisan migrate

# start the server
php artisan serve

# run tests
php artisan test
```
