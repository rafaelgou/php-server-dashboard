# RGOU Dashboard

A simple frontend for common diagnostic and management tools for a LAMP + MongoDB Server.

## Installation

### 1) Clone on a visible web directory

### 2) Secure the directory (optional)

Please add a HTAccess user using:
~~~ .bsh
htpasswd -c .htpasswd admin
  New password: 
  Re-type new password: 
  Adding password for user admin
~~~

And change permissions

~~~ .bsh
chown -R www-data:www-data /PATH_TO/rgou-dashboard
~~~
