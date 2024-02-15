<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
<link rel="stylesheet" href="">
    </head>
<body style="background-color: black">
    <header>
        <div>
<h1 style="color: white" class="head-text">Php calculator</h1>
        </div>
    </header>
    <main>
        <form method ="post" align = "center">
<input type="text" name="num1" placeholder = "enter your number"><br><br>
<input type="text" name="num2" placeholder = "enter your number"><br><br>
<select name="drop">
<option></option>
<option value = "add">Add</option>
<option value="sub">subtract</option>
<option value="multi">multiply</option>
<option value="divide">divide</option>
</select><br><br>
<input type="submit" name="sub" style="background: #2196f3" border:"0px" padding: "3px ; 9px:color: white">
</form>
<div align:"center" style="background:black; color:white">
<?php
   if(isset($_POST['sub'])){


    $drop=$_POST['drop'];
    $val1 = $_POST['num1'];
    $val2 = $_POST['num2'];


    switch($drop){


        case"add":
        $val =$val1+$val2;
        echo "add the two number is = ", $val;
                 break;

        case"sub":
        $val = $val1-$val2;
        echo "subtract the two number is = ", $val;
                 break;
                
        case "multi":
        $val = $val1*$val2;
        echo "multiply the two number is = ", $val;
                 break;

        case "divide":
        $val = $val1/$val2;
        echo "divide the two number is = ", $val;
                 break;







            }
    }
?>
</div>
    </main>
    <footer>
        <div>
            <p style="color: white" class="foot-text" id="foot-text1">Designed by Nwaizu Michael</p>
        </div>
    </footer>
</body>
</html>