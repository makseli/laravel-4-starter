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
####1.1) Repo kopyalarak ( Clone the Repository )

	git clone git@github.com:makseli/laravel-4-starter.git

####1.2) Repoyu indirerek

	https://github.com/makseli/laravel-4-starter/archive/master.zip

-----

###2) Composer ile bağımlılıkları yüklemek ( Install the Dependencies via Composer )
#####2.1) Eğer composer yüklü değilse ( If you don't have composer installed globally )

	cd your-folder
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

	#####2.2) composer global kullanım (http://blog.mustafaakseli.com/programlama/composer-i-genel-olarak-kullanmak-icin-linux-win) için tanımlandıysa ( For globally composer installations )

	cd your-folder
	composer install

-----

###3) Veritabanı Ayarı ( Setup Database )

Şuan bu projeyi kopyalayıp, bağımlılıkları kurduk ve veritabanı oluşturup kullanmaya geldi sıra. ( Now that you have the Laravel 4 cloned and all the dependencies installed, you need to create a database for it. )

Veritabanınızı oluşturduktan sonra, `app/config/database.php` dosyanızı güncelleyin. Veritabanına bağlı olduğunuzdan emin olun.

-----

###5) Komut satırı kullanarak kurmak ( Use custom CLI Installer Command )

Aşağıdaki komutu girince sizden kullanıcı bilgilerinizi isteyecek. 

	php artisan app:install

-----

###6) Opauth 'u kullanmak için Facebook, Twitter veya diğer "auth" sağlayan servislerin size özel tanımlamalarını yapmalısınız ( Opauth Configuration for user authentication via Facebook or any other supported authentication providers by Opauth )
1. Örneğin facebook için https://developers.facebook.com/apps/ adresinden kayıt olup, auth için kullanacağınız bilgileri almalısınız. (Create a Facebook application at https://developers.facebook.com/apps/ )
   - Projede kullanacağınız domaini girmeyi unutmayın ( Remember to enter App Domains )
   - "web sitesinden Facebook Login" alanını işaretli olmalıdır. ( "Website with Facebook Login" must be checked, but for "Site URL", you can enter any landing URL. )
2. `app/config/opauth.php` dosyanızı açın ve size verilen ( `App ID` `App Secret` gibi ) bilgileri girin. ( Open the file `app/config/opauth.php` and update it with at least `App ID` and `App Secret`. )

-----

###6) Yönetici sayfasına ulaşmak için

Tarayıcınızda URL alanına `http://your-host/public/admin` yazıp enter e basın. 5. adımdaki girdiğiniz bilgiler ile giriş yapın. Bu kadar ;)

( To access the administration page, you just need to access `http://your-host/public/admin` on your browser and it will automatically redirect you to the login page, in the login page, just fill in and submit the form. )


-----

Besmele çekerek başlayın :)


