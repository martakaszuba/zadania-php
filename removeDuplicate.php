<?php
/*Your task is to remove all duplicate words from a string, leaving only single 
(first) words entries.
Example:
Input:
'alpha beta beta gamma gamma gamma delta alpha beta gamma gamma delta'
Output:
'alpha beta gamma delta'
*/

//first solution
function removeDuplicateWords($s) {
    $arr = [];
    $s = explode(" ", $s);
    foreach ($s as $item){
    if (array_search($item, $arr) === false){
    array_push($arr, $item);
    }
    }
    $arr = implode(" ", $arr);
    return $arr;
  }

  //second solution
  function removeDuplicateWords($s) {
    $arrS = array_unique(explode(' ', $s));
    return implode(' ', $arrS);
}

?>