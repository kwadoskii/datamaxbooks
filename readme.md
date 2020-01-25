<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Steps to Setup and Test this Project

This project was written in **Laravel** framework, using **MySql** as Database and **Xammp** as application server.

**NB:** Ensure you have internet access as some online CDN were used during the course of development and for the API endpoints that calls the external Ice And Fire API.


## Prequisities
- phpMyAdmin
- WAMP or XAMMP
- An existing database in MySql

## Setup Steps

- After downloading and extracting the zip file.
- Copy the Project folder and Host in it in your application server docroot.
- Download laravel vendor files [here](https://drive.google.com/open?id=14pABL1ZqUb4ccKTjlHZcie_BpjayyayI) , extract it and copy the vendor folder to the project folder. 
- Open the Project folder and locate the **.env.example** file rename this file to **.env**
- Open the .env file and locate the mysql connection details. Change the parameter according to your mysql Host, Port, Username and Password. Please use DB_DATABASE=Datamax. Set the parameter **APP_KEY** = **base64:ykAJSZOoPSMfKZNVK3D1IK6sm5VhavJsjRYGdoUy9/s=**  (NB: The = sign is part of the string) and save the file.
- Still on the Project folder, locate **datamax.sql** and run it on phpMyAdmin to create the database and the neccesary tables with dummy dataset.
- Now point the public folder of the project from your domain docroot EG: {domain}/datamaxbooks-master/public mine was http://127.0.0.1/datamaxbooks-master/public/
- The above step should bring you to the view showing first ten books from the database we configured earlier. 
- You can now go ahead to test the  front end and the API endpoints.
- The endpoints can be accesed like http://127.0.0.1/datamaxbooks-master/public/api/v1/books

- Thank you.

