<!DOCTYPE html>
<html>
    <head>
        <title>Date Time Validation</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
       
     
    </head>

    <body>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                <?php
                    if (array_key_exists("hour", $_GET)){
                        $hour = $_GET["hour"];
                    }
                    else{
                        $hour=0;
                    }if (array_key_exists("minute", $_GET)){
                        $minute = $_GET["minute"];
                    }
                    else{
                        $minute=0;
                    }if (array_key_exists("second", $_GET)){
                        $second = $_GET["second"];
                    }
                    else{
                        $second=0;
                    }
                
                    if (array_key_exists("month", $_GET)){
                        $month = $_GET["month"];
                    }
                    else{
                        $month=1;
                    }
                    if (array_key_exists("year", $_GET)){
                        $year = $_GET["year"];
                    }
                    else{
                        $year=1999;
                    }

                    if (array_key_exists("day", $_GET)){
                        $day = $_GET["day"];
                    }
                    else{
                        $day=1;
                    }

                    $namnhuan = false;
                    if ($year % 4==0){
                        if ($year %100==0){
                            if ($year%400==0){
                                $namnhuan=true;
                            }
                        }
                        else $namnhuan=true;
                    }                        


                    $maxday=31;
                    if ($month % 2 == 0 && $month <7){
                        $maxday = 30;
                    } else
                    if ($month % 2 == 0 && $month >7){
                        $maxday = 31;
                    }
                    if ($month==2){
                        if ($namnhuan) $maxday=29;
                        else $maxday=28;
                    }
                ?>
                
                <table>
                        <tr>
                            Enter your name and select date and time for the appointment
                        </tr>
                        <tr>
                            <td>Your name:</td>
                            <td colspan="3"><input  type="text" size="16" maxlength="20" name="name"></td>
                        </tr>

                        <tr>
                            <td> Date: </td>
                            <td><select name="day">
                                <?php 
                                    for ($i=1;$i<=$maxday;$i++){
                                        if ($day==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                            <td><select name="month">
                                <?php 
                                    for ($i=1;$i<=12;$i++){
                                        if ($month==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                            <td><select name="year">
                                <?php 
                                    for ($i=1900;$i<=2020;$i++){
                                        if ($year==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Time:</td>
                            <td><select name="hour">
                                <?php 
                                    for ($i=0;$i<=23;$i++){
                                        if ($hour==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                            <td><select name="minute">
                                <?php 
                                    for ($i=0;$i<=59;$i++){
                                        if ($minute==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                            <td><select name="second">
                                <?php 
                                    for ($i=0;$i<=59;$i++){
                                        if ($second==$i) print("<option selected>$i</option>");
                                        else
                                        print("<option>$i</option>");
                                    }                                                               
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"> <Input type = "SUBMIT" value="submit"></td>
                            <td align="left"> <Input type = "RESET" value="reset"></td>
                        </tr>                        
                </table>
                <table>
                    <?php 
                        if (array_key_exists("name", $_GET)){
                            $name = $_GET["name"];
                            $day=$_GET["day"];
                            $month=$_GET["month"];
                            $year=$_GET["year"];
                            $hour=$_GET["hour"];
                            $minute=$_GET["minute"];
                            $second=$_GET["second"];
                            print("Hi $name </br>");
                            print("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year </br>");
                            print("More information </br>");
                            if($hour>12){
                                $hour = $hour -12;
                                print("In 12 hours, the time and date is $hour:$minute:$second PM,$day/$month/$year </br>");
                            }else{
                                print("In 12 hours, the time and date is $hour:$minute:$second AM,$day/$month/$year </br>");
                            }
                            print("This month has $maxday days!");
                        }
                    
                    ?>
                </table>
            </form>
    </body>

</html>