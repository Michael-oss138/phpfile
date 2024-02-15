<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>
    <fieldset>
    <form method="post" enctype="application" action="submitform.php">

        <label for="CRU_Number">CRU_Number:</label>
        <input type="text" name="CRU_Number" placeholder="Enter your CRU number" required="true"></br></br>

        <label for="FIRST_Name">FIRST_Name:</label>
        <input type="text" name="FIRST_Name" placeholder="Enter your first name" required="true"></br></br>

        <label for="surname">Surname:</label>
        <input type="text" name="Surname" placeholder="Enter your Surname" required="true"></br></br>

        <label for="D_O_B">Date of Birth</label>
        <input type="text" name="D_O_B" placeholder="Enter your Date of Birth" required="true"></br></br>

        <label for="level1">level1</label>
        <input type="text" name="Level1" placeholder="Enter your Level" required="true"></br></br>

        <label for="Gender">Gender</label>
        <select name="Gender" id="">
            <option value="Male" >Male</option>
            <option value="Male" >Female</option>
        </select></br></br>

        <label for="programme">programme</label>
        <select name="programme" id="">
            <option value="">Select your course of study</option>
            <option value="Accounting" >Accounting</option>
            <option value="Banking & Finance" >Banking & Finance</option>
            <option value="Computer science" >Computer Science</option>
            <option value="ICT" >Information and Coomunication Technology</option>
        </select></br></br>

        <input type="submit"name="submit" value="submit details"></br></br>
        
        
    </form>
    </fieldset>
</body>
</html>
