CSC322-BookMarket
=================
In order to have this web-based application to work, you have to download <a href="https://www.apachefriends.org/index.html">xammp</a>.

After start both Apache and MySQL in XAMPP Control Panel,You need to go to browser, type "localhost/phpmyadmain" into address.

Create a new user with following info:
	name: csc322
	password: 123
	Check all of the following:
		Create database with same name and grant all privileges.
		Grant all privileges on wildcard name (username\_%).
		Global privileges: Check All 

Then, create following tables on database: csc322,

		create table users(
			user_id int(11) primary key, -- set this to "auto increment"
			username varchar(32) not null,
			password varchar(32) not null,
			first_name varchar(32) not null,
			last_name varchar(32),
			email varchar(1024) not null,
			active int(11) not null -- set this "as define: 0"
		);

		create table books(
			book_id int(11) primary key, -- set this to "auto increment"
			title varchar(32) not null,
			author varchar(32) not null,
			genre varchar (32) not null,
			price real not null,
			book_condition varchar(32) not null,
			book_cover varchar(1024),
			rating int(11)
		);


After that, Clone this folder under /opt/lampp/htdoc folder.
