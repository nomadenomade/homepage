<?php
	
	$file = "./text.txt";
	$data = $_POST['name'].",".$_POST['vorname'].",".$_POST['date'].",".$_POST['adresse'].",".$_POST['plz'].",".$_POST['email'].",".$_POST['passwort']."\n";
	if(file_put_contents($file,$data,FILE_APPEND|LOCK_EX)){
		echo "Daten erfolgreich geschrieben";
	}else{
		//echo "Speicherung der Daten fehlgeschlagen";
		$r= file_put_contents($file,$data,FILE_APPEND|LOCK_EX);
		echo $r;
	}
	



?>
