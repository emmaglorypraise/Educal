<?php
include_once 'dbh.inc.php';

$error = '';
$errorfn = '';
$errorregno = '';
$errordept = '';
$errorfac = '';
$erroremail = '';
$errordos = '';
$errornationality = '';
$errorsoo = '';
$errorlga = '';
$errorbirthday = '';
$errorpassword = '';
$errorconpass = '';
$fullname = '';
$regno = '';
$department = '';
$faculty = '';
$email = '';
$durofstu = '';
$nationality = '';
$staoforig = '';
$locgovare = '';
$birthday = '';
$password = '';
$conpass = '';
$errorstat = true;

function clean_text($string)
{
    $string = htmlspecialchars( stripslashes( trim($string) ) );
    return $string;
}

if (isset($_POST['submit'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['FullName']);
    $regno = mysqli_real_escape_string($conn, $_POST['RegistrationNumber']);
    $department = mysqli_real_escape_string($conn, $_POST['Department']);
    $faculty = mysqli_real_escape_string($conn, $_POST['Faculty']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $durofstu = mysqli_real_escape_string($conn, $_POST['DurationOfStudy']);
    $nationality = mysqli_real_escape_string($conn, $_POST['Nationality']);
    $staoforig = mysqli_real_escape_string($conn, $_POST['StateOfOrigin']);
    $locgovare = mysqli_real_escape_string($conn, $_POST['LocalGovernmentArea']);
    $birthday = mysqli_real_escape_string($conn, $_POST['Birthday']);
    $password = mysqli_real_escape_string($conn, $_POST['Password']);
    $conpass = mysqli_real_escape_string($conn, $_POST['ConfirmPassword']);


    // FULLNAME
    if(empty($_POST['FullName'])){
        $errorfn .= '<p><label>* Please Enter First Name</label></p>';
        $errorstat = true;
    }else {
        $fullname = clean_text($fullname);
        if(!preg_match("/^[a-zA-Z ]*$/", $fullname)){
            $errorfn .= '<p><label>* Full Name Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    // REGISTRATION NUMBER
    if(empty($_POST['RegistrationNumber'])){
        $errorregno .= '<p><label>* Please Enter Registration Number</label></p>';
        $errorstat = true;
    }else {
        $regno = clean_text($regno);
        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $regno)){
            $errorregno .= '<p><label>* Registration Number Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //Department
    if(empty($_POST['Department'])){
        $errordept .= '<p><label>* Please Enter Your Department</label></p>';
        $errorstat = true;
    }else {
        $department = clean_text($department);
        if(!preg_match("/^[a-zA-Z ]*$/", $department)){
            $errordept .= '<p><label>* Department Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //Faculty
    if(empty($_POST['Faculty'])){
        $errorfac .= '<p><label>* Please Enter Your Faculty</label></p>';
        $errorstat = true;
    }else {
        $faculty = clean_text($faculty);
        if(!preg_match("/^[a-zA-Z ]*$/", $faculty)){
            $errorfac .= '<p><label>* Department Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //Email
    if(empty($_POST['Email'])){
        $erroremail .= '<p><label>* Please Enter Your Email</label></p>';
        $errorstat = true;
    }else {
        $email = clean_text($email);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erroremail .= '<p><label>* Email Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //DURATION OF STUDY
    if(empty($_POST['DurationOfStudy'])){
        $errordos .= '<p><label>* Please Enter Your Duration Of Study</label></p>';
        $errorstat = true;
    }else {
        $durofstu = clean_text($durofstu);
        if(!preg_match("/^[0-9 ]*$/", $durofstu)){
            $errordos .= '<p><label>* Duration Of Study Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //NATIONALITY
    if(empty($_POST['Nationality'])){
        $errornationality .= '<p><label>* Please Enter Your Nationality</label></p>';
        $errorstat = true;
    }else {
        $nationality = clean_text($nationality);
        if(!preg_match("/^[a-zA-Z ]*$/", $nationality)){
            $errornationality .= '<p><label>* Nationality Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //State Of Origin
    if(empty($_POST['StateOfOrigin'])){
        $errorsoo .= '<p><label>* Please Enter Your State Of Origin</label></p>';
        $errorstat = true;
    }else {
        $staoforig = clean_text($staoforig);
        if(!preg_match("/^[a-zA-Z ]*$/", $staoforig)){
            $errorsoo .= '<p><label>* State OF Origin Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //Local Government Area
    if(empty($_POST['LocalGovernmentArea'])){
        $errorlga .= '<p><label>* Please Enter Your Local Government Area</label></p>';
        $errorstat = true;
    }else {
        $locgovare = clean_text($locgovare);
        if(!preg_match("/^[a-zA-Z ]*$/", $locgovare)){
            $errorlga .= '<p><label>* Local Government Area Field Invalid !</label></p>';
            $errorstat = true;
        }
        $errorstat = false;
    }

    //BIRTHDAY
    if(empty($_POST['Birthday'])){
        $errorbirthday .= '<p><label>* Please Enter Your Birthday</label></p>';
        $errorstat = true;
    }


    //Password
    if(empty($_POST['Password'])){
        $errorpassword .= '<p><label>* Please Enter Your Password</label></p>';
        $errorstat = true;
    }

    $password_length = strlen((string) $password);
    if ($password_length < 8) {
        $errorpassword .= '<p><label>* Atleast 8 characters required for a valid password</label></p>';
        $errorstat = true;
    }

//CONFIRM PASSWORD
    if(empty($_POST['ConfirmPassword'])){
        $errorconpass .= '<p><label>* Please Enter Your Password</label></p>';
        $errorstat = true;
    }
    if ($password !== $conpass) {
        $errorconpass .= '<p><label>* Password is not the same</label></p>';
        $errorstat = true;
    }

    //Hashing Password
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $confirmhashedpassword = password_hash($conpass, PASSWORD_DEFAULT);


if($errorstat == false){
    $sql = "INSERT INTO register (FullName, RegistrationNumber, Department, Faculty, Email, 
    DurationOfStudy, Nationality, StateOfOrigin, LocalGovernmentArea, 
    Birthday, Password, ConfirmPassword) 
    VALUES ('$fullname', '$regno', '$department', '$faculty', '$email', '$durofstu',
     '$nationality', '$staoforig', '$locgovare', '$birthday', 
     '$hashedpassword', '$confirmhashedpassword')";

    $registered = mysqli_query($conn, $sql);
    if($registered){
        echo "Registered..";
    }
}else {
    echo "ErrorStat == True";
}

}