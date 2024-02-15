<?php
$server="localhost";
$user="root";
$password="";
$dbname="studentbiodata";
$dbconnect=mysqli_connect($server, $user, $password, $dbname);
if ($dbconnect) 
{
    echo "connection successful";
}
else 
{
    mysqli_connect_error();
}
$CRU_Number=mysqli_real_escape_string($dbconnect, $_REQUEST ['CRU_Number']);

$FIRST_Name=mysqli_real_escape_string($dbconnect, $_REQUEST ['FIRST_Name']);

$surname=mysqli_real_escape_string($dbconnect, $_REQUEST ['Surname']);

$D_O_B=mysqli_real_escape_string($dbconnect, $_REQUEST ['D_O_B']);

$Level1=mysqli_real_escape_string($dbconnect, $_REQUEST['Level1']);

$Gender=mysqli_real_escape_string($dbconnect, $_REQUEST['Gender']);

$programme=mysqli_real_escape_string($dbconnect, $_REQUEST['programme']);

$submitform="INSERT INTO biodata (CRU_Number, FIRST_name, Surname, D_O_B, Level1, Gender, programme);
VALUES('$CRU_Number', '$FIRST_Name', '$surname', '$D_O_B',  '$Level1', '$Gender' ,'$programme')";
$result=mysqli_query($dbconnect, $submitform);
if ($result) 
{
    echo "Record submitted";
}
else {
    echo "not submited";
}
?>