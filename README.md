# Sebisanya Aja 🚀

### Setup Project

#### 1. Clone project
git clone <repo-url>
cd sebisanya-aja

#### 2. Install dependency backend
composer install

#### 3. Install dependency frontend
npm install

#### 4. Copy file .env
cp .env.example .env

#### 5. Generate application key
php artisan key:generate

#### 6. Atur database di file .env (kalau pakai MySQL misalnya)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sebisanya
DB_USERNAME=root
DB_PASSWORD=yourpassword

#### 7. Buat database kosong sesuai nama di atas
(manual lewat phpMyAdmin / CLI)

#### 8. Buat file migrasi untuk tabel posts
php artisan make:migration create_posts_table --create=posts

#### 9. Jalankan migrasi untuk membuat tabel
php artisan migrate

####10. Build frontend assets (WAJIB)
npm run build

#### 11. Jalankan server Laravel
php artisan serve

#### 12. Akses project di browser
http://127.0.0.1:8000

---

## .env Example

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sebisanya
DB_USERNAME=root
DB_PASSWORD=

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
