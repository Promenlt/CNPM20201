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
        <?php
        // put your code here
        if($_SERVER['REQUEST_METHOD']=='GET'){
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Fahrenheit temperature: <input type="text" name="fahrenheit"/>
        <br />
        <input type="submit" name="Convert to Celcius!"/>
        </form>
        <?php
        }
        elseif($_SERVER['REQUEST_METHOD']=='POST'){
            $fahr = $_POST['fahrenheit'];
            $celsius = ($fahr-32) * 5/9;
            printf("%.2f F is %.2f C",$fahr,$celsius);
        }else{
            die("This script only works with GET and POST requests.");
        }
?>
    </body>
</html>
