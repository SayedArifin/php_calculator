<?php 
declare(strict_types = 1);
include "./includes/class_autoload.inc.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Calculator</title>
</head>
<body>
   <div class="container">
   <div class="card">
        <form action="./includes/calc.inc.php" method="post">
            <p class="calculator-heading">My Own Calculator</p>
            <input type="number" name="num1" id="" placeholder="First number">
            <select name="oper" id="">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">÷</option>
                <option value="mul">×</option>
            </select>
            <input type="number" name="num2" id="" placeholder="Second number">
            <button type="submit">Calculate</button>
        </form>
    </div>
   </div>
</body>
</html>
