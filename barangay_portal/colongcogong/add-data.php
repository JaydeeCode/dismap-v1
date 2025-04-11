<?php
session_start(); 
if(!isset($_SESSION['auth'])){
    header("Location: ../../index.php");
}


if(isset($_SESSION['auth'])){
    if($_SESSION['role_no'] == "1")
    {
        header('location: ../../admin/dashboard/statistics.php');
    }
}
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
                        <h4>Input Barangay Colongcogong Data 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label> Barangay </label>
                                <select class="form-control form-select mb-3" aria-label=".form-select-lg example" name="barangay_name" required>
                                    <option value="">--Select--</option>
                                    <option value="Colongcogong">Colongcogong</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Zone</label>
                                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="zone" required>
                                        <option value="">--Select--</option>
                                        <option value="Zone 1">Zone 1</option>
                                        <option value="Zone 2">Zone 2</option>
                                        <option value="Zone 3">Zone 3</option>
                                        <option value="Zone 4">Zone 4</option>
                                        <option value="Zone 5">Zone 5</option>
                                        <option value="Zone 6">Zone 6</option>
                                        <option value="Zone 7">Zone 7</option> 
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>Male</label>
                                <input type="number" name="male" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>Female</label>
                                <input type="number" name="female" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>Youth</label>
                                <input type="number" name="youth" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>Senior Citizen</label>
                                <input type="number" name="senior_citizen" class="form-control" placeholder="Input number only" required>
                            </div>
                             <div class="mb-3">
                                <label>Pregnant</label>
                                <input type="number" name="pregnant" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>PWD</label>
                                <input type="number" name="pwd" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>Children</label>
                                <input type="number" name="children" class="form-control" placeholder="Input number only" required>
                            </div>
                            <div class="mb-3">
                                <label>Number of Evacuation Center</label>
                                <input type="number" name="no_evacuations" class="form-control" placeholder="Input number only" required>
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
