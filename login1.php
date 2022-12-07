<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}


?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Solway:wght@800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="style4.css">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style9.css">

<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>

	<?php include('header.php')?>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<div class="container">
		<div class="forms">
		<div class="form-content">
		<form method="post">
			<div class="input-box">
			<i class="fas fa-user"></i>
			<input type="email" name="email" placeholder="Email"><br>
			</div>
			<div class="input-box">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password"><br>
			</div>
			<br>
			<input type="submit" value="Login">
		</form>
		</div>
		</div>
		</div>
	</div>
</body>
</html>