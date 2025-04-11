<?php
session_start();

require '../dbconfig.php';

if(isset($_POST['save'])){

    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username          = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role_type = mysqli_real_escape_string($con, $_POST['role_type']);
    $role_no = mysqli_real_escape_string($con, $_POST['role_no']);

    $query = "INSERT INTO account (fullname,username,password,role_type,role_no)VALUES ('$fullname','$username','$password','$role_type','$role_no')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
            $_SESSION['message'] = "ACCOUNT ADDED SUCCESSFULLY !";
            header("Location: account-tbl.php");
            exit(0);    
        }

    else{
        $_SESSION['message'] = "ACCOUNT WAS NOT ADDED!";
        header("Location: account-tbl.php");
        exit(0);
    }

}

if(isset($_POST['update'])){

    $account_id = mysqli_real_escape_string($con, $_POST['account_id']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username          = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role_type = mysqli_real_escape_string($con, $_POST['role_type']);
    $role_no = mysqli_real_escape_string($con, $_POST['role_no']);
    
    $query = "UPDATE account 
            SET fullname='$fullname',
                username='$username',
                password='$password',
                role_type='$role_type',
                role_no='$role_no'
                WHERE id='$account_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
            $_SESSION['message'] = "ACCOUNT UDATED SUCCESSFULLY !";
            header("Location:account-tbl.php");
            exit(0); 
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:account-tbl.php");
        exit(0);
    }
}

if(isset($_POST['delete'])){

    $account_id = mysqli_real_escape_string($con, $_POST['delete']);
    
    $query = "DELETE FROM account  WHERE id='$account_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "ACCOUNT WAS DELETED!";
        header("Location:account-tbl.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "ACCOUNT WAS NOT DELETED!";
        header("Location:account-tbl.php");
        exit(0);
    }
}

?>
