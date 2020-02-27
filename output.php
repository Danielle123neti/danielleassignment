<?php
    include_once ("val.php");
    $firstname = $_POST['firstname'];
        echo "First Name:",$firstname,"<br>";
    $lastname = $_POST ['lastname'];
        echo "Last Name:",$lastname,"<br>";
    $middlename = $_POST ['middlename'];
        echo "Middle Name:",$middlename,"<br>";
    $address = $_POST ['address'];
        echo "Address:",$address,"<br>";
    $guardian = $_POST ['Guardian'];
        echo "Guardian:", $guardian,"<br>";
    $email = $_POST ['Email'];
        echo "Email:",$email,"<br>";
    $POB = $_POST ['POB'];
        echo "Place of Birth:",$POB,"<br>";
    $DOB = $_POST ['DOB'];
        echo "Date of Birth:", $DOB,"<br>";
    $contactnumber = $_POST ['ContactNumber'];
        echo "Contact Number:", $contactnumber,"<br>";
    $civilstatus = $_POST ['Civilstatus'];
        echo "Civil Status:", $civilstatus,"<br>";
    $yearlabel = $_POST ['yearlevel'];
        echo "Year Level:", $yearlabel,"<br>";
    $schoolyear = $_POST ['SchoolYear'];
        echo "School Year:",$schoolyear,"<br>";
    $course = $_POST ['Course'];
        echo "Course:", $course,"<br>";

    /*1*/
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($POB) && notEmp($guardian) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
        echo "correct", "<br>";
    }
    else{
        echo "incorrect", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($POB) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
        echo "no number", "<br>";
    }
    else{
        echo "there's a number", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($POB) && notSpecialChar($guardian) && notSpecialChar($contactnumber) && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "there's no special character", "<br>";
    }
    else{
        echo "there's a special character", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "more than 2 letters", "<br>";
    }
    else{
        echo "less than 2 letters", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($POB) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
       echo "no html tags", "<br>";
    }
    else{
        echo "it has html tags", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "valid email", "<br>";
    }
    else{
        echo "Invalid email", "<br>";
    }
    /* 7 */
    if (philpreffix($contactnumber)){
        echo "valid contact number";
    }
    else{
        echo "invalid contact number";
    }
    
?>
?>