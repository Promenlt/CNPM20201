<!DOCTYPE html>
<html>
    <head>
        <title>Conditional Test</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        /** @var type $_GET */
        $first = $_GET["firstName"];
        $middle=$_GET["middleName"];
        $last = $_GET["lastName"];
        print("Hi $first! Your full name is $last $middle $first. <br></br>");
        if($first == $last){
            print("$first and $last are equal");
        }
        if($first < $last){
            print("$first is less than $last ");
        }
        if($first > $last){
            print("$first is greater than $last ");
        }
        print("<br></br>");
        
        $grade1 =$_GET["grade1"];
        $grade2 =$_GET["grade2"];
        $final = (2 * $grade1 + 3 * $grade2)/5;
        if($final > 89){
            printf("Your final grade is %.1f. You got an A. Congratulation!", $final);
        
            $rate = "A";
        }elseif ($final>79){
            printf("Your final grade is %.1f. You got an B.", $final);
        
            $rate = "B";
        }
        elseif ($final>69){
            printf("Your final grade is %.1f. You got an C.", $final);
        
            $rate = "C";
        }
        elseif ($final>59){
            printf("Your final grade is %.1f. You got an D.", $final);
        
            $rate = "D";
        }
        elseif ($final>0){
            prinf("Your final grade is $final. You got an F.", $final);
        
            $rate = "F";
        }else{
            printf("Illegal grade less than 0. Final grade = %.1f", $final);
        
            $rate = "Illegal";
        }
        print("<br></br>");
        switch($rate){
            case "A":print("Excellent"); break;
            case "B":print("Good!"); break;
            case "C":print("Not bad!"); break;
            case "D":print("Normal"); break;
            case "F":print("You have to try again!"); break;
            default: print("Illegal grade!");
        }
        ?>
    </body>
</html>