<?php
	$file = file("./text.txt");
	$check=false;
	$Email= $_POST['email'];
	$Passwort= $_POST['passwort'];
	foreach($file as $num =>$line){
		list($name,$vorname,$date,$adresse,$plz,$email,$passwort)=explode(",",$line);
		if(strcmp($Email.trim(),$email.trim())==0 && strcmp($Passwort.trim(),$passwort.trim())==0){
			$check = true;
			//echo strcmp($Email,$email);
			//echo "1:".$Email." 2:".$email." 1:".$Passwort."2:".$passwort;
	
		}
	}

	if($check==true){
		echo "Anmeldung erfolgreich";
	}else{
		echo "Sie sind noch nicht registriert";
		
	}

	




?>
