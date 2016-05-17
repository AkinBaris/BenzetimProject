<?php
	$USERNAME = $_GET['username'];
	$RID = $_GET['rid'];
	$a = $USERNAME;
	$db = new PDO("mysql:host=localhost;dbname=bnztm;charset=utf8", "root", "");
		
		$query = $db->prepare("DELETE from favoriread WHERE READID= :id and USERNAME= :username");
		$delete = $query->execute(array(
			'id' => $RID,
			'username' => $USERNAME
		));
		
	echo "<script> window.location = 'http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profil&username=".$USERNAME."'; </script>";


?>

<html>
	<?php echo $USERNAME; ?>
</html>

