<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




# CCU Website

This is a Laravel-based web application for the **Centre Catholique Universitaire (CCU)**, built using **Tailwind CSS** and **JavaScript**. This project does not use a database.

## Features
- Laravel framework
- Vite for asset bundling
- Tailwind CSS for styling
- JavaScript for frontend interactivity
- No database

## Prerequisites
Before running this project, ensure that you have the following installed:
- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js & npm](https://nodejs.org/en/)
- [Git](https://git-scm.com/)

## Installation

Follow these steps to get the project up and running:

### 1. Clone the Repository

```bash
git clone https://github.com/mr-tchounga/ccu_website.git
cd ccu_website
```

### 2. Install PHP Dependencies

Install Laravel and other PHP dependencies using Composer:

```bash
composer install
```

If you don't have Composer installed, follow [this guide](https://getcomposer.org/doc/00-intro.md) to install it.

### 3. Install Node Dependencies

You will need to install the required JavaScript packages, including **Tailwind CSS** and **Vite** for compiling assets:

```bash
npm install
```

### 4. Compile CSS and JavaScript

You can now compile the frontend assets (CSS and JS) with Vite:

```bash
npm run dev
```

Alternatively, you can run:

```bash
npm run build
```
To compile assets for production.

### 5. Set Application Key

Generate the application key:

```bash
php artisan key:generate
```

### 6. Serve the Application

You can serve the application locally using the built-in Laravel server:

```bash
php artisan serve
```

The website will now be accessible at `http://localhost:8000`.

## Additional Information

### Vite Configuration

Vite is used for bundling the assets. If you face issues while running the `npm` or `composer` commands, ensure that Vite is correctly installed and integrated with Laravel. You can find more details about Vite in the [official documentation](https://laravel.com/docs/10.x/vite).

### Tailwind CSS

Tailwind CSS is used for styling the front end. You can modify styles in the `resources/css` directory. Ensure that any changes are recompiled using:

```bash
npm run dev
```

### Composer Command Support

If you run into any issues where Composer commands (like `composer install`) fail, ensure that Composer is correctly installed and available globally in your environment. You can check this with:

```bash
composer --version
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).