<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <dev class="container">
        This is my first php website
        <?php
        echo "Hello world and this is printed using php";
         $variable1=45;
        $variable2=50;

        echo $variable1;
        echo $variable2;
        echo $variable1+$variable2;
        echo "<br>";

        //Operator in PHP
        //Arithmetic operator 

        echo "The value of hte variable1 + variable2 = ";
        echo $variable1+$variable2;
        echo "The value of hte variable1 - variable2 = ";
        echo $variable1-$variable2;
        echo "<br>";
        echo "The value of hte variable1 + variable2 = ";
        echo $variable1/$variable2;
        echo "<br>";
        echo "The value of hte variable1 * variable2 = ";
        echo $variable1*$variable2;
        echo "<br>";
        echo "<br>";
        echo "The value of hte variable1 + variable2 ";
        $newvariable = $variable1;
       
        echo "<br>";
        echo "The value of the new variable is ";
        echo $newvariable;
        echo "<br>";
     echo "The value of the updated new variable is";
            $newvariable += $variable1;
              echo $newvariable;

                          //*=======*
        //Comparsion operator 
        echo "<h1>Comparsion operator</h1>";
        echo "The value of 1=4";
        echo var_dump(1==4);
        echo "<br>";

        //Increment /Decrement
        $variable3=5;
        echo $variable3--;
        echo "<br>";
        echo $variable3;

        echo "<br>";
        echo ++$variable3;
        echo "<br>";

        echo $variable3++;
        echo "<br>";

        echo $variable3;
        echo "<br>";

        //Logical operator and, or 
        // and 
        // or 
        // xor

        $myVar = (true and true);
        echo "The bool value will be ";
        echo var_dump($myVar);

        //==================  Datatype in php ===============
            // 1. string 
            // 2. Integer
            // 3. float 
            // 4. Boolean 
            // 5. Array 
            // 6. Object
           echo  "<br> Datatype <br>";
            $var="This is a string";
            echo var_dump($var);

            $var="This is a int";
            $var= 67;
            echo var_dump($var);
?>

    </dev>
</body>
</html>