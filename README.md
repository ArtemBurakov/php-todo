**php-todo**
--

A simple todo CRUD example written in php using ajax requests.

**Requirements**

You need working Apache server and MySQL database.

**Using Todo**
--

**Setup MySQL**

Start by creating a todo table in your database

```mysql
CREATE TABLE IF NOT EXISTS todo (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    text varchar(255) NOT NULL,
    status smallint(6) NOT NULL,
    created_at int(11) NOT NULL,
    updated_at int(11) NOT NULL,
    PRIMARY KEY (id)
);
```

**Setup Project**

- clone project files to a server
- setup virtual host to web sub directory


**Database Credentials**

You will need to change some variable values in the `db-connect.php` file, that represent those of your own database. Change the following

```php
$servername = "localhost";
$username = "username";  // Your username
$password = "password";  // Your password
$database = "database";	// Your database name
```

**Contributing**

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.