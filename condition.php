<?php
echo "Conditional Statements<br/>";

$showVariable = true;
$name = " Rovic Brix San Pedro ";
$auth = false;
//if... else
if($showVariable == true){
//    //execute code
   echo $name;
}elseif ($showVariable && $name == 'Rovic Brix San Pedro' && $auth){
    echo "Hello ".$name;
}elseif ($showVariable && $name){
    echo "Not Rovic Brix San Pedro ";
}else{
    //no show
    echo "Else statement";
}
// (condition)   ? id condition : else condition
$anotherVariable = ($showVariable == true)? $name : "short hand: else";
echo $anotherVariable;

?>