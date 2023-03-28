<?php
if(isset($_POST["submit"]))
{
	$null1=$_POST["num1"];
	$null2=$_POST["num2"];
	$null3=$_POST["num3"];

	$max = max($null1,$null2,$null3);
	echo "Maximum number:".$max;

	$min = min($null1,$null2,$null3);
	echo "Minimum number:".$min;
}
?>
