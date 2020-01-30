<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="calc.php" method="POST">
		
<input type="number" name="num1" required=/><br>
<br>
<label>Select</label>
		<select name="operators">
			<option value="add">Addition</option>
			<option value="sub">substraction</option>
			<option value="mul">multiplication</option>
			<option value="div">Division</option>
		</select><br>
		<br>
		
<input type="number" name="num2" required=/><br>
<br>
<input type="submit"name="Enter"></input>
</form>

<h1 style="font-family: verdana">Answer: <?php echo (compute()) ?></h1>

<?php 

function compute()
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	switch ($_POST['operators'])
	{
		case 'add':
			$sum = $num1 + $num2;
			return $sum;
			break;
		case 'sub':
			$sub = $num1 - $num2;
			return $sub;
			break;
		case 'mul':
			$mul = $num1 * $num2;
			return $mul;
			break;
		case 'div':
			$div = $num1 / $num2;
			return $div;
			break;
		default:
		echo "Invalid operator";
	}
		return compute();
}

?>

</body>
</html>
