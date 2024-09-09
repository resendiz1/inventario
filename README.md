Se necesita un gesto de bd ya sea 
- Laragon, XAMPP, etc.
- Composer


git clone
composer install
cp .env.example .env
php artisan key:generato
php artisan migrate --seed
