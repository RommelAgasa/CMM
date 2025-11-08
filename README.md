# CMM (Client Management Module)

This is a Laravel-based client management system that provides API endpoints for managing client information.

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM (for frontend assets)

## Project Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/RommelAgasa/CMM.git
   cd CMM
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Then edit `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database Setup**
   ```bash
   php artisan migrate
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```
   In a separate terminal:
   ```bash
   npm run dev
   ```

## API Endpoints

- GET `/api/clients` - Get all clients
- POST `/api/clients` - Create a new client
- GET `/api/clients/{id}` - Get a specific client
- PUT `/api/clients/{id}` - Update a client
- DELETE `/api/clients/{id}` - Delete a client

## Project Structure

- `app/Models/Client.php` - Client model
- `app/Http/Controllers/` - Contains all controllers
- `app/Repositories/` - Repository pattern implementation
- `app/Services/` - Business logic layer
- `app/Interfaces/` - Interface definitions
- `database/migrations/` - Database migrations

## Assumptions

1. The system uses Laravel's built-in authentication system
2. Database is MySQL/MariaDB
3. Client data includes standard fields as defined in the migrations
4. API responses are in JSON format
5. Frontend will be built separately and will consume these APIs

## Testing

To run the tests:
```bash
php artisan test
```

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
