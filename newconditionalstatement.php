<?php
//if statement  single condition returns true
//if Else statement single condition returns true or false
//if Else if multiple conditions returns true 
//switch operation 
$level1=100;
$level2=200;
$level3=300;
$level4=400;
//student level
$level = 200;
//if statement
if($level==$level1){
    echo "student is in 100 level";
}

$level = 300;
//if  Else statement
if($level==$level1){
    echo "student is in 100 level";
}
else
echo "the student is not in level 1 <br><br>";
//if else if statement

if($level==$level1){
    echo "student is in 100 level";
}
elseif($level==$level2){
    echo "student is in 200 level";
}
elseif($level==$level3){
    echo "student is in 300 level";
}
elseif($level==$level3){
    echo "student is in 400 level";
}


?>