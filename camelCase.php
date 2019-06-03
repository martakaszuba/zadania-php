<?php

//camelCase("wielka-sowa") => WielkaSowa
//camelCase("jestem-wesoly-romek") => JestemWesolyRomek

function camelCase($str){
$str = explode("-", $str);
for ($i = 0; $i<count($str); $i++){
$str[$i] = strtoupper(substr($str[$i],0,1)) . substr($str[$i],1);
}
$str = implode("", $str);
return $str;
}

?>