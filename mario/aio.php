<?php
$dbhost = "mysqladmin.nethely.hu";
$dbname = "csadatok";
$dbpass = "csengeria";
$db="csadatok";

$con = mysqli_connect($dbhost,$dbname,$dbpass, $db);
mysqli_select_db($db);

if (isset($_POST['uname']) && isset($_POST['pwd'])) {
#############################Function###############################

function eltolas($user){
$eltolas = array(5,-14,31,-9,3);
$tagoltstring;
$sorstring = "";
$fh = fopen("password.txt","r");
$index = 0;
$beirtusername = $user;

//$dekodoltpassword "";

while (!feof($fh))
{
    $char = fgetc($fh);
    //printf("%s",$char);
    if ($char !="\n")
    {
        
        $sorstring.=chr(ord($char)-$eltolas[$index]);
        if($index<4)
        {
            $index++;
        }
        else
        {
            $index = 0;
            
        }
    }
    else
    {
    $index = 0;
	
    $tagoltstring = explode("*",$sorstring);
    

    if (strcmp($tagoltstring[0],$beirtusername)==0)
    {
		
        return $tagoltstring[1];
    }
	
    $sorstring ="";
    }
}
fclose($fh);
}

$postu=$_POST['uname'];
$postp=$_POST['pwd'];

$eltolaspost=eltolas($postu);
// echo $postu;
 echo $eltolaspost;
// echo eltolas($postu);

if($postp===eltolas($postu)){
	echo "\nYeeee";
}
else{
	echo"not yee";
}
	}
// $uname = eltolas($_POST['uname']);
// echo $uname;
// $pass = eltolas($_POST['pwd']);
// if($pass===eltolas($passwod)){
			// echo "Yee";
		// }
		// else{
			// echo "Not";
		// }
// }

######################end of function#############################

#katika@gmail.com / katica85
#$password =eltolas($tagoltstring[1]);

/* if($password==$passwd){
	echo "Siker";
	exit();
}
	else{
		echo $passwod;
	} */
	mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="monitor.css">
	<link rel="shortcut icon" href="https://icons.iconarchive.com/icons/ph03nyx/super-mario/16/Retro-Mario-icon.png" type="image/x-icon">
    <title>PHP Projekt</title>
</head>
<body>
	 <script>
		// alert("Figyelem: A CSS része kétfajta felbontásra van optimalizálva. 1366x768 illetve 1920x1080. Ha változik a méret, akkor a CSS része nem esik majd egybe a specifikus háttérrel."); 
	// </script>
    <main>
	<div id="felsor">
	<table>
		<tr>
			<td id="enname">
				<h3 id="h3-1">Név:<br>Csengeri Ákos Botond</br></h3> 
			</td>
			<td id="ncode">
				<h3 id="h3-2">Neptun kód:<br>B1Z81T</br></h3>
			</td>
			<td id="coin">
				<h3 id="h3-3">Coin:<br>100</br></h3>
			</td>
			<td id="jegy">
				<h3 id="h3-4">Jegy:<br>5</br></h3>
			</td>
		</tr>
	</table>
	</div>
	<div id="projekt">
		<p>II.Projekt</p>
	</div>
        <form id="form" action="#" method="post">
            <div id="div1">
                <label for="name">Username:</label>
                <input type="text" name="uname" required="required" placeholder="Bela" />
            </div>

            <div id="div2">
                <label for="password">Password:</label>
                <input type="text" name="pwd" required="required" placeholder="******" />
            </div>

            <button id="button" type="submit">Start</button>
        </form>
		<form action="https://media4.giphy.com/media/lgcUUCXgC8mEo/giphy.gif?cid=ecf05e47c5tfh5a60528gad0c8jq641k8xoslm26esc91n9w&rid=giphy.gif&ct=g">
			<input id="but2" type="submit" style="background:transparent; border:none; color:transparent;">
		</form>
    </main>
</body>
</html>