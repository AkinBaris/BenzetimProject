<?php
	

	$USERNAME = $_GET['username'];
?>

<html>
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css" rel="stylesheet" type="text/css" />
	

	</head>
	
	<body>
	
		<?php if($USERNAME != "") : 
			{?>
				<div class="bs-example" data-example-id="inverted-navbar"> 
					<nav class="navbar navbar-inverse"> 
						<div class="container-fluid">  
							<div class="navbar-header"> 
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
									<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
									<span class="icon-bar"></span> <span class="icon-bar"></span> 
								</button> <a class="navbar-brand" href="#"><?php echo $USERNAME; ?></a> 
							</div>  
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
								<ul class="nav navbar-nav"> 
									<li class="active"><a href="#">Favori Yazılar</a></li> 
									<li><a href="#">Profil</a></li> 
									<li><a href="#">Link</a></li> 
								</ul> 
							</div> 
						</div> 
					</nav> 
				</div>
			
			<?php }endif; ?>
			
			<table class="table table-striped">
				<tr id="FIRSTROW">
					<th>Makale Adı</th>
					<th>Makale Kategori</th>
					<th>Makaleyi Oku</th>
				</tr>
            <?php $sql = (new \yii\db\Query()) -> select('*') -> from('t_makale') -> All();
				foreach($sql as $items) :
				{ ?>
				<tr>
					<td>
						<?php echo $items['M_Name'];  ?>
					</td>
					<td>
						<?php echo $items['C_DC'];  ?>
					</td>
					<td style="display:none">
						<?php echo $items['M_Text'];  ?>
					</td>
					<td>
						<button value="<?php echo $items['M_Text'];  ?>" type="button" class="dialogGo" data-toggle="modal" data-target="#myModal">
						<a value="<?php echo $items['M_Text'];  ?>" class="dialogGo" href="#"><span class="glyphicon glyphicon-book"></span></a>
						</button>
					</td>
				</tr>
			
			<?php }endforeach; ?>
	
		
	</body>
</html>