# Laravel-blog
A blog bulit with [laravel](https://laravel.com/).<br/>
Online view: [http://blog.magiclyde.me](http://blog.magiclyde.me)

## Install
1. cd path/to/laravel-blog
2. composer install
3. cp .env.example .env && config your settings
4. php artisan key:generate 
5. php artisan migrate
6. php artisan db:seed


> note: The bootstrap/cache & storage directory must be present and writable.

## More
### Disable registration
If you want to disable registration for new users, just edit **Auth\RegisterController.php** file and override the showRegistrationForm() with the following code:


    protected function showRegistrationForm()
    {
        return redirect()->to('login')->with('warning', 'Registration is disabled.');
    }

### Manually register a user 
Use **php artisan tinker** to open psy shell and add the following commands to create new user rather than via the auth registration page.
    
	$user = new App\User;
	$user->name = 'the-account';
    $user->email = 'the-email@example.com';
    $user->password = Hash::make('the-pass');
    $user->save();

## License
Free / Open sourced under the [MIT](https://github.com/magiclyde/laravel-blog/blob/master/LICENSE).