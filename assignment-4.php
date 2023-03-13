<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.


3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.


4.Write a PHP function to check if a string contains only letters and whitespace.


5.Write a PHP function to find the second largest number in an array of numbers.


To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.

*/

/* -------------------------------------------------------------------------------------------------------------
    1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
 -------------------------------------------------------------------------------------------------------------*/

 function determineLongestString( $element1, $element2 ){
    if(strlen($element1) === strlen($element2)) {
        return 0;
    }
 
    return(strlen($element1) < strlen($element2)? -1 : 1 );
 }
$fruitsArr = ["Apple", "Orange", "pineapple", "Bannana", "date", "Strawberry"]; 
usort($fruitsArr, 'determineLongestString');

//print_r($fruitsArr);

/* -------------------------------------------------------------------------------------------------------------
    2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
 -------------------------------------------------------------------------------------------------------------*/
 function concat_reverse($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = '';

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $result .= $str1[$i];
    }

    for ($i = $len2 - 1; $i >= 0; $i--) {
        $result .= $str2[$i];
    }

    return strrev($result);
}

$str1 = "Hello";
$str2 = "world";
$result = concat_reverse($str1, $str2);
echo $result; 

 /* ------------------------------------------------------------
    Function: Remove the first and last element of an array 
    Function Name: removeFirstAndLastElement()
    Return: Array
 ---------------------------------------------------------------*/

 function removeFirstAndLastElement(array $arr){
    array_shift($arr);
    array_pop($arr);
    return $arr;
 }

 $numbers = [100, 3, 5, 7, 9, 500];
 $trimedOne = removeFirstAndLastElement($numbers);

 print_r($trimedOne);


  /* ------------------------------------------------------------
    Function: Check if a string contains only letter or whitespace
    Function Name: checkIfContainsOnlyLetterAndWhitespace()
    Return: string
 ---------------------------------------------------------------*/
 function checkIfContainsOnlyLetterAndWhitespace($str){
    $check = preg_match('/^[a-zA-Z\s]+$/', $str);
    if ($check === 1){
        return "Yes, your string contains only letter and white space.";
    
    }

    return "No, the strings characters other than letters and whitespace";
 }

 $str1 = 'Hello World';
 $str2 = 'Hello there, How are you.';


 echo checkIfContainsOnlyLetterAndWhitespace($str2);

   /* ------------------------------------------------------------
    Function: Find second largest of an array
    Function Name: findSecondLargest()
    Return: 
 ---------------------------------------------------------------*/
 function findSecondLargest(array $arr){
    $largest = null;
    $secondLargest = null;
    
    foreach ($arr as $num) {
        if ($largest === null || $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($secondLargest === null || $num > $secondLargest) {
            $secondLargest = $num;
        }
    }
    
    return $secondLargest;
 }

$numbers = [3, 8, 1, 6, 2, 9];
$secondLargest = findSecondLargest($numbers);

echo '['.$secondLargest.']';