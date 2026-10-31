# Raimen POS Laravel Eloquent

Raimen POS is a four-page Laravel application for IT0049 Technical Formative Assessment 6. The customer and user pages retrieve seeded database records through Eloquent models instead of static controller arrays.

## Features

- Customer and user database migrations
- Five seeded customer records and five seeded user records
- `Customer` and `User` Eloquent models
- Database-backed customer and user controllers
- Blade tables that display the retrieved records
- Automated feature tests for all four pages and both database tables

## Requirements

- PHP 8.2 or later
- Composer 2
- PHP SQLite extensions enabled

## Setup

1. Open a terminal in the project folder.
2. Install dependencies:

   ```powershell
   composer install
   ```

3. Create the environment file if it does not exist:

   ```powershell
   Copy-Item .env.example .env
   ```

4. Generate the application key:

   ```powershell
   php artisan key:generate
   ```

5. Follow the [Database setup](#database-setup) instructions below.

6. Start the application:

   ```powershell
   php artisan serve
   ```

7. Open `http://127.0.0.1:8000`.

## Database setup

This project uses SQLite. Confirm that the following line is present in `.env`:

```ini
DB_CONNECTION=sqlite
```

Create the database file if it does not exist:

```powershell
New-Item database/database.sqlite -ItemType File -ErrorAction SilentlyContinue
```

Clear any cached configuration, then create the tables and insert the sample records:

```powershell
php artisan config:clear
php artisan migrate --seed
```

Verify that every migration ran successfully:

```powershell
php artisan migrate:status
```

To completely reset the database and restore the sample records, use:

```powershell
php artisan migrate:fresh --seed
```

> **Warning:** `migrate:fresh` deletes every existing table and all of its data. Use it only when you intend to reset the database. Run the seeder only once unless you reset first, because the sample usernames are unique.

## Pages

- `/` - home page
- `/about` - database-backed MVC overview
- `/customers` - customer records
- `/users` - user records

## Database schema

- `customers`: `id`, `full_name`, `email`, `phone`, timestamps
- `users`: `id`, unique `username`, `full_name`, timestamps

The schema is defined by the migration files in `database/migrations`. Sample records are defined in `database/seeders/DatabaseSeeder.php`.

## Tests

Run the full test suite:

```powershell
php artisan test
```
