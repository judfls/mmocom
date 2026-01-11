<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

$fname = htmlspecialchars($_POST["fname"] ?? "");
$lname = htmlspecialchars($_POST["lname"] ?? "");
$email = htmlspecialchars($_POST["email"] ?? "");
$item = htmlspecialchars($_POST["item"] ?? "");
$quantity = (int)($_POST["quantity"] ?? 0);
$address1 = htmlspecialchars($_POST["address1"] ?? "");
$address2 = htmlspecialchars($_POST["address2"] ?? "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Received</title>
</head>
<body>

<h1>Order Received</h1>

<p><strong>Name:</strong> <?= $fname ?> <?= $lname ?></p>
<p><strong>Email:</strong> <?= $email ?></p>
<p><strong>Item:</strong> <?= $item ?></p>
<p><strong>Quantity:</strong> <?= $quantity ?></p>
<p><strong>Address:</strong><br>
<?= $address1 ?><br>
<?= $address2 ?>
</p>

</body>
</html>
