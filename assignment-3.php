<?php
/* -------------------------------------------
 * Function Description: Check if the given 
   input is an even/odd number and returns 
   decision
   input contains an even or odd number of character
 * Function Name: checkIfEvenOrOdd(int $number) 
 * return: a string
 * 
 ----------------------------------------------*/
function checkIfEvenOrOdd(int $number):string{
    
    // check if the number is even 
    if(($number % 2) == 0){
        return "Number $number is an even number \n";
        
    }

    return "Number $number is an odd number \n";
    
}

$result = checkIfEvenOrOdd(6);

echo $result;


/* -------------------------------------
 * The bellow loop calculates 
 * the summation of the series
 * 1+2+3...…….100
 * -------------------------------------*/ 
$sum = 0;
for($i=1; $i<=100; $i++){
    $sum += $i;
}

echo "The sum of the series 1 + 2 + 3 + ... + 100 is: $sum";