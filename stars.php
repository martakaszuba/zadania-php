

<?php
/*
stars(2) => *
            * *

starts(4) => *
             * *
             * * * 
             * * * *
*/
function stars($num){
for ($i=0; $i<$num; $i++){
for ($j=0; $j<=$i; $j++){
    echo "*";
}
echo "<br>";
}
}

/*
letter() => *    *
            * *  *
            *  * *
            *    *
*/

function letter(){
for ($i=0; $i<4; $i++){
    for ($j=0; $j<4; $j++){
        if ($j===0 || $j===3){
            echo "*";
        }
        else if ($j===$i){
            echo "*";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
}

?>
