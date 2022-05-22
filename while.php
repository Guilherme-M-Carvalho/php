<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php

        $num = 1;
        while($num < 10){
            echo "<br/>".$num;
            $num++;
        }

        $num2 = 1;
        while(true){
            echo "<br/>".$num2;
            $num2 += 5;
            if($num2>=100){
                break;
            }
        }

        $num3 = 1;
        while($num3 <10){
            $num3++;
            if ($num3 == 5 || $num ==7){
                continue;
            }
            echo "<br/>".$num3;
        }
    
    ?>
</body>
</html>