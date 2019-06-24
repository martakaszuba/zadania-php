
<?php

function isPalindrome($str){
if (strlen($str) === 1){
    return "true";
}
else if (strlen($str) === 2){
    if ($str[0] === $str[1]){
        return "true";
    }
    return "false";
}
    else if ($str[0] !== $str[strlen($str)-1]){
        return "false";
    }
    return isPalindrome(substr($str,1,-1));
}

?>
