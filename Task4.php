<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h2>Calculator</h2>
	<form method="post" action="">
		<label>First Number:</label>
		<input type="text" name="num1"><br><br>
		<label>Second Number:</label>
		<input type="text" name="num2"><br><br>
		<label>Select Operation:</label>
		<select name="operator">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="mul">Multiplication</option>
			<option value="div">Division</option>
		</select><br><br>
		<input type="submit" value="Calculate">
	</form>

	<?php
	if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];

		switch($operator) {
			case 'add':
				$result = $num1 + $num2;
				echo "<p>Result: $result</p>";
				break;
			case 'sub':
				$result = $num1 - $num2;
				echo "<p>Result: $result</p>";
				break;
			case 'mul':
				$result = $num1 * $num2;
				echo "<p>Result: $result</p>";
				break;
			case 'div':
				if($num2 == 0) {
					echo "<p>Error: Division by zero</p>";
				} else {
					$result = $num1 / $num2;
					echo "<p>Result: $result</p>";
				}
				break;
			default:
				echo "<p>Invalid operator selected</p>";
		}
	}
	?>
</body>
</html>