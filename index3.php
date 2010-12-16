<!DOCTYPE html> 
<html> 
	<head> 
	<title>WEBookshelf</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
	<script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
	
	<link href="styles.css" type="text/css" rel="stylesheet">
</head> 
<body> 

<!-- ////////// HOME PAGE ////////// -->
<div data-role="page" id="home">

	<div data-role="header" data-theme="b">
		<a href="#main-menu" data-rel="dialog" data-transition="slidedown" data-icon="check">Menu</a>
		<h1>WEBookshelf</h1>
		<a href="index.html" data-icon="check">Log In</a>
	</div><!-- /header -->

	<div data-role="content" data-theme="b" id="main">
			
		<?php include('../miscRequests.php'); ?>
			
	</div><!-- /content -->

	<div data-role="footer" data-theme="b">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
	
</div><!-- /page -->

<!-- ////////// MAIN MENU ////////// -->
<div data-role="page" id="main-menu">

	<div data-role="header" data-theme="b">
		<h1>WEBookshelf: Menu</h1>
	</div><!-- /header -->

	<div data-role="content"> 
		<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b"> 
				<li data-role="list-divider">Menu</li>
				<li><a href="#home">Home</a></li> 
				<li><a href="#books-main">Books</a></li> 
				<li><a href="#authors-main">Authors</a></li> 
				<li><a href="#users-main">Users</a></li> 
				<li><a href="#about-main">About</a></li> 
				<li><a href="#contact-main">Contact</a></li> 
		</ul>
	</div><!-- /content -->

	<div data-role="footer" data-theme="b">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
	
</div><!-- /page -->



<!-- ////////// BOOKS PAGE ////////// -->
<div data-role="page" id="books-main">

	<div data-role="header">
		<h1>WEBookshelf: Books</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->

	<div data-role="footer">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
</div><!-- /page -->

<!-- ////////// AUTHORS PAGE ////////// -->
<div data-role="page" id="authors-main">

	<div data-role="header">
		<h1>WEBookshelf: Authors</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->

	<div data-role="footer">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
</div><!-- /page -->

<!-- ////////// USERS PAGE ////////// -->
<div data-role="page" id="users-main">

	<div data-role="header">
		<h1>WEBookshelf: Users</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->

	<div data-role="footer">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
</div><!-- /page -->

<!-- ////////// ABOUT PAGE ////////// -->
<div data-role="page" id="about-main">

	<div data-role="header">
		<h1>WEBookshelf: About</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->

	<div data-role="footer">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
</div><!-- /page -->

<!-- ////////// LOGIN PAGE ////////// -->
<div data-role="page" id="contact-main">

	<div data-role="header" data-theme="b">
		<h1>WEBookshelf: Login</h1>
	</div><!-- /header -->

	<div data-role="content">
		<form action="../signIn.php" method="post">	
			<!-- TEXT INPUT -->
			<div data-role="fieldcontain">
				<label for="u_username">Username</label>
				<input type="text" name="u_username" id="u_username"><br>
			</div>
			
			<div data-role="fieldcontain">
				<label for="u_password">Password</label>
				<input type="password" name="u_password" id="u_password"><br>
			</div>
		
			<!-- CANCEL AND SUBMIT BUTTONS -->
			<div data-role="fieldcontain">
				<input type="submit" value="Login" name="submitted" data-theme="a">
			</div>
		</form>		
	</div><!-- /content -->

	<div data-role="footer" data-theme="b">
		<h4><small>WEBookshelf &copy; 2010 Andrew S. Roberts</small></h4>
	</div><!-- /header -->
</div><!-- /page -->




</body>
</html>