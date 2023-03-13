<?php

/* HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 
Usually, 

the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. 
But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. 
If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. 

If the tuition fee is below seven thousand dollars the data will be invalid.


As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
*/

// assigning value
$tutionFee = 7000;

// making decision whether to pay commission or an invalid amount

$x = ($tutionFee > 20000) ? "Pay 25% commission" : ((($tutionFee > 10000)) ? "Pay 20% Commission" : (($tutionFee > 7000) ? "Pay 15% Commission" : "invalid data"));   


// printing result
echo $x; 

