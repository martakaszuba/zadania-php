<?php
/*codewars
Given a string of words, you need to find the highest scoring word.
Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.
You need to return the highest scoring word as a string.
high('man i need a taxi up to ubud') => "taxi"
high('take me to semynak') => "semynak"
*/

function high($x){
    $highest = 0;
    $word;
    $x = explode(" ",$x);
    $alpha = "abcdefghijklmnopqrstuvwxyz";
    $alpha = str_split($alpha);
    foreach ($x as $item){
    $num = 0;
    $item = str_split($item);
    foreach($item as $item1){
    $num += array_search($item1, $alpha)+1;
    }
    if ($num>$highest){
    $highest = $num;
    $word = implode("",$item);
    }
    }
    return $word;
  }
?>