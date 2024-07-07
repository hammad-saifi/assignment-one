<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    echo "num1 is bigger";
}
elseif($num2 > $num1 && $num2 > $num3){
    echo "num2 is bigger";
}
elseif($num3 > $num1 && $num3 > $num2){
    echo "num3 is bigger";
}
else{
    echo "all number is similer";
}

?>