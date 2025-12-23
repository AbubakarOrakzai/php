<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $language = array ("Python", "C++", "php", "NodeJs");
    $a=0;
    while($a<=10)
        {
            echo "The value of the a is ";
            echo $a;
            $a++;
            echo "<br>";
        }

        // Iterating arrays in php using while loop
        $a=0;
        while ($a<count($language)){
            echo "<br> The value of a is ";
            echo $language[$a];
            $a++;
            echo "<br>";
        }

        //Do while loop
         $a=0;
         
        do{
            echo "<br> The value of a is ";
            echo $language[$a];
            $a++;
            echo "<br>";
        }while ($a<count($language));

        //For  loop 
        for($a=0; $a < count($language); $a++)
        {
            echo $language[$a];          
        }

        //foreach loop 
        foreach ($languages as $value)
            {
            echo "The value is from foreach loop is  ";
            echo $value;
            }

            // foreach loop 
            echo "Printing through another foreach loop ";
            
            foreach ($languages as $value) 
           {
             echo "The value from foreach loop is $value <br>";
        }

        ?>
</body>
</html>