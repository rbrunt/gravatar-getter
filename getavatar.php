<html>
<head>
	<title>Your (Gr)avatar:</title>
</head>
<body>
<?php
	$email = $_POST['email'];
	if($_POST['size']!=""){
		$size = $_POST['size'];
	} else {
		$size = "100";
	}
	$hash = md5(strtolower(trim($email)));

	echo "
		<p>Hi there ".$email."! Here's your picture!:</p><br>
		<img src=\"http://gravatar.com/avatar/".$hash."?s=".$size."&d=mm\">
	";
?>


</body>
</html>