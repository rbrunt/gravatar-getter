<html>
<head>
	<title>Gravatar Test</title>
</head>
<body>
<?php include 'ribbon.php';	?>
<form action="getavatar.php" method="post">
	<div>
		<label for="email">Enter Email adress to get your gravatar:</label>
		<input type="email" name="email" placeholder="Enter email address" tabindex="1"><br>
		<label for="size">Enter the desired size of your gravatar:</label>
		<input type="number" name="size" min="1" max="512" value="100" tabindex="2"/>
		<br><input type="submit" value="Submit" tabindex="3">
	</div>
</form>
</body>
</html>