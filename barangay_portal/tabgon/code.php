<?php
session_start();
require '../dbconfig.php';

if(isset($_POST['save'])){

    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay_name']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $male = mysqli_real_escape_string($con, $_POST['male']);
    $female = mysqli_real_escape_string($con, $_POST['female']);
    $youth = mysqli_real_escape_string($con, $_POST['youth']);
    $senior_citizen = mysqli_real_escape_string($con, $_POST['senior_citizen']);
    $pregnant = mysqli_real_escape_string($con, $_POST['pregnant']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
    $children = mysqli_real_escape_string($con, $_POST['children']);
    $no_evacuations = mysqli_real_escape_string($con, $_POST['no_evacuations']);

     if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Added Statistics Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "INSERT INTO barangay_data (barangay_name,zone,male,female,youth,senior_citizen,pregnant,pwd,children,no_evacuations)VALUES ('$barangay_name','$zone','$male','$female','$youth','$senior_citizen','$pregnant','$pwd','$children','$no_evacuations')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location: tabgon-tbl.php");
            exit(0);    
        }
    
        else{
            $_SESSION['message'] = "DATA WAS NOT SAVED!";
            header("Location: tabgon-tbl.php");
            exit(0);
        }
   
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT SAVED!";
        header("Location: tabgon-tbl.php");
        exit(0);
    }

}


?>
<?php
require '../dbconfig.php';

if(isset($_POST['update'])){

    $tabgon_id = mysqli_real_escape_string($con, $_POST['tabgon_id']);
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay_name']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $male = mysqli_real_escape_string($con, $_POST['male']);
    $female = mysqli_real_escape_string($con, $_POST['female']);
    $youth = mysqli_real_escape_string($con, $_POST['youth']);
    $senior_citizen = mysqli_real_escape_string($con, $_POST['senior_citizen']);
    $pregnant = mysqli_real_escape_string($con, $_POST['pregnant']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
    $children = mysqli_real_escape_string($con, $_POST['children']);
    $no_evacuations = mysqli_real_escape_string($con, $_POST['no_evacuations']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Updated Statistics Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "UPDATE barangay_data 
            SET barangay_name='$barangay_name',
                zone='$zone',
                male='$male',
                female='$female',
                youth='$youth',
                senior_citizen='$senior_citizen',
                pregnant='$pregnant',
                pwd='$pwd',
                children='$children',
                no_evacuations='$no_evacuations'
                WHERE id='$tabgon_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:tabgon-tbl.php");
            exit(0); 
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:tabgon-tbl.php");
        exit(0);
    }
}
?>
<?php
require '../dbconfig.php';

if(isset($_POST['delete'])){

    $tabgon_id = mysqli_real_escape_string($con, $_POST['delete-id']);
    
    $query = "DELETE FROM barangay_data  WHERE id='$tabgon_id'";

    $query_run = mysqli_query($con, $query);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Zone statistics was deleted in Barangay Agaas';
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    if($query_run){
        $_SESSION['message'] = "DATA WAS DELETED SUCCESSFULLY!";
        header("Location:tabgon-tbl.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT DELETED!";
        header("Location:tabgon-tbl.php");
        exit(0);
    }
}
?>