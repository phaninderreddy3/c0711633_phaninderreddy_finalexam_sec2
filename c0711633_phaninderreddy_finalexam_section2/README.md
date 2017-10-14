### ATS ONLINE TEST 

### Requirement 

Using PHP, MySQL, HTML/CSS, Javascript, MVC design pattern, write a login / register application.

### Setup 

1) Pull the repository into your root folder.

      $ git clone https://github.com/alojo/ATS.git

2) Modify connection file to change your database settings.

      Open connection.php file
      Change following db settings to your settings:
         const DBHOST = 'localhost';  
         const DBUSER = 'root';
         const DBPASS = '';
         const DBNAME = 'ATS2';  [** PLEASE change DBNAME to 'ats' here]

3) Run schema file users.sql to create database 'ats' with one empty table 'users'

      $ mysql -e "source users.sql"         
      
      ** Remember to match dbase name with the name used in connection file.

## Done

   Now open your browser and visit `localhost/mvc_login_reg_app`, you will see the home page.

   Play around by clicking login, register, home links provided

## Solution

   This project is totally following the MVC pattern. No use of any framework at this point to save time.

   Front end uses Bootstrap for CSS

   No Javascript used. Can use to make it better

## Directories and File Structure 

                  mvc_login_reg_app
                  │
                  ├── controllers
                  │   ├── pages_controller.PHP
                  │   └── users_controller.PHP
                  ├── models
                  │   └── user.php
                  ├── views
                  │   └── pages
                  │   │  ├── errors.php
                  │   │  └── home.php
                  │   └── users
                  │    │  ├── login.php
                  │    │  └── register.php
                  │    └── layout.php
                  │    └── navigation.php
                  ├── connection.php    
                  ├── index.php
                  └── routes.php

## Explanations

      mvc_login_reg_app                   [main folder under web root]
            controllers/                  [controller folder with two files interacting with View and Model]        
                  controllers/pages_controller.php
                  controllers/users_controller.php
      
      models/                             [The M of MVC for business logic and data manipulation]
            models/user.php               [All Interactions with user oblect (table) in the database]
      
      views/                              [The V of MVC handling all the renders on the browser]
            views/pages
                  views/pages/errors.php
                  views/pages/home.php
      
            views/users
                  views/users/login.php
                  views/users/register.php
           
            views/layout.php
            views/navigation.php
      
      connections.php                     [The database connection]
      index,php                           [The area through with all requests passes]
      routes.php                          [Routing is handled here]

## Conclusion

   This project is very simple, demonstrating the right  use of MVC design pattern without use of any framework
   
