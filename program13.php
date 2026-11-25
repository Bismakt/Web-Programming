<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$number = $_POST['number'];
$units = $_POST['units'];
if($units <= 50)
    $bill = $units * 3.35;
else if($units <= 100)
    $bill = 50*3.35 + ($units-50)*4.25;
else if($units <= 150)
    $bill = 50*3.35 + 50*4.25 + ($units-100)*5.35;
else if($units <= 200)
    $bill = 50*3.35 + 50*4.25 + 50*5.35 + ($units-150)*7.20;
else
    $bill = $units * 8.50;
$fixed = 50;
$total = $bill + $fixed;
}
?>
<html>
<head>
<title>Electricity Bill</title>
<style>
body {background: #F5F0E6;font-family: Arial;
}
.container {background: white;width: 320px;margin: 50px auto;padding: 20px;border-radius: 10px;
}
h2 {text-align: center;color: #176B5B;
}
input {width: 100%;padding: 8px;margin: 8px 0;box-sizing: border-box;
}
button {background: #176B5B;color: white;padding: 10px;border: none;width: 100%;
}
.result {background: #F5F0E6;padding: 10px;margin-top: 15px;
}
.result h3 {color: #176B5B;
}
</style>
</head>
<body>
<div class="container">
<h2>Electricity Bill Calculator</h2>
<form method="POST">
Consumer Name:
<input type="text" name="name" required>
Consumer Number:
<input type="text" name="number" required>
Units Consumed:
<input type="number" name="units" min="0" required>
<button type="submit" name="submit">Calculate Bill</button>
</form>
<?php
if(isset($_POST['submit'])) {
?>
<div class="result">
<h3>Bill Details</h3>
Name: <?php echo htmlspecialchars($name); ?><br>
Consumer Number: <?php echo htmlspecialchars($number); ?><br>
Units: <?php echo $units; ?><br>
Energy Charge: Rs. <?php echo number_format($bill,2); ?><br>
Fixed Charge: Rs. <?php echo $fixed; ?><br>
<hr>
<h3>Total Bill: Rs. <?php echo number_format($total,2); ?></h3>
</div>
<?php
}
?>
</div>
</body>
</html>

