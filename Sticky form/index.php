<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperature Conversion</title>
    </head>
    <body>
        <?php $fahr=$_GET['fahrenheit'];?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Fahrenheit temperature:
        <input type="text" name="fahrenheit" value="<?php echo $fahr?>"/>
        <br/>
        <input type="submit" name="Convert to Celcius!"/>
        </form>
        <?php
        if(!is_null($fahr)){
            $celcius = ($fahr-32)*5/9;
            printf("%.2fF is %.2fC",$fahr,$celcius);
        }
       
        ?>
    </body>
</html>
