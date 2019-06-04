<?php

/*
codewars
Given an integer n, find the maximal number you can obtain by 
deleting exactly one digit of the given number.
Example
For n = 152, the output should be 52;
For n = 1001, the output should be 101.
*/

function deleteDigit($n){
    $finalArr = [];
    $n = str_split($n);
    $n = array_map("intval", $n);
    for ($i=0; $i<count($n); $i++){
    $rr = $n;
    array_splice($rr, $i, 1);
    array_push($finalArr, implode("",$rr));
    }
  return max($finalArr);
  }
 
?>