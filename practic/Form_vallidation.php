<html>
<body>
<form method= "POST" action= "">
<input type="text" name="fname">
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name =$_REQUEST['fname'];
	if(empty($name)){
		echo "name is empty";
	}
	else{
		echo $name;
	}
}
?>



</body>
</html>