# laravel-livewire-dashboard
Reusable Laravel Livewire admin dashboard layout built with TailwindCSS and Flowbite.


## Features
- Responsive layout
- Component-based and easily customizable
- Authentication (Registration, Login, Reset password, and Profile Management) built with Jetstream
- Side Navbar
- Top Navbar
- Toast notification handler from Livewire component (To show success, error, or information messages after database update or for any event).


## Requirements:
- Requirements of Laravel 10.17.* and Livewire 3.*
- PHP composer
- NodeJs


## Steps to configure:
### Clone repository
```sh
git clone https://github.com/bantayehuf/laravel-livewire-dashboard.git
```
### Install dependencies
```sh
composer install
```
```sh
npm install
```
### Create configuration
- Create a .env file in the app root by copying the contents of the .env.example file. 
- Configure the database settings
- (Optional) Configure the mail settings, if you want to use email verification or send emails from your app.

### Migrate the database
```sh
php artisan migrate
```


## Now is the time to serve the system
### Start Laravel Dev server and asset bundler
```sh
php artisan serve
```
```sh
npm run dev
```

Please create your account and enjoy it!
