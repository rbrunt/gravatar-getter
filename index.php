<html>
<head>
	<title>Gravatar Test</title>
</head>
<body>
<?php include 'ribbon.php';	?>
<form action="getavatar.php" method="post">
	<div>
		<label for="email">Enter Email adress to get your gravatar:</label>
		<input type="email" name="email" placeholder="Enter email address"><br>
		<label for="size">Enter the desired size of your gravatar:</label>
		<input type="number" name="size" min="1" max="512" value="100"/>
		<br><input type="submit" value="Submit">
	</div>
</form>
</body>
</html>