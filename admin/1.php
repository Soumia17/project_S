<?php
include_once 'includes/database-linck.php';
$conn;
if(isset($_POST['rech'])){
	$search=$_POST['rech'];
	$req="SELECT * from userinformation where psudo LIKE '%$search%' ";
    $r=mysqli_query($conn,$req);

	if($r){
		echo('hi');
	}
	else 
	echo('noo');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="1.php" method="post">
		<input type="text" name="rech" placeholder="search...">
		<input type="submit" name="sub">
	</form>
</body>
</html>