CSC322-BookMarket
=================
In order to have this web-based application to work, you have to download <a href="https://www.apachefriends.org/index.html">xammp</a>.

After start both Apache and MySQL in XAMPP Control Panel,You need to go to browser, type "localhost/phpmyadmain" into address.
<br>

Create a new user with following info:
<br>
	name: csc322
<br>
	password: 123
<br>

	Check all of the following:
	<ul>
		<li>Create database with same name and grant all privileges.</li>
		<li>Grant all privileges on wildcard name (username\_%).</li>
		<li>Global privileges: Check All </li>
	</ul>
	
Then, create following tables on database: csc322,

		create table users(
			user_id int(11) primary key,--auto-increment
			username varchar(32) not null,
			password varchar(32) not null,
			first_name varchar(32) not null,
			last_name varchar(32),
			email varchar(1024) not null,
			active int(11) not null -- set this "as define: 0"
		);

		create table books(
			book_id int(11) primary key, --auto-increment
			title varchar(32) not null,
			author varchar(32) not null,
			genre varchar (32) not null,
			price real not null,
			description varchar(1024) not null,
			book_condition varchar(32) not null,
			book_cover varchar(1024),
			rating int(11),
			owner int(11) REFERENCES users(user_id),
			sold tinyint(1) not null --set'AsDefine0'
		);


		CREATE table ratings (
		  id int(11) primary key,  --auto-increment
		  book_id int(11) NOT NULL,
		  rating int(11) NOT NULL,
		  user_id int(11) NOT NULL
		);

		create table comments(
			comment_id int(11) primary key, --auto-increment
			comment varchar(1024),
			book_id int(11) references books(book_id),
			user_name int(11) references users(first_name)
		);


After that, Clone <a href="https://github.com/Github-Minghui/CSC322-BookMarket.git">this</a> folder under /opt/lampp/htdoc folder.

------------------------------------------------------------------------------
Functionality
=============
login
	This function takes the username or email along with the password
	provide by the user to allow the user to acess their account.
______________________________________________________________________________
logout
	This function logs the user out from their page.  This functionality
	is for security purposes, so that other people cant abuse their account
	they away from their computer.
______________________________________________________________________________
register
	This function allows new users to become members of our site.  With the 
	inputs provide by the user the users information in our database so that
	we can log them in whenever they want to have access to the site.
______________________________________________________________________________
change password
	With the option to change the user password, users have an extra layer
	of security.  This allows them to change their password if they are 
	under suspicion that someone else is knowledable of their current
	password.
______________________________________________________________________________
protected
	This function does not allow users who have not log in or have not
	registers to have access to certain pages on the site.  For users who
	truly want access to those certain pages, this function will direct them
	to where they can register to become a member of our service.
______________________________________________________________________________
sell
	All registered users are allowed to sell books on this service.  The 
	have to input certain information about a book they want to sell.
	These include:
		Book Title,
		Author Name,
		Genre,
		Price,
		Condition,
		Book Cover,
		Description.
	The book cover must be an image and the price must be a numerical value.
	These book will be saved in a table by the service.
______________________________________________________________________________
buy
	Registered users can buy a book from other users.  Users cannont buy 
	their own books that they have uploaded.  Once a book is bought it is
	removed from the seller's account.
______________________________________________________________________________
comment
	All registered users can leave a comment on a book.  However, at this 
	time none of the comments can be deleted without access to teh database.
______________________________________________________________________________
rate
	All books can be rated by registed users.  The rating systems consists 
	of 5 stars that can rewarded subjectively.  5 stars means the user really
	liked it and 1 star means the users really didn't like it.
______________________________________________________________________________
recomendations
	Users will get recommendations based off their purchases.  The
	recommendations will be based off the genre of the books that the user
	will buy.  For example, if a user were to buy many fantasy fiction 
	books, then the function will suggest more books that fall under that
	rating rather than genres like mystery, romance novels, historical, or other genres.
	Recomendations can be found on multiple pages including:
		buy page,
		sell page,
		home screen.  
	Users will see sever book covers thatthey can click on to view more 
	information about the book.
______________________________________________________________________________
top rated
	Users can view top rated books in their home screen when they log in.
	These books are the top rated books on the service and most popular.
	Users will see several book listed in rows.  Each row displays:
		Rating,
		Title,
		Author,
		Price,
		Condition,
		Description.
	The service shows the top 4 books in total in this feature.
______________________________________________________________________________
help
	The help page displays information that the users can see if they need 
	to get into contact with customer service.  Also, a list of frequently 
	asked questions are provided.
______________________________________________________________________________
user count
	This function also everyone to know how many registered users the
	service has.  The information can be found on the home screen whether
	users are login in or not.
______________________________________________________________________________

Requirements
============
________________________________________________________________________
To Dos:				|Completed|Partially Completed|Haven't Go to it Yet|
____________________|_________|___________________|____________________|
4 types of user		|		  |					  |					   |
					|		  |  		X		  |					   |
____________________|_________|___________________|____________________|
visitors can browse,|		  |					  |					   |
comment on books	|		  |			X		  |					   |
____________________|_________|___________________|____________________|
registered user can |		  |					  |					   |
bid, buy, complain, |	 X    |					  |					   |
return books.		|		  |					  |					   |
____________________|_________|___________________|____________________|
Super Users can 	|		  |					  |					   |
approve/deny regist-|    X	  |					  |					   |
eration.  			|		  |					  |					   |
____________________|_________|___________________|____________________|
seller must pay 5	|		  |					  |					   |
cents a day for a 	|		  |					  |					   |
book they are sell- |		  |					  |			X   	   |
ing					|		  |					  |					   |
____________________|_________|___________________|____________________|
rating system of	|	 	  |					  |					   |
1 to 5				|	 X	  |					  |					   |
____________________|_________|___________________|____________________|
a book receiveing 3	|		  |					  |					   |
stars from 3 differ-|		  |					  |					   |
ent users will be	|		  |					  |					   |
suspended.  Until	|		  |			X		  |					   |
they remove/restore	|		  |					  |					   |
by deleting all rat-|		  |					  |					   |
ings				|   	  |					  |					   |
____________________|_________|___________________|____________________|
seller recieves 1	|		  |					  |					   |
complaint and 2 star|		  |					  |					   |
(no better rating)	|		  |					  |					   |
or is the owner of 	|		  |					  |			X		   |
2 suspended books	|		  |					  |					   |
will be suspended	|		  |					  |					   |
____________________|_________|___________________|____________________|
users assigning 4	|		  |					  |					   | 
connecutive 1s to	|		  |					  |					   |
books or sellers 	|		  |					  |			X		   |
will be suspended	|		  |					  |					   |
____________________|_________|___________________|____________________|
user removed from	|		  |					  |					   |
service will be giv-|		  |			X		  |					   |
en one last chance	|		  |					  |					   |
____________________|_________|___________________|____________________|
Any user in a black	|		  |					  |					   |
list will not be al-|		  |					  |					   |
lowed to reapply to	|	X	  |					  |					   |
the service			|		  |					  |					   |
____________________|_________|___________________|____________________|
if user does not ha-|		  |					  |					   |
ve enough money to	|		  |					  |					   |
pay for a book,		|		  |					  |			X		   |
they will be turned	|		  |					  |					   |
down				|		  |					  |					   |
____________________|_________|___________________|____________________|
Users can search and|		  |					  |					   |
compare the same 	|		  |			X		  |					   |	
books, if exist		|		  |					  |					   |
____________________|_________|___________________|____________________|
system GUI			|  		  |					  |					   |
					|  	 X	  |					  |					   |
____________________|_________|___________________|____________________|
Recomendation		|  		  |					  |					   |
					|  	 X	  |					  |					   |
____________________|_________|___________________|____________________|
