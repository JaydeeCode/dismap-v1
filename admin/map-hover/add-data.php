<?php
session_start();
include('../authentication.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Barangay Statistics</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Account
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Ex. Juan Dela Cruz" required>
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Ex. Juan" required>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="********" required>
                            </div>
                            <div class="mb-3">
                                <label>Role Type</label>
                                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="role_type" required>
                                        <option value="">--Select--</option>
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
                                    <input type="number" name="role_no" class="form-control" placeholder="input 1 = Admin | 0 = Users" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
