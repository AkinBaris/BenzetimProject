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
									<li><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=userprofil&username=<?php echo $USERNAME; ?>">Profil</a></li> 
									<li class="active"><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profilmakale&username=<?php echo $USERNAME; ?>">Tüm Makaleler</a></li> 
								</ul> 
							</div> 
						</div> 
					</nav> 
				</div>
	
		<diV class="col-md-12">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
					<input id="SearchTable" type="text" class="form-control" placeholder="İçerik, Başlık, Kod Veya Tarih Araması Yap.." 
						style="width:100%;margin:auto"/><br/>
				</div>			
			</div>
		</div>
			<table class="table table-striped">
				<tr id="FIRSTROW" style="background:grey;color:white">
					<th>Makale Adı</th>
					<th>Makale Kategori</th>
					<th>Makaleyi Oku</th>
					<th>Favorilere Ekle</th>
				</tr>
		   <?php $sql = (new \yii\db\Query()) -> select('*') -> from('makale') -> All();
			foreach($sql as $deneme) : 
			{?>
				<tr>
					<td>
						<?php echo $deneme['MName'];  ?>
					</td>
					<td>
						<?php echo $deneme['CDC'];  ?>
					</td>
					<td style="display:none">
						<?php echo $deneme['Text'];  ?>
					</td>
					<td>
						<button style="background:white;border:none" value="<?php echo $deneme['Text'];  ?>" type="button" class="dialogGo" data-toggle="modal" data-target="#myModal">
						<a value="<?php echo $deneme['Text'];  ?>" class="dialogGo" href="#"><span class="glyphicon glyphicon-book"></span></a>
						</button>
					</td>
					<td>
						<button style="background:white;border:none" value="<?php echo $deneme['Text'];  ?>" type="button" class="dialogGo" data-toggle="modal">
						<a value="<?php echo $deneme['Text'];  ?>" class="dialogGo" href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=favoriekle&username=<?php echo $USERNAME; ?>&id=<?php echo $deneme['ID']; ?>"><span class="glyphicon glyphicon-star-empty"></span></a>
						</button>
					</td>
				</tr>
			
			<?php }endforeach; ?>
                
		
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