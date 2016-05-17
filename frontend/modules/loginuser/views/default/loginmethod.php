<?php
	$USERNAME = $_POST['USERNAME'];
	$PASSWORD = $_POST['PASSWORD'];
	$KTIP = $_POST['ktip'];

	
	$db = new PDO("mysql:host=localhost;dbname=bnztm;charset=utf8", "root", "");
	if($KTIP == "Ziyaretçi")	
	{		
		$result = $db->prepare("SELECT * FROM users WHERE Username = ".$USERNAME." AND Password = ".$PASSWORD.""); 
		$sql="SELECT count(*) FROM users WHERE Username = '$USERNAME' AND Password = '$PASSWORD' AND tip = '1'";
		$result = $db->query($sql);
		$row = $result->fetch(PDO::FETCH_NUM);
		if( $row[0] != '0' ){
			echo "<script> window.location = 'http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profil&username=".$USERNAME."'; </script>";
		
		}else{
			
			echo "<script> window.location = 'http://localhost:8080/BenzetimProject/frontend/web/index.php?r=loginuser';alert('Ziyaret : Bilgilerinizi Kontrol Ediniz!'); </script>";
		}
	}
	if($KTIP == "Admin")	
	{		
		$result = $db->prepare("SELECT * FROM users WHERE Username = ".$USERNAME." AND Password = ".$PASSWORD.""); 
		$sql="SELECT count(*) FROM users WHERE Username = '$USERNAME' AND Password = '$PASSWORD' AND tip = '0'";
		$result = $db->query($sql);
		$row = $result->fetch(PDO::FETCH_NUM);
		if( $row[0] != '0' ){
			echo "<script> window.location = 'http://localhost:8080/BenzetimProject/frontend/web/index.php?r=makale2'; </script>";
		
		}else{
			
			echo "<script> window.location = 'http://localhost:8080/BenzetimProject/frontend/web/index.php?r=loginuser';alert('Admin : Bilgilerinizi Kontrol Ediniz!'); </script>";
		}
	}
?>