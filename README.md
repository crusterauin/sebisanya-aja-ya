# Sebisanya Aja Setup Project (SQLite)

```bash
## Clone project & install dependencies
git clone <repo-url>
cd sebisanya-aja-ya
composer install
npm install

## Copy file .env & generate application key
cp .env.example .env
php artisan key:generate

## Buat file SQLite
touch database/database.sqlite

## Jalankan migrasi
php artisan make:migration create_posts_table --create=posts
php artisan migrate

## Build frontend assets
npm run build

## Jalankan server Laravel
php artisan serve

## Akses project di browser
http://127.0.0.1:8000


## Contoh .env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite

SESSION_DRIVER=database
SESSION_LIFETIME=120

CACHE_STORE=database
QUEUE_CONNECTION=database
FILESYSTEM_DISK=local

MAIL_MAILER=log
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

VITE_APP_NAME="${APP_NAME}"
```
