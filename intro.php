<?php
echo "hello world"."<br />";
echo "Thank YOu"."<br />";
$color = "Red";
echo "My house is ".$color. "<br />";
$x = 5;
$y = 10;
$z = $x + $y;
echo $z;

function mytest(){
    Global $z,$x,$y;
    $y = $y + $x;
    echo "<p> my local variable is ".$y."<br />";
}
mytest();     


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First HomePage</title>
</head>
<body>
    
</body>
</html>
