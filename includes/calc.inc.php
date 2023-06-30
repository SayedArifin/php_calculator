<?php
declare(strict_types = 1);
include "./class_autoload.inc.php";
$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
    $result = $calc->calculator();
} catch (TypeError $e) {
    echo "Error: " . $e->getMessage();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Calculator Result</title>
</head>
<body>
<div class="container">
   <div class="card">
   <p class="calculator-heading">Result</p>
   <p><?php echo $result?></p>
   <button onclick="window.location.href = '../index.php';">Calculate again</button>
    </div>
</div>
</body>
</html>