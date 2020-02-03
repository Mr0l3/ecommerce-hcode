# E-commerce Project

Project developed from scratch during the [PHP 7 Course](https://www.udemy.com/curso-completo-de-php-7/) available in Udemy's platform or in the website [HTML5dev.com.br](https://www.html5dev.com.br/curso/curso-completo-de-php-7).

Template used in the project [Almsaeed Studio](https://almsaeedstudio.com).

All the frameworks that are necessary are included in the repository, so no need to install them.

## Prerequisites

* XAMPP (For easier env setup);
* MySql WorkBench [optional];
* Composer - Dependencies Management;
* PHPMailer v5.2.22 - Framework for emails (preinstalled);
* Slim v2.0 - Routes framework (preinstalled);
* RainTpl v3.0.0 - Templates framework (preinstalled).
* HcodeBr DB - Database Management (preinstalled);
***

## Installing
How to get a development env running:

### [Installing XAMPP](https://www.apachefriends.org/download.html)

### [Installing composer](https://getcomposer.org/download/)

### Creating the composer.lock file
To create the composer.lock file, change to the project directory where the composer.json file is located with:
```
cd PATH_TO_YOUR_JSON_FILE
```
Then run:
```
composer install
```
### Set up database
After connecting to your database server. To create the database, run the db.sql file that is inside the "setting-files" directory with the command:
```
mysql> source PATH_TO_YOUR_SQL_FILE;
```
***
## Author

* **Henrique Dickel de Mello** - *Initial work* - [GitHub Profile](https://github.com/Mr0l3)
