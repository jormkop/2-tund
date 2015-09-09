<?php
	$first_name = "tagu";
	$last_name = "mikk";
	echo $first_name." ".$last_name;
	
	
?>
<br>
<?php
	$age = 4;
		
	//kell oli pool 3 kui mati kooli jõudis
	
	if($age < 18) {
		//tõene
		echo "alakas";
	} else {
		//väär
		echo "täisealine";
	}
?>

<?php

	//vastavalt vanusele trükime niimitu korda välja sõna "palju", kui on vanust
	for($i = 0; $i < $age; $i = $i + 1) {
		
		//tegevus mis kordub
		echo "palju";
		
	}
	
	echo "õnne!"

?>
<br>
<?php


	//trüki välja kuupäev kujul: nädalapäev, kp, kuu, aasta
	echo date("l, jS \of F Y e");




?>