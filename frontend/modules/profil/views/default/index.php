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
								</button> <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $USERNAME; ?></a> 
							</div>  
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
								<ul class="nav navbar-nav"> 
									<li class="active"><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profil&username=<?php echo $USERNAME; ?>">Favori Yazılar</a></li> 
									<li><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=userprofil&username=<?php echo $USERNAME; ?>">Profil</a></li> 
									<li><a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=profilmakale&username=<?php echo $USERNAME; ?>">Tüm Makaleler</a></li> 
								</ul> 
							</div> 
						</div> 
					</nav> 
				</div>
			
			<?php }endif; ?>
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
					<th>Yorum Yaz</th>
					<th>Favorilerden Çıkar</th>
				</tr>
            <?php $sql = (new \yii\db\Query()) -> select('*') -> from('favoriread') -> where('USERNAME=:USERNAME', array(':USERNAME'=>$USERNAME)) -> All();
				foreach($sql as $items) :
				{  $sql2 = (new \yii\db\Query()) -> select('*') -> from('makale') -> where('id=:id', array(':id'=>$items['READID'])) -> All();
					foreach($sql2 as $items2) : { ?>
					<tr>
						<td>
							<?php echo $items2['MName'];  ?>
						</td>
						<td>
							<?php echo $items2['CDC'];  ?>
						</td>
						<td style="display:none">
							<?php echo $items2['Text'];  ?>
						</td>
						<td>
							<button style="background:white;border:none" value="<?php echo $items2['Text'];  ?>" type="button" class="dialogGo" data-toggle="modal" data-target="#myModal">
							<a value="<?php echo $items2['Text'];  ?>" class="dialogGo" href="#"><span class="glyphicon glyphicon-book"></span></a>
							</button>
						</td>
						<td>
							<button style="background:white;border:none" value="<?php echo $items2['Text'];  ?>" type="button" class="dialogGo" data-toggle="modal" data-target="#myModalcomment">
							<a class="dialogGo" href="#"><span class="glyphicon glyphicon-comment"></span></a>
							</button>
						</td>
						<td>
							<a class="dialogGo" href="/BenzetimProject/frontend/web/index.php?r=dbprocess&rid=<?php echo $items2['ID']; ?>&username=<?php echo $USERNAME; ?>"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					<?php } endforeach; ?>
					
			
			<?php }endforeach; ?>
	
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


<div class="modal fade" id="myModalcomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">YORUMUNUZ</h4>
      </div>
      <div class="modal-body">
	  <?php echo "Sevgili okuyucumuz ".$USERNAME; ?>
        <div class="col-md-12">
				<form action="#" method="post">
                <div  class="col-md-12">
                    <center><h1><span class="glyphicon glyphicon-comment"></span></</h1></center><br/>
					<hr />
					<textarea class="form-control" placeholder="Yorumunuz..." style="resize:none" rows="5"  /></textarea></br>
					<input type="submit" class="btn btn-primary" value="Gönder" />
                </div>
				
				</form>
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