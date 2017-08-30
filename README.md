# laravel-blog
A blog bulit with laravel.

# Install
1. cd path/to/laravel-blog
2. cp .env.example .env && config your settings
3. composer install
4. php artisan key:generate 
5. php artisan migrate
6. php artisan db:seed

note: The bootstrap/cache & storage directory must be present and writable.