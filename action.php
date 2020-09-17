<?php

    function myFunction($number){
        $square = $number*$number;
        $sqrt = sqrt($number);
        $factorial = 1;
        for ($i=1; $i <= $number; $i++) { 
            $factorial *= $i;
        }

        return array('square'=>$square,'sqrt'=>$sqrt,'factorial'=>$factorial);
    }

    if (isset($_POST['Num'])) {
       $number = $_POST['Num'];
       if (!($number > 0)) {
            echo "Number should be greater than 0";
            echo "</br><a href='main.php'>Go Back</a>";
            exit(0);
       }
       $result = array();
       $result = myFunction($number);
     
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h4>Value Entered was : <?php echo $number; ?></h4>
    <h4>The Square root : <?php echo $result['square']; ?></h4>
    <h4>The Square : <?php echo $result['sqrt']; ?></h4>
    <h4>The Factorial : <?php echo $result['factorial']; ?></h4>
    <a href="main.php">Click here to return to the input form</a>

</body>
</html>
