<?php
$servername = "mysql.omega:3306";
$username = "csadatok";
$password = "csengeria";
$db="csadatok";


$msg = '';
            if (isset($_POST['login']) && !empty($_POST['name']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['name'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
		<meta charset="UTF-8" />
		<title>PHP Projekt</title>
		<link rel="stylesheet" href="monitor.css">
		<link rel="shortcut icon" href="https://icons.iconarchive.com/icons/ph03nyx/super-mario/16/Retro-Mario-icon.png" type="image/x-icon">
	</head>
</html>