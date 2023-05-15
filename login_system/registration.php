<?php
    session_start();
    require_once '..\connect\connect.php';
    
    
    $Surname = $_POST['Surname'];
    $Name = $_POST['Name'];
    $MiddleName = $_POST['MiddleName'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $TwoPassword = $_POST['TwoPassword'];

    $getDate = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE `Number` = '$NumberS'");
    $row = mysqli_fetch_array($getDate);
    $EmailOld = $row[5];
    $NumberOld = $row[4];

    $TwoPassword = md5($TwoPassword);
    $Password = md5($Password);

    $VerEmail = $EmailOld != $Email;
    $VerNumber = $NumberOld != $Number;
    $VerPassword = $Password == $TwoPassword;
    if($VerPassword && $VerEmail && $VerNumber){
        mysqli_query($connect, "INSERT INTO `firstdata` (`Surname`, `Name`, `MiddleName`, `Number`, `Email`, `Password`) VALUES 
        ('$Surname', '$Name', '$MiddleName', '$Number', '$Email', '$TwoPassword')");
    }else{
        die("Регистрация не удалась");
    }

    
    header("Location: /index.php");
?>
