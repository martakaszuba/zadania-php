

<?php

//Write a function that takes an array of consecutive (increasing) letters as input 
//and that returns the missing letter in the array.
//missingLetter(['a','b','c','d','f']) -> 'e'
//missingLetter(['O','Q','R','S']) -> 'P'


function missingLetter($array){
    $newarr = range($array[0],$array[count($array)-1]);
    foreach ($newarr as $item){
      if (array_search($item,$array) === false){
          return $item;
      }
  }  
  }


?>
