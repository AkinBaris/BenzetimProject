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
	
	
	<script type="text/javascript" href="/css/carousel.js" media="print"></script>
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
	<![endif]-->
    
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/form.css" />
		
	
</head>
	<body>
	
	<div class="bs-example" data-example-id="inverted-navbar"> 
					<nav class="navbar navbar-inverse"> 
						<div class="container-fluid">  
							<div class="navbar-header"> 
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
									<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
									<span class="icon-bar"></span> <span class="icon-bar"></span> 
								</button> <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $USERNAME; ?></a> 
							</div>  
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
								<ul class="nav navbar-nav"> 
									<li><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profil&username=<?php echo $USERNAME; ?>">Favori Yazılar</a></li> 
									<li class="active"><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=userprofil&username=<?php echo $USERNAME; ?>">Profil</a></li> 
									<li><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profilmakale&username=<?php echo $USERNAME; ?>">Tüm Makaleler</a></li> 
								</ul> 
							</div> 
						</div> 
					</nav> 
				</div>
	
		<diV class="col-md-12" style="width:80%">
			<div class="col-md-4">
				<label class="form-control" style="background:grey;color:white">AD</label></br>
				<label class="form-control" style="background:grey;color:white">SOYAD</label></br>
				<label class="form-control" style="background:grey;color:white">E-MAİL</label></br>
				<label class="form-control" style="background:grey;color:white">USERNAME</label></br>
				<button id="UPDATEBTN" class="btn btn-success" style="width:100%">GÜNCELLE</button>
			</div>
			<div id="MAINDIV" class="col-md-8">
				<?php $sql = (new \yii\db\Query()) -> select('*') -> from('users') -> where('USERNAME=:USERNAME', array(':USERNAME'=>$USERNAME)) -> All();
				foreach($sql as $items) :
				{ ?>
					<label class="form-control" style="box-shadow:0px 0px 5px 5px grey"><?php echo $items['Name']; ?></label></br>
					<label class="form-control" style="box-shadow:0px 0px 5px 5px grey"><?php echo $items['Surname']; ?></label></br>
					<label class="form-control" style="box-shadow:0px 0px 5px 5px grey"><?php echo $items['Email']; ?></label></br>
					<label class="form-control" style="box-shadow:0px 0px 5px 5px grey"><?php echo $USERNAME; ?></label></br></br>
				<?php } endforeach; ?>
				
				
				
			</div>
			<form action="http://localhost:8080/BenzetimProject/frontend/modules/profilupdate/views/default/index.php" method="post">
			<div id="UPDATE" class="col-md-8"style="display:none">
				<input name="NAME" class="form-control" style="box-shadow:0px 0px 5px 5px grey" value="<?php echo $items['Name']; ?>" /></br>
				<input name="SURNAME" class="form-control" style="box-shadow:0px 0px 5px 5px grey;margin-top:6px" value="<?php echo $items['Surname']; ?>" /></br>
				<input name="EMAIL" class="form-control" style="box-shadow:0px 0px 5px 5px grey;margin-top:7px" value="<?php echo $items['Email']; ?>" /></br>
				<input name="USERNAME" class="form-control" style="box-shadow:0px 0px 5px 5px grey;margin-top:7px" value="<?php echo $USERNAME; ?>" readonly /></br>
				<input type="submit" class="btn btn-primary val="Kaydet" />
			</div>
			</form>
		</div>
		
		<div id="dialog" style="display:none; position: center;">
            
        </div>
	

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">OKUMA</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
                <div  class="col-md-12">
                    <center><h1><span class="glyphicon glyphicon-pushpin"></span></</h1></center><br/>
					<hr />
					<div id="result" style="width:80%;margin:auto">
						<br/>
					..<br/>
					.<br/>
					</div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		
	</body>
</html>

<script>

	$("#UPDATEBTN").click(function(){
		$("#MAINDIV").hide(1000);
		$("#UPDATE").show(1000);
	});

 $(".dialogGo").click(function () {
		$("#result").html((this).getAttribute("value"));
    });
	

	$('#SearchTable').keyup(function() {
	  var gelen = $(this).val();
        $("tr").show();
        if (gelen != "") {
            $("tr").hide();
            $("#FIRSTROW").show();       
            $("tr:contains('" + gelen + "')").show();
        }
});
</script>