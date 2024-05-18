<?php 
$strings=["Hello","World",'PHP',"Programming"];   
foreach($strings as $string){
    $vowelCount=preg_match_all('/[awiouAEIOU]/i',$string)?:0;
    $reverseString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reverse String: $reverseString <br>";
} 
