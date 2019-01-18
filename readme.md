<h1 align="center">Hotel Room Booking Management System</h1>

## How To Run This Project

<p><b> Step - 1 :- </b> Download or clone this project from this repository . </p>

<p><b> Step - 2 :- </b> Go to your directory where your downloaded or cloned project is located . Open your terminal there . Gitbash termninal is preferred . Now run this command :- </p>

```
composer install 
```

<p><b> Step - 3 :- </b> Then run this command in your terminal :-  </p>

```
cp .env.example .env ( if using gitbash )
copy .env.example .env ( if using windows command prompt )
```

<p><b> Step - 4 :- </b> Now create a database named hotelbook in your phpmyadmin . </p>

<p><b> Step - 5 :- </b> Now open .env file and configure it like this  </p>

```
DB_DATABASE=hotelbook
DB_USERNAME=root
DB_PASSWORD= 
```

<p><b> Step - 6 :- </b> Then run this command in your terminal :-  </p>

```
php artisan key:generate
```

<p><b> Step - 7 :- </b> Then run this command in your terminal :-  </p>

```
php artisan migrate
```

<p><b> Step - 8 :- </b> Then run this command in your terminal :-  </p>

```
php artisan db:seed 
```

<p><b> Step - 9 :- </b> Now run this command in your terminal :-  </p>

```
php artisan serve
```
Now copy that localhost link and paste it in your browser .

<p><b> Step - 10 :- </b> Now to access the admin account go to /admin/login and log in with password "123" and email "admin@gmail.com" </p>
<br>


