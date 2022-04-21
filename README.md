# HulkApps
Practical Assessment

How to deploy the project.
1) Xampp Server is required for running this project. Make sure it is installed in the system, else you can download it from here : https://www.apachefriends.org/download.html
2) Now, download the zip folder and unzip it the following location: C:\Xampp\htdocs.
3) Serach for 'Xampp Control Panel' in your machine and start the 'Apache' as well as 'the sql'.
4) Now, type localhost in your browser and open 'phpmyadmin'.
5) Create a new database with name 'hulkapps' and import the sql file 'hulkapps.sql' present inside the following location : C:\Xampp\htdocs\hulkapps\database.
6) Open the project folder using any code editor and check .env file for the credentials. If required makes changes in the same.
7) Now, open cmd and go to the laction of the project folder and execute the following command : php artisan serve
8) On visiting the link, you will be able to access the project. 
9) Also, please add a google account in .env file before sending the forget password link. I have comleted the setup for the same. Find the screenshot of the mail in 
C:\Xampp\htdocs\hulkapps\forgot_password.

Tech Stack Used :
1) Frontend : HTML, CSS, JAVASCRIPT, BOOTSTRAP, JQUERY, AJAX
2) Backend : PHP -v 7.3, LARAVEL -v 8.75
3) External Libraries : Font Awesome for icons, Notify.Js

My Approach:
As per the instructions mentioned in the file, I was clear on what modules to be created and what will be the flow of the website be like. I started of by using a template and re creating it as per my convience for more attractive application. Then, I started working with the Login/Registration module first followed by Blogging Module, Comment Module and lastly pagination. I have used query String Builders for interaction with the Database. 

Time Taken:
It took me 2 and a half days for completing the eniter project.

Things Left:
Though I have covered all the points mentioned in the assesment rules, I could not complete the adding 'Tags' point in the blogs due to the deadline. But I assure you, I am very much aware about how to create, add and filter the blogs according to the tags. Apart from this one "Tags" point, everthing else is completed.



