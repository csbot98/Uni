<?php
	$user="";
	$eltolas = array(5,-14,31,-9,3);
	$tagoltstring;
	$passwod="";
	$sorstring = "";
	$fh = fopen("password.txt","r");
	$index = 0;
	$beirtusername = $user;
	//$dekodoltpassword "";
	while (!feof($fh))
	{
		$char = fgetc($fh);
		//printf("%s",$char);
		if ($char !="\n"){
			$sorstring.=chr(ord($char)-$eltolas[$index]);
			if($index<4){
				$index++;
			}
			else{
				$index = 0;
			}
		}
		else{
		$index = 0;
		$tagoltstring = explode("*",$sorstring);
		if (strcmp($tagoltstring[0],$beirtusername)==0){
			$passwod =$tagoltstring[1];
			return $passwod;
		}
		$sorstring ="";
		}
	}
	return $passwod;
	echo $passwod;
	fclose($fh);
	echo"lo";

?>


