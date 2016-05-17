<div class="favoriekle-default-index">
   
</div>


<?php
	use frontend\models\Favoriread;
	
	$MAKALEID = $_GET['id'];
	$USERNAME = $_GET['username'];
	
	$sayac = 0;
	
	$baglanti = new PDO("mysql:host=localhost;dbname=bnztm;charset=utf8","root", "");
	$baglanti -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = (new \yii\db\Query()) -> select('*') -> from('favoriread') -> All();
	foreach($sql as $yazi)
	{
		if($MAKALEID == $yazi['READID'] && $USERNAME == $yazi['USERNAME'])
		{
			++$sayac;
		}
	}
	
	if($sayac == 0)
	{
	$gir = $baglanti -> prepare("INSERT INTO favoriread SET USERNAME = :a, READID = :e");
					$sql_giris = $gir -> execute(array("a" => $USERNAME, "e" => $MAKALEID));
	}
	
	
	echo "<script>window.location='http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profil&username=".$USERNAME."'</script>";
?>