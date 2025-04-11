<?php 
session_start();
include ('../../includes/header.php');

include ('../../includes/sidebar.php');

include ('../../includes/topbar.php'); ?>

<?php
require '../dbconfig.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style-print.css" media="print" >
    <!-- Bootstrap CSS -->
    <link type="text/css" href="bootstrap.css" rel="stylesheet">

    <title>Disaster Records</title>
</head>
<body>
    <div class="container-lg mt-10">

    <?php include('../../message.php');?>

        <div class="row">
            <div class="col-md-20"   style="margin-top:70px">
                <div class="card">
                    <div class="card-header">
                        <h4>Logs </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Disaster</th>
                                    <th>Barangay</th>
                                    <th>Risk Level</th>
                                    <th>Affected Zones</th>
                                    <th id="print-btn">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $squery = mysqli_query($con, "select * from map_hover");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
                                        <td style="display:none;">'.$row['id'].'</td>
                                        <td>'.$row['disaster'].'</td>
                                        <td>'.$row['barangay'].'</td>
                                        <td>'.$row['risk_level'].'</td>
                                        <td>'.$row['affected_zones'].'</td>
                                        <td id="print-btn">
                                                    <a href="edit-data.php?id='.$row['id'].'" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="'.$row['id'].'" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                            </td>
                                    </tr>
                                    ';
                                }

                            ?>
                                
                            </tbody>
                            
                        </table>
                        <p style="page-break-after: auto;"></p> 
                        <a href="../dashboard/index.php" class="btn btn-primary float-start" id="print-btn">Back</a>
                        <button onclick="window.print()" class="btn btn-success float-end" id="print-btn">  Print  </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>






<?php include ('../../includes/ft-script.php');?>