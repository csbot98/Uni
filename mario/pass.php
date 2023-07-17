<?php

$dbhost = "sql11.freemysqlhosting.net";
$dbname = "sql11490873";
$dbpass = "vvbzlV77ls";
$db="sql11490873";

// $dbhost = "localhost";
// $dbname = "root";
// $dbpass = "";
// $db="adatok";

$mysqli = new mysqli($dbhost, $dbname, $dbpass, $db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

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
######################end of function#############################

$secretname="Mario";
$secretpass="Majom";
$postu=$_POST['uname'];
$postp=$_POST['pwd'];
$eltolaspost=eltolas($postu);

// echo $postu;
// echo $eltolaspost;
// echo eltolas($postu);

########SQL QUERY###########
$sql= "SELECT Titkos FROM tabla WHERE Username='$postu'";
$result = $mysqli->query($sql);

######MSG Function#########################
function function_alert($message) {
	
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
####END of MSG Function#####################

######SQL ECHO############
	if($postp===eltolas($postu)){
		while ($row = $result->fetch_assoc()) {
		//echo $row['Titkos']."<br>";
		function_alert($row['Titkos']);
		}
	}
	elseif($postu===$secretname && $postp===$secretpass){
		header( "refresh:0; url=secret.php");
		echo '<img src="strand.jpg" />';
		//readfile("strand.jpg" );
	}
	else{
		function_alert("Hibás jelszó");
		header( "refresh:3;url=https://www.police.hu" );
	}
}
####SQL CLOSE####
	$mysqli -> close();
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
	
	<script type="text/javascript">
		function myWindow(i,t,wid,hei) {
			var day= new Date();
			var id = day.getTime();
			//Full screen
			var w = (window.width); 
			var h = (window.height); 
			/*
			You can also use the original image height and width as
			var w = wid+100; 
			var h = hei+100; 
			*/
			var params = 'width='+(w-50)+',height='+(h-50)+',scrollbars,resizable';

			var message='<html><head><title>'+i+'</title></head><body><h3 aligh="center">'+
			'<div align="center"><img src="'+i+'" border="0" alt="'+t+'"><br>\
			'+
			'<hr width="100&#37;" size="1"><form><input type="button" onclick="javascript:window.close();" value="Close Window"><br>\
			'+
			'<hr width="100%" size="1"></form></div></body></html>\
			';

			var mywin = open('',id,params);
			mywin.document.write(msg);
			mywin.document.close();
		}
	</script> 
	
</head>
<body>
	 <script>
		alert("Figyelem: A CSS része kétfajta felbontásra van optimalizálva. 1366x768 illetve 1920x1080. Ha változik a méret, akkor a CSS része nem esik majd egybe a specifikus háttérrel."); 
	</script>
    <main>
	<div id="felsor">
	<table >
		<tr>
			<td id="enname">
				<h3>Név:<br>Csengeri Ákos Botond</br></h3> 
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
		

<script>
// Set the date we're counting down to
var countDownDate = new Date("May 16, 2022 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "A játékos idő véget ér";
  }
}, 1000);
</script>
		
	</table>
	</div>
	<div id="projekt">
		<p>II.Projekt</p>
		<p id="demo"></p>
	</div>
        <form id="form" name="#" action="#" method="post">
            <div id="div1">
                <label id="lname" for="name">Username:</label>
                <input id="uname" type="text" name="uname" required="required" placeholder="Bela" />
            </div>

            <div id="div2">
                <label id="lpwd"for="password">Password:</label>
                <input id="pwd" type="password" name="pwd" required="required" placeholder="******" />
            </div>

            <button id="button" type="submit">Start</button>
        </form>
		<form action="https://media4.giphy.com/media/lgcUUCXgC8mEo/giphy.gif?cid=ecf05e47c5tfh5a60528gad0c8jq641k8xoslm26esc91n9w&rid=giphy.gif&ct=g">
			<input id="but2" type="submit" value="OK" style="background:transparent; border:none; color:red;">
		</form>
		<form action="https://translate.google.com/?sl=hu&tl=en&text=majom&op=translate">
			<input id="but3" type="submit" value="OK" style="background:transparent; border:none; color:red;">
		</form>
    </main>
</body>
</html>	

<!--id="felsorol" style="font-weight:normal;
	font-family: 'Press Start 2P', cursive;
	color: red;
	font-size:12px;
	float:center;
	text-align: center;
	padding-top:15px;"