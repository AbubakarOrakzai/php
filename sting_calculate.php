<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = "This <br>";
echo $str;
$length = strlen($str);
echo "The length of this string is ".$length."Thank you <br>";
echo "The number of words in this string is ".$length."Thank you <br>";

//Now if i want to reverse the string 
echo "The reversed string is ".strrev($str)."Thank you <br>";
echo "The replace string is :".str_replace("is","at",$str)."_ Thank you <br>";
?>
</body>
</html>