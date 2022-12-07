<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: index.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" href="style4.css">
	

</head>
<body>
	<h1>Signup</h1>

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
			<input type="text" name="username" placeholder="Username"><br>
			</div>
			<div class="input-box">
			<i class="fas fa-envelope"></i>
			<input type="text" name="email" placeholder="Email"><br>
			</div>
			<div class="input-box">
			<i class="fas fa-lock"></i>
			<input type="text" name="password" placeholder="Password"><br>
			</div>
			<div class="input-box">
			<i class="fas fa-lock"></i>
			<input type="text" name="password2" placeholder="Retype Password"><br>
			</div>
			<br>
		
			<input type="submit" value="Signup">
			
		</form>
		</div>
		</div>
		</div>
	</div>
</body>
</html>