<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the body. Welcome
    
    <br>
    <br>
<?php
    function multiply($num1,$num2,$num3 = 5) {
        $answer = $num1 * $num2 * $num3;
        return $answer;
    }
    multiply(2,4)
    
?>

<br>
<?php
    include 'index2.php';

?>
</body>
</html>
