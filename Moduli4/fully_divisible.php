<?php

function fully_divisible($n) {
   
    if (($n % 2) == 0){
        return "$n is fully divisible by 2";
    }
    else {
        return "$n is not fully divisible by 2";
    }
}

print_r(fully_divisible(10) . "<hr>");
print_r(fully_divisible(36) . "<hr>");
print_r(fully_divisible(16) . "<hr>");
print_r(fully_divisible(5) . "<hr>");

?>