<img width="1917" height="1016" alt="delete" src="https://github.com/user-attachments/assets/8ca482d3-cc1f-4cb6-a454-457399460876" /><img width="1918" height="1025" alt="getAllClient" src="https://github.com/user-attachments/assets/453760c9-9558-43da-9677-98086980e58c" /># CMM (Client Management Module)

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
    <img width="1918" height="1025" alt="getAllClient" src="https://github.com/user-attachments/assets/fae503b8-a419-457f-a669-da63d6402ce2" />
  
- POST `/api/clients` - Create a new client
    <img width="1918" height="995" alt="store" src="https://github.com/user-attachments/assets/1d6d3a0e-99ae-4bd2-9f4a-00b623cdb36b" />

- PUT `/api/clients/{id}` - Update a client
    <img width="1918" height="1022" alt="update" src="https://github.com/user-attachments/assets/3db6990e-7061-4ebd-b6da-fa481bcef99c" />

    
- DELETE `/api/clients/{id}` - Delete a client
    <img width="1917" height="1016" alt="delete" src="https://github.com/user-attachments/assets/cbb32cec-aba0-4034-9a54-a436d90a4d13" />


## Web (Filter Functionality)
- http://127.0.0.1:8000/
<img width="1918" height="976" alt="filter-all" src="https://github.com/user-attachments/assets/8da7f83a-6075-424a-8889-82e7ecbc4bcd" />
<img width="1918" height="970" alt="filter-active" src="https://github.com/user-attachments/assets/21a4da6b-6bae-4703-9fb4-9880d7212a3a" />
<img width="1918" height="967" alt="filter-inactive" src="https://github.com/user-attachments/assets/46dd7674-7290-47f1-b850-3def8b789fe7" />


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
