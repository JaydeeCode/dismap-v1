<?php

require '../dbconfig.php';
include('authentication.php');

if(isset($_SESSION['auth']))
{
    if($_SESSION['role_no'] != "1"){
        header('location:../../logout.php');
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style-print.css" media="print" >
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Accounts</title>
</head>
<body>

    <div class="container-fluid mt-5">
    <?php include('../../message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Accounts
                            <a href="add-data.php" class="btn btn-primary float-end" id="print-btn">Add Account</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <!--<th>Password</th>-->
                                    <th id="print-btn">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM account";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $account)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $account['fullname']; ?></td>
                                                <td><?= $account['username']; ?></td>
                                                <!--<td><?= $account['password']; ?></td>-->
                                                <td id="print-btn">
                                                    <a href="edit-data.php?id=<?= $account['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$account['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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