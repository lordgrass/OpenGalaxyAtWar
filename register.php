<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Open-GAW | Register for an account | Lordgrass.com</title>
<link rel="stylesheet" type="text/css" href="global.css" />
</head>
<body>
<div>
<h1>Register for an Open-GAW Account on this server?</h1>
<!--Below this line is the database connection handler-->
<?php
include "backend/dbconnect.php";
?>

<form action="" method="POST">
Desired Username:
<div><input type="text" name="username"></input></div>
Email Address:
<div><input type="text" name="email"></input></div>
Password:
<div><input type="text" name="password"></input></div>
<div><input type="submit"></input></div>
</form>
</div>
</body>
</html>
