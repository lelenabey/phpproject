<?php 
include 'smartdog.php';

session_start();
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1

if(isset($_REQUEST["name"])) {
	$name = $_REQUEST["name"];
	$color = $_REQUEST["color"];
	$trick = $_REQUEST["trick"];
	$smartdog = new Smartdog($name,$color,$trick);

	if (isset($_SESSION["dogs"])==false)
		$_SESSION["dogs"] = array();
	
	$_SESSION["dogs"][] = $smartdog;
	
	header("Location: index.php");   // redirect to index page
}

?>

<!DOCTYPE html>

<html>
	<head>
		<style>
			input {
				display: block;
			}
		</style>
	</head> 
<body>
	<h1>New Smart Dog</h1>
	<form action="addSmartdog.php">
		Name <input type="text" name="name" />
		Color <input type="text" name="color" />
		Trick <input type="text" name="trick" />
		<input type="submit" />
	</form>
</body>

</html>

