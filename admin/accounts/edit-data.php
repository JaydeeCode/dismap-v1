<?php
session_start();
require '../dbconfig.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Accounts</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('../../message.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Barangay Agaas Data</h4>     
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $account_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM account WHERE id = '$account_id'";
                            
                            $query_run = mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $account = mysqli_fetch_array($query_run);
                        ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="account_id" value="<?= $account['id']; ?>">        
                            
                            <div class="mb-3">
                                <label>Full Name</label>
                                    <input type="text" name="fullname" value="<?= $account['fullname']; ?>" class="form-control" placeholder="Ex. Juan Dela Cruz" required>
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                    <input type="text" name="username" value="<?= $account['username']; ?>" class="form-control" placeholder="Ex. Juan" required>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                    <input type="text" name="password" value="<?= $account['password']; ?>" class="form-control" placeholder="********" required>
                            </div>
                            <div class="mb-3">
                                <label>Role Type</label>
                                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="role_type"  required>
                                        <option value="<?=$account['role_type']; ?>"><?=$account['role_type']; ?></option>
                                        <option value="Mdrrmo Head">Mdrrmo Head</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Barangay_Agaas">Barangay_Agaas</option>
                                        <option value="Barangay_Antolon">Barangay_Antolon</option>
                                        <option value="Barangay_Bahay">Barangay_Bahay</option>
                                        <option value="Barangay_Cabacongan">Barangay_Cabacongan</option>
                                        <option value="Barangay_Canatuan">Barangay_Canatuan</option> 
                                        <option value="Barangay_Colongcogong">Barangay_Colongcogong</option> 
                                        <option value="Barangay_Gibgos">Barangay_Gibgos</option> 
                                        <option value="Barangay_Guijalo">Barangay_Guijalo</option> 
                                        <option value="Barangay_Hanopol">Barangay_Hanopol</option> 
                                        <option value="Barangay_Haponan">Barangay_Haponan</option> 
                                        <option value="Barangay_Ilawod">Barangay_Ilawod</option> 
                                        <option value="Barangay_Lubas">Barangay_Lubas</option> 
                                        <option value="Barangay_Malabog">Barangay_Malabog</option> 
                                        <option value="Barangay_Mandiclum">Barangay_Mandiclum</option> 
                                        <option value="Barangay_Maqueda">Barangay_Maqueda</option> 
                                        <option value="Barangay_Pili-Centro">Barangay_Pili-Centro</option> 
                                        <option value="Barangay_San Roque">Barangay_San Roque</option> 
                                        <option value="Barangay_San Vicente">Barangay_San Vicente</option> 
                                        <option value="Barangay_Tabgon">Barangay_Tabgon</option> 
                                        <option value="Barangay_Tabiguian">Barangay_Tabiguian</option> 
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>Role Number</label>
                                    <input type="number" name="role_no" value="<?= $account['role_no']; ?>" class="form-control" placeholder="input 1 = Admin | 0 = Users" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    <?php
                }
                else
                {
                    echo "<h4> NO ID FOUND </h4>";

                }
            }
        ?>




                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
