<?php

session_start();
include_once 'dbh.inc.php';

$autherr = '';
$auth = '';
$password = '';

if (isset($_POST['submit'])){
    $auth = mysqli_real_escape_string($conn, $_POST['RegistrationNumber']);
    $password = mysqli_real_escape_string($conn, $_POST['Password']);

    if(empty($auth)){
        $autherr .= '<p><label>RegNo/Staff Id Empty</label></p>';
    }else{
        //checking if reg no. exists
        $sql = "SELECT * FROM register WHERE RegistationNumber='$auth'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1){
            $autherr .= '<p>Reg.No Error</p>';
        } else{
            //password match check
            if($row = mysqli_fetch_assoc($result)) {
                $hashedpasswordcheck = password_verify($password, $row['Password']);
                if($hashedpasswordcheck == false){
                    $autherr .= '<p>Password Error</p>';
                }elseif($hashedpasswordcheck == true) {
                    $_SESSION['id']=$row['id'];
                   $amen = $_SESSION['FullName']=$row['FullName'];
                    $_SESSION['RegistrationNumber']=$row['RegistrationNumber'];
					$_SESSION['Department']=$row['Department'];
					$_SESSION['Faculty']=$row['Faculty'];
                    $_SESSION['Email']=$row['Email'];
                    
                    header("Location: welcome.php");
                }
            }
        }
    }
}