<?php
// function mostFrequentLetter counts the most frequent letter/letters
// mostFrequentLetter("kot") => Nie ma litery która występuje najczęściej
// mostFrequentLetter("kara") => Najczęściej występująca litera to:a
// mostFrequentLetter("mama")= > Najczęściej występujące litery to:m,a

function mostFrequentLetter($str){
$countLetter = array_count_values(str_split($str));
$num = max(array_values($countLetter));
$arr = [];
if ($num === 1){
    echo "Nie ma litery która występuje najczęściej";
    return;
}
else {
    foreach ($countLetter as $key=>$value){
        if ($value === $num){
            array_push($arr, $key);
        }
    }
}
if (count($arr) === 1){
    echo "Najczęściej występująca litera to:". implode(",", $arr);
}
else {
    echo "Najczęściej występujące litery to:". implode(",", $arr);
}
}

?>
