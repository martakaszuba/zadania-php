<?php

/*
codewars
Remove all exclamation marks from the end of words.
Words are separated by spaces in the sentence.
Examples
remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi Hi"
*/

function remove($s){
 $s = explode(" ", $s);
 for ($i=0; $i<count($s); $i++){
    while ($s[$i][strlen($s[$i])-1] == "!"){
        $s[$i] = substr($s[$i],0,-1);
        }
 }
    return implode(" ", $s);
  }




?>