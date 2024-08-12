<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- fibonacci -->
     <?php

    //    function fib($num){
    //     if($num==0){
    //         return 0;
    //     }
    //     elseif($num==1){
    //         return 1;
    //     }
    //     else{
    //         return(fib($num-1)+ fib($num-2));
    //     }
    //     for($i=0;$i<=$num;$i++){
    //         echo fib($i)."";
    //     }
    //    }
    //    fib(5);
  /* max value finder   
    function findmax($arr)
    {
        if(!is_array($arr) || empty($arr)){
            echo"invalid input or empty.";
            return;
        }
        $maxvalue= max($arr);
        echo"max value is".$maxvalue;
        return $maxvalue;
    }
    if(isset($_POST['findmax'])){
        $num=$_POST['number'];
        $arr=array_map('intval',explode(',',$num));
        findmax($arr);
    }*/

   /*range of prime numbers 
   function prime($num){
        for($i=2;$i<=sqrt($num);$i++){
            if($num%$i ===0){
                return false;
            }
        }
        return $num>1;
    }
    function primeNumbers($n){
        for($i=2;$i<=$n;$i++){
            if(prime($i)){
                echo $i;
                echo "<br>";
            }
        }
    }
    prime(3);
    primeNumbers(30);*/

    //bubblesort
    /*function  Bubblesort($arr){
        $n= count($arr);
        for($i=0;$i<$n-1;$i++){
            for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]>$arr[$j]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
        }
        return $arr;
    }
    $arr=[64,34,25,12,22,11,90];
    $sortedArray=Bubblesort($arr);
    echo"sorted array:".implode(",",$sortedArray);*/
    //reverse name
    // $str ="yassin";
    // $len=strlen($str);
    // for($i=($len-1);$i>=0;$i++){
    //     echo strrev($str);
    // }
     
     ?>
     <!-- <form action="" method="post">
     <input type="text" name="number"><br>
     <input type="submit" value="findmax" name="findmax">
     </form> -->
</body>
</html>