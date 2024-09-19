# Product Manager

A simple Laravel-based product management application that allows you to add, edit, and delete products in the database.

## Features

- **Add Products**: Easily add new products to the system with a name, price, and description.
- **Edit Products**: Update product details like name, price, or description.
- **Delete Products**: Remove products from the database with a single click.

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Theolin-Nadasen/product-manager-laravel.git
   cd product-manager-laravel

2. **Install dependancies**
    ```bash
    composer install
    npm install

3. **Set up the environment**
    - **Copy the .env.example file to .env.**
    - **Update your database credentials in the .env file**

4. **Generate Application Key and run migrations**
    ```bash
    php artisan key:generate
    php artisan migrate

5. **Run the application**
    ```bash
    php artisan serve


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
