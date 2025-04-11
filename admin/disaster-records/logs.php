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

                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $squery = mysqli_query($con, "select * from logstbl order by logdate desc");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
                                        <td>'.$row['user'].'</td>
                                        <td>'.$row['logdate'].'</td>
                                        <td>'.$row['action'].'</td>
                                    </tr>
                                    ';
                                }

                            ?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>






<?php include ('../../includes/ft-script.php');?>