# RGOU Dashboard

A simple frontend for common diagnostic and management tools for a LAMP + MongoDB Server.

Tools included:

- [Adminer](http://adminer.org/): A Database Web Manager Tool - really good alternative to PHPMyAdmin (MySQL) and PHPPgAdmin (Postgresql) and other databases.
- [RockMongo](http://rockmongo.com/): A MongoDB Web Manager.
- [APC](http://www.php.net/manual/en/book.apc.php): APC Dashboard and default tool.
- [PHPSysInfo](http://rk4an.github.io/phpsysinfo/): PhpSysInfo: a customizable PHP script that displays information about your system nicely.
- [PHPInfo](http://www.php.net/manual/en/function.phpinfo.php): Default `phpinfo()` PHP command with nicer interface.

## Screenshot

![dashboard](https://raw.github.com/rafaelgou/php-server-dashboard/master/screenshot/php-server-dashboard.jpg "The Dashboard")

## Installation

### 1) Get the source 

Clone on a visible web directory (e.g. `/var/www`);

~~~ .bsh
cd /WEB_PATH/
git clone https://github.com/rafaelgou/php-server-dashboard.git
~~~

### 2) Secure the directory

Add a HTAccess user using (`/var/www/php-server-dashboard/` is a sample):

Be sure to use the correct path to `.htaccess` and `.htpasswd` file. 

~~~ .bsh
cd /WEB_PATH/
vim .htaccess
~~~

~~~ .bsh
AuthUserFile /WEB_PATH/.htpasswd
AuthGroupFile /dev/null
AuthName "PHP Server Dashboard"
AuthType Basic

<Limit GET POST>
require valid-user
</Limit>
~~~

Then add a user to access

~~~ .bsh
htpasswd -c .htpasswd admin
  New password: 
  Re-type new password: 
  Adding password for user admin
~~~

### Fix permissions

~~~ .bsh
chown -R www-data:www-data /WEB_PATH/php-server-dashboard
~~~

## Usage

Browse `http://YOUR-DOMAIN.COM/php-server-dashboard`, input your user/password and it's done!
