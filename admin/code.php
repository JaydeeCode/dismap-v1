<?php
session_start();
require 'dbconfig.php';

if(isset($_POST['save'])){

    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

 
    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Added Landslide Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "INSERT INTO disaster_records (barangay_name,zone,disaster,number_map,population_at_risk,recommendation,remarks)	

            VALUES ('$barangay_name','$zone','$disaster','$number_map','$population_at_risk','$recommendation','$remarks')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        if($barangay_name == 'Agaas')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY AGAAS!";
            header("Location:disaster-records/landslide-content/agaas-tbl.php");
            exit(0);  
           
        }
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/landslide-content/antolon-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/landslide-content/bahay-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/landslide-content/cabacongan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/landslide-content/canatuan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/landslide-content/colongcogong-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/landslide-content/gibgos-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/landslide-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/landslide-content/hanopol-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/landslide-content/haponan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Ilawod')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY ILAWOD!";
            header("Location:disaster-records/landslide-content/ilawod-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Lubas')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY LUBAS!";
            header("Location:disaster-records/landslide-content/lubas-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/landslide-content/malabog-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Mandiclum')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MANDICLUM!";
            header("Location:disaster-records/landslide-content/mandiclum-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/landslide-content/maqueda-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/landslide-content/pili-centro-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Roque')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY SAN ROQUE!";
            header("Location:disaster-records/landslide-content/san-roque-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/landslide-content/san-vicente-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/landslide-content/tabgon-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/landslide-content/tabiguian-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT SAVED!";
            header("Location:disaster-records/landslide-content/agaas-tbl.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT SAVED!";
        header("Location:disaster-records/landslide-content/agaas-tbl.php");
        exit(0);
    }
}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['update-landslide'])){
    $landslide_id = mysqli_real_escape_string($con, $_POST['landslide_id']);
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Updated Landslide Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "UPDATE disaster_records SET  barangay_name='$barangay_name',zone='$zone',disaster='$disaster',number_map='$number_map',population_at_risk='$population_at_risk',recommendation='$recommendation',remarks='$remarks' WHERE id='$landslide_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        if($barangay_name == 'Agaas')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY AGAAS!";
            header("Location:disaster-records/landslide-content/agaas-tbl.php");
            exit(0); 

            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/landslide-content/antolon-tbl.php");
            exit(0);

            
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/landslide-content/bahay-tbl.php");
            exit(0);

            
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/landslide-content/cabacongan-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/landslide-content/canatuan-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/landslide-content/colongcogong-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/landslide-content/gibgos-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/landslide-content/guijalo-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/landslide-content/hanopol-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/landslide-content/haponan-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Ilawod')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY ILAWOD!";
            header("Location:disaster-records/landslide-content/ilawod-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Lubas')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY LUBAS!";
            header("Location:disaster-records/landslide-content/lubas-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/landslide-content/malabog-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Mandiclum')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MANDICLUM!";
            header("Location:disaster-records/landslide-content/mandiclum-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/landslide-content/maqueda-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/landslide-content/pili-centro-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'San Roque')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY SAN ROQUE!";
            header("Location:disaster-records/landslide-content/san-roque-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/landslide-content/san-vicente-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/landslide-content/tabgon-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/landslide-content/tabiguian-tbl.php");
        exit(0);

        
            $sql="UPDATE disaster_records SET date" ;
            $rs = mysqli_query($con, $sql);

        }
        else{
            $_SESSION['message'] = "DATA WAS NOT UPDATED!";
            header("Location:disaster-records/landslide-content/agaas-tbl.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:disaster-records/landslide-content/agaas-tbl.php");
        exit(0);
    }
}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['save-flood'])){

    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Added Flood Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "INSERT INTO disaster_records (barangay_name,zone,disaster,number_map,population_at_risk,recommendation,remarks)	

            VALUES ('$barangay_name','$zone','$disaster','$number_map','$population_at_risk','$recommendation','$remarks')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        if($barangay_name == 'Agaas')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY AGAAS!";
            header("Location: disaster-records/floods-content/agaas-tbl.php");
            exit(0);    
        }
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/floods-content/antolon-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/floods-content/bahay-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/floods-content/cabacongan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/floods-content/canatuan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/floods-content/colongcogong-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/floods-content/gibgos-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/floods-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/floods-content/hanopol-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/floods-content/haponan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Ilawod')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY ILAWOD!";
            header("Location: disaster-records/floods-content/ilawod-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Lubas')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY LUBAS!";
            header("Location:disaster-records/floods-content/lubas-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/floods-content/malabog-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Mandiclum')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MANDICLUM!";
            header("Location: disaster-records/floods-content/mandiclum-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/floods-content/maqueda-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/floods-content/pili-centro-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Roque')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY SAN ROQUE!";
            header("Location:disaster-records/floods-content/san-roque-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/floods-content/san-vicente-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/floods-content/tabgon-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/floods-content/tabiguian-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT SAVED!";
            header("Location:disaster-records/floods.php");
            exit(0);
        }
    

        
        
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT SAVED!";
        header("Location:disaster-records/floods.php");
        exit(0);
    }

}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['update-flood'])){

    $flood_id = mysqli_real_escape_string($con, $_POST['flood_id']);
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Updated Flood Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "UPDATE disaster_records SET  barangay_name='$barangay_name',zone='$zone',disaster='$disaster',number_map='$number_map',population_at_risk='$population_at_risk',recommendation='$recommendation',remarks='$remarks' WHERE id='$flood_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        if($barangay_name == 'Agaas')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY AGAAS!";
            header("Location:disaster-records/floods-content/agaas-tbl.php");
            exit(0);    
        }
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/floods-content/antolon-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/floods-content/bahay-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/floods-content/cabacongan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/floods-content/canatuan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/floods-content/colongcogong-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/floods-content/gibgos-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/floods-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/floods-content/hanopol-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/floods-content/haponan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Ilawod')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY ILAWOD!";
            header("Location:disaster-records/floods-content/ilawod-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Lubas')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY LUBAS!";
            header("Location:disaster-records/floods-content/lubas-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/floods-content/malabog-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Mandiclum')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MANDICLUM!";
            header("Location:disaster-records/floods-content/mandiclum-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/floods-content/maqueda-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/floods-content/pili-centro-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Roque')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY SAN ROQUE!";
            header("Location:disaster-records/floods-content/san-roque-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/floods-content/san-vicente-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/floods-content/tabgon-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/floods-content/tabiguian-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT UPDATED!";
            header("Location:disaster-records/floods.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:disaster-records/floods.php");
        exit(0);
    }
}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['save-erosion'])){

    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Added Erosion Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "INSERT INTO disaster_records (barangay_name,zone,disaster,number_map,population_at_risk,recommendation,remarks)	

            VALUES ('$barangay_name','$zone','$disaster','$number_map','$population_at_risk','$recommendation','$remarks')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/soil_erosion-content/antolon-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/soil_erosion-content/bahay-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/soil_erosion-content/colongcogong-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/soil_erosion-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/soil_erosion-content/hanopol-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/soil_erosion-content/malabog-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/soil_erosion-content/pili-centro-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT SAVED!";
            header("Location:disaster-records/soil_erosion.php");
            exit(0);
        }

    }
    else{
        $_SESSION['message'] = "DATA WAS NOT SAVED!";
        header("Location:disaster-records/soil_erosion.php");
        exit(0);
    }

}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['update-erosion'])){

    $erosion_id = mysqli_real_escape_string($con, $_POST['erosion_id']);
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Updated Erosion Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "UPDATE disaster_records SET  barangay_name='$barangay_name',zone='$zone',disaster='$disaster',number_map='$number_map',population_at_risk='$population_at_risk',recommendation='$recommendation',remarks='$remarks' WHERE id='$erosion_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        if($barangay_name == 'Antolon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY ANTOLON!";
            header("Location:disaster-records/soil_erosion-content/antolon-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Bahay')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY BAHAY!";
            header("Location:disaster-records/soil_erosion-content/bahay-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/soil_erosion-content/colongcogong-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/soil_erosion-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Hanopol')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HANOPOL!";
            header("Location:disaster-records/soil_erosion-content/hanopol-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Malabog')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MALABOG!";
            header("Location:disaster-records/soil_erosion-content/malabog-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Pili-Centro')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY PILI-CENTRO!";
            header("Location:disaster-records/soil_erosion-content/pili-centro-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT UPDATED!";
            header("Location:disaster-records/soil_erosion.php");
            exit(0);
        }

    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:disaster-records/soil_erosion.php");
        exit(0);
    }

}

?>
<?php
require 'dbconfig.php';

if(isset($_POST['save-tsunami'])){

    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Added Tsunami Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "INSERT INTO disaster_records (barangay_name,zone,disaster,number_map,population_at_risk,recommendation,remarks)	

            VALUES ('$barangay_name','$zone','$disaster','$number_map','$population_at_risk','$recommendation','$remarks')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/tsunami-content/cabacongan-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/tsunami-content/colongcogong-tbl.php");
        exit(0);
        }
         if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/tsunami-content/canatuan-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/tsunami-content/gibgos-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/tsunami-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/tsunami-content/haponan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/tsunami-content/maqueda-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/tsunami-content/san-vicente-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/tsunami-content/tabgon-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/tsunami-content/tabiguian-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT SAVED!";
            header("Location:disaster-records/tsunami.php");
            exit(0);
        }

    }
    else{
        $_SESSION['message'] = "DATA WAS NOT SAVED!";
        header("Location:disaster-records/tsunami.php");
        exit(0);
    }

}
?>
<?php
require 'dbconfig.php';

if(isset($_POST['update-tsunami'])){

    $tsunami_id = mysqli_real_escape_string($con, $_POST['tsunami_id']);
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay']);
    $zone          = mysqli_real_escape_string($con, $_POST['zone']);
    $disaster = mysqli_real_escape_string($con, $_POST['disaster']);
    $number_map = mysqli_real_escape_string($con, $_POST['number_map']);
    $population_at_risk = mysqli_real_escape_string($con, $_POST['population_at_risk']);
    $recommendation = mysqli_real_escape_string($con, $_POST['recommendation']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);

    if(isset($_SESSION['auth_user']['fullname'])){
        $action = 'Updated Tsunami Data in Barangay '.$barangay_name.', '.$zone;
        $iquery = mysqli_query($con,"INSERT INTO logstbl (user,logdate,action) values ('".$_SESSION['auth_user']['fullname']."', NOW(), '".$action."')");
    }

    $query = "UPDATE disaster_records SET  barangay_name='$barangay_name',zone='$zone',disaster='$disaster',number_map='$number_map',population_at_risk='$population_at_risk',recommendation='$recommendation',remarks='$remarks' WHERE id='$tsunami_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        if($barangay_name == 'Cabacongan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CABACONGAN!";
            header("Location:disaster-records/tsunami-content/cabacongan-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Colongcogong')
        {
            $_SESSION['message'] = "DATA WAS SAVED SUCCESSFULLY IN BARANGAY COLONGCOGONG!";
            header("Location:disaster-records/tsunami-content/colongcogong-tbl.php");
        exit(0);
        }
         if($barangay_name == 'Canatuan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY CANATUAN!";
            header("Location:disaster-records/tsunami-content/canatuan-tbl.php");
            exit(0);
        }
        if($barangay_name == 'Gibgos')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GIBGOS!";
            header("Location:disaster-records/tsunami-content/gibgos-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Guijalo')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY GUIJALO!";
            header("Location:disaster-records/tsunami-content/guijalo-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Haponan')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY HAPONAN!";
            header("Location:disaster-records/tsunami-content/haponan-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Maqueda')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY MAQUEDA!";
            header("Location:disaster-records/tsunami-content/maqueda-tbl.php");
        exit(0);
        }
        if($barangay_name == 'San Vicente')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY SAN VICENTE!";
            header("Location:disaster-records/tsunami-content/san-vicente-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabgon')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABGON!";
            header("Location:disaster-records/tsunami-content/tabgon-tbl.php");
        exit(0);
        }
        if($barangay_name == 'Tabiguian')
        {
            $_SESSION['message'] = "DATA WAS UPDATED SUCCESSFULLY IN BARANGAY TABIGUIAN!";
            header("Location:disaster-records/tsunami-content/tabiguian-tbl.php");
        exit(0);
        }
        else{
            $_SESSION['message'] = "DATA WAS NOT UPDATED!";
            header("Location:disaster-records/tsunami.php");
            exit(0);
        }

    }
    else{
        $_SESSION['message'] = "DATA WAS NOT UPDATED!";
        header("Location:disaster-records/tsunami.php");
        exit(0);
    }

}

?>