##Laravel 4 - Başlagıç Kiti

Laravel 4 için başlangıç kitidir. Nasıl yapılacağına dair örnek olması için harika bir pakettir. ( thnx https://github.com/liamr/laravel-4-starter )

-----

##İçinde Kullanılanlar

* Twitter Bootstrap 2.3.0
* jQuery 1.9.1
* Custom CLI Installer
* Özel hata sayfaları:
	* 403 for forbidden page accesses
	* 404 for not found pages
	* 500 for internal server errors
* Cartalyst Sentry 2 for Authentication and Authorization [Sentry 2](https://github.com/cartalyst/sentry)
* Back-end
	* Kullanıcı ve grup yönetimi (User and Group management)
	* Blog ve Yazı yönetimi ( Manage blog posts and comments )
* Front-end
	* Kullanıcı yönetimi ( User login, registration, forgot password )
	* Kullanıcı hesabı alanı ( User account area )
	* Basit blog fonksiyonları ( Simple Blog functionality )
* Packages included:
	* [Cartalyst Sentry 2](https://github.com/cartalyst/sentry)
	* [Jason Lewis Expressive Date](https://github.com/jasonlewis/expressive-date)
	* [Opauth](https://github.com/opauth/opauth)

-----

##Vagrant nasıl çalıştırılır

 - Look at instructions in the puppet folder for more, but the basics go:

 - 1. `vagrant up`

##Laravel 4 Başlangıç kiti nasıl kurulur

###1) İndirerek
####1.1) Clone the Repository

	git clone http://github.com/brunogaspar/laravel4-starter-kit your-folder

####1.2) Repoyu indirerek

	https://github.com/brunogaspar/laravel4-starter-kit/archive/master.zip

-----

###2) Composer ile bağımlılıkları yüklemek ( Install the Dependencies via Composer )
#####2.1) If you don't have composer installed globally

	cd your-folder
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

#####2.2) For globally composer installations

	cd your-folder
	composer install

-----

###3) Setup Database

Now that you have the Laravel 4 cloned and all the dependencies installed, you need to create a database for it.

After the database is created, open the file `app/config/database.php` and update the needed entries, just like in Laravel 3.

-----

###5) Use custom CLI Installer Command

Now, you need to create yourself a user and finish the installation.

Use the following command to create your default user, user groups and run all the necessary migrations automatically.

	php artisan app:install

-----

###6) Opauth Configuration for user authentication via Facebook (or any other supported authentication providers by Opauth)
1. Create a Facebook application at https://developers.facebook.com/apps/
   - Remember to enter App Domains
   - "Website with Facebook Login" must be checked, but for "Site URL", you can enter any landing URL.
2. Open the file `app/config/opauth.php` and update it with at least `App ID` and `App Secret`.

-----

###6) Accessing the Administration

To access the administration page, you just need to access `http://your-host/public/admin` on your browser and it will automatically redirect you to the login page, in the login page, just fill in and submit the form.

After you being authenticated, you will be redirected back to the administration page.

-----

Have fun :)


