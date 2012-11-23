<html>
<head>
<title>Home Page</title>
</head>
<body>
<?php session_start();
echo "Welcome " .$_SESSION['username'];
 ?>
<form method="post", action="logout.php">
<input type="submit", value="Log out", name="logout"/>
</form>
</body>
</html>