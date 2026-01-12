# jodhana

A lightweight Laravel 9 starter project that integrates Vite + Vue for frontend assets. This repository provides a minimal, opinionated structure to bootstrap a Laravel application with modern frontend tooling.

Last updated: 2026-01-12 17:43:56 (UTC) by @ToshiJain15


## Tech stack

- PHP ^8.0.2
- Laravel 9.x
- Sanctum (API/token authentication)
- Vite + Vue 3 for frontend assets
- Node (for building assets)


## Quick project description

jodhana is intended as a small starter template for Laravel applications that need a simple API and a Vite-powered frontend. It includes the typical Laravel directories and example configuration for environment variables, database, and frontend tooling. The goal is to be minimal and opinionated so you can start building features quickly.


## Prerequisites

- PHP 8.0 or newer
- Composer
- Node.js (16+) and npm
- A database server (MySQL, PostgreSQL, SQLite, etc.)


## Installation (development)

1. Clone the repository:

   ```bash
   git clone https://github.com/ToshiJain15/jodhana.git
   cd jodhana
   ```

2. Install PHP dependencies with Composer:

   ```bash
   composer install
   ```

3. Copy the example environment file and configure environment variables (DB, MAIL, etc.):

   ```bash
   cp .env.example .env
   # then edit .env to set DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Run database migrations (and seeders if provided):

   ```bash
   php artisan migrate
   # optional: php artisan db:seed
   ```

6. Install Node dependencies and run the Vite development server:

   ```bash
   npm install
   npm run dev
   ```

7. (Optional) Serve the application with the built-in PHP server:

   ```bash
   php artisan serve --host=127.0.0.1 --port=8000
   ```


## Production build

- Build frontend assets for production:

  ```bash
  npm run build
  ```

- Cache configuration/routes for slightly better performance:

  ```bash
  php artisan config:cache
  php artisan route:cache
  ```


## API and usage

This repo includes a small API route at `/api/user` (see `routes/api.php`) which returns the authenticated user when using Sanctum token authentication.

### Available endpoints (example)

- GET /api/user — returns the authenticated user (requires authentication via Sanctum token)


### Authenticating with a personal access token (Sanctum) — example

This project is configured to use Laravel Sanctum for API token authentication. Below is a simple example showing how to create a personal access token (development only) and use it to call the example endpoint.

1. Create a test user and a personal access token using Tinker (development only):

   ```bash
   php artisan tinker
   >>> $user = \App\Models\User::factory()->create(['email' => 'user@example.com', 'password' => bcrypt('password')]);
   >>> $token = $user->createToken('api-token')->plainTextToken;
   >>> exit
   ```

   Note: save the printed `$token` value — it is the plain-text token to use in API requests.

2. Call the API using curl with the Bearer token:

   ```bash
   curl -H "Authorization: Bearer <YOUR_TOKEN>" http://127.0.0.1:8000/api/user
   ```

   You should receive a JSON response representing the user created in Tinker.

3. Example using fetch (browser / Node):

   ```js
   // Replace <YOUR_TOKEN> with the token from tinker
   fetch('http://127.0.0.1:8000/api/user', {
     headers: {
       'Authorization': 'Bearer <YOUR_TOKEN>',
       'Accept': 'application/json'
     }
   })
   .then(res => res.json())
   .then(data => console.log(data));
   ```

4. Example using axios:

   ```js
   import axios from 'axios';

   axios.get('http://127.0.0.1:8000/api/user', {
     headers: {
       Authorization: `Bearer <YOUR_TOKEN>`,
       Accept: 'application/json'
     }
   }).then(resp => console.log(resp.data));
   ```


Notes on Sanctum usage

- The above token-based approach uses Sanctum's personal access tokens (not SPA session cookies). Ensure `Laravel\Sanctum\SanctumServiceProvider` is installed and configured.
- For SPA authentication (cookie-based), you must configure stateful domains in `config/sanctum.php` and use the `/sanctum/csrf-cookie` endpoint followed by cookie-authenticated requests.


## Running tests

- Run PHPUnit (or Laravel's test runner):

  ```bash
  ./vendor/bin/phpunit
  # or
  php artisan test
  ```


## Troubleshooting

- If migrations fail, ensure your `.env` DB_* values are correct and the database exists.
- If Vite fails to start, verify Node and npm versions and that `node_modules` were installed.
- If Sanctum returns 401 for token calls, ensure:
  - The token was created and saved properly.
  - You are sending `Authorization: Bearer <token>` header.
  - You are calling the API on the correct host/port matching your app environment.


## Project structure (high level)

- app/ — Laravel application code (models, controllers, etc.)
- routes/ — route definitions (web.php, api.php)
- resources/ — frontend views, Vue components, CSS
- public/ — public assets and entry point


## Notes

- This repository includes example `.env.example`, `composer.json`, and `package.json` files. Adjust versions and packages as needed for your project.


## Contributing

Contributions are welcome. If you plan to add features or fix bugs, please:

1. Open an issue describing the change.
2. Create a branch for your work:

   ```bash
   git checkout -b feature/your-feature
   ```

3. Submit a pull request describing the changes and motivation.


## License

This repository does not include a license file. If you intend to make it open-source, add a `LICENSE` file (e.g. MIT) and reference it here.


## Contact

Open an issue if you need help or want to suggest changes.
