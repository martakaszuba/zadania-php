<?php
/*
Your goal in this kata is to implement a difference function, which subtracts 
one list from another and returns the result.
arrayDiff([1,2],[1]) == [2]
arrayDiff([1,2,2,2,3],[2,3]) == [1]
*/

//first solution

function arrayDiff($a, $b) {
   $newarr = [];
   for ($i=0; $i<count($a); $i++){
   if (array_search($a[$i], $b) === false){
   array_push($newarr, $a[$i]);
   }
   }
   return $newarr;
 }

//second solution

   function arrayDiff2($a, $b){
   $result = array_filter($a, function($element) use ($b){
   return !in_array($element, $b);
   });
   return array_values($result);
}

?>
