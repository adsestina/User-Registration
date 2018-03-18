<?php

session_start();

if(isset($_POST['submit'])) {

    include 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    //error handlers
    //check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: ../Login.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_uid='$uid' or user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1) {
            header("Location: ../Login.php?login=error1");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                header("Location: ../Login.php?login=error2");
                exit();
            } elseif ($hashedPwdCheck == true) {
                    // log in user here
                    $_SESSION['u_id'] = $row ['user_id'];
                    $_SESSION['u_first'] = $row ['user_first'];
                    $_SESSION['u_last'] = $row ['user_last'];
                    $_SESSION['u_email'] = $row ['user_email'];
                    $_SESSION['u_uid'] = $row ['user_uid'];
                    header("Location: ../Inside.php");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../Login.php?login=error3");
    exit();
}