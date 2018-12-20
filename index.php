<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="index.css" />   

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap/js/Jquery3.3.1.1.js">  
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">  
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js">   
    <link rel="stylesheet" href="bootstrap/js/jquery.js">   


</head>
<body >

	<div class="modal-dialog text-center" >
		<div class="col-sm-9 main-section" >
		
			<div class="modal-content">
		
				<div class="col-12 user-img">
					<img src="user.png">
				</div>

				<div class="col-12 form-input" >
					<form method="post" action="funções/login.php">

						<div class="form-group col-sm-12 mt-2 ">					
							

								<input type="text" class="form-control login fas fa-user"  id="login" name="login" placeholder="&#xf007;&emsp;Login" required="">
												
								
						</div>

						<div class="form-group col-sm-12 ">
							<input type="password" class="form-control senha fas fa-unlock-alt" name="senha" placeholder="&#xf13e;&emsp;Senha" >
						</div>

						<button type="submit" class="btn btn-primary">Entrar</button>
					</form>
					<?php 
					    if (isset($_GET['l'])) {
					?>

					<p style="color: #DC143C;">
						<u><?php echo  $_GET['l']; ?></u>
					</p>
					          
					<?php 

					    }
					?>
				</div>

				
			
				</div>

		</div>
	
	</div>



</body>
</html>