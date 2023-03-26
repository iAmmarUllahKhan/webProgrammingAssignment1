<!DOCTYPE html>
<html>
<head>
    <title>Calculate Electricity Bill</title>
</head>
<body>
    <form method="POST">
        <label for="units">Enter the units consumed:</label>
        <input type="number" name="units" id="units" required><br><br>
        <input type="submit" name="submit" value="Calculate Bill">
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])){
            $units = $_POST['units'];
            $total_bill = 0;

            if($units <= 50){
                $total_bill = $units * 3.50;
            }
            elseif($units <= 150){
                $total_bill = 50 * 3.50 + ($units - 50) * 4.00;
            }
            elseif($units <= 250){
                $total_bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
            }
            else{
                $total_bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
            }

            echo "Total units: " . $units . "<br>";
            echo "Electricity bill: Rs. " . number_format($total_bill, 2);
        }
    ?>
</body>
</html>