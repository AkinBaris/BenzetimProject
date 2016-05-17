<?php 
	$USERNAME = $_POST['USERNAME'];
	$NAME = $_POST['NAME'];
	$SURNAME = $_POST['SURNAME'];
	$EMAIL = $_POST['EMAIL'];
	
	
	$db = new PDO("mysql:host=localhost;dbname=bnztm;charset=utf8", "root", "");	
		$sonuc = $db->exec("UPDATE users SET Name='".$NAME."', Surname='".$SURNAME."', Email='".$EMAIL."' WHERE Username='".$USERNAME."' ");
	
	
	echo "<script>window.location='http://localhost:8080/BenzetimProject/frontend/web/index.php?r=userprofil&username=".$USERNAME."'</script>";
?>