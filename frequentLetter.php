<?php
// function frequentLetter counts the most frequent letter
// letter("kot) => nie ma litery która występuje najczęściej
// letter("kokos) => o

function frequentLetter($str){
$count = 0;
$letter;
$str = str_split($str);
$arr = [];
for ($i=0; $i<count($str); $i++){
    if (isset($arr[$str[$i]])){
        $arr[$str[$i]] += 1;
    }
    else {
        $arr[$str[$i]] = 1;
    }
}
foreach ($arr as $key => $value){
    if ($value > $count){
        $count = $value;
        $letter = $key;
    }
}
if ($count === 1){
    return "nie ma litery która występuje najczęściej";
}
else {
    return $letter;
}
}

?>