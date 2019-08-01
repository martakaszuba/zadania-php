<?php
// filtAssoc returns elements which keys in first array don't exist in second array
//filtAssoc(['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White'], ['c1', 'c3'])
//=> ['c2' => 'Green']

function filtAssoc($t, $nums){
    foreach ($t as $key=>$value){
        if (in_array($key, $nums)){
        unset($t[$key]);
        }
        }
        return $t;
}

?>




