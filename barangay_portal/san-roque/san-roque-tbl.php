<?php

session_start();
require '../dbconfig.php';
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
    <link rel="stylesheet" type="text/css" href="../style-print.css" media="print" >
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Barangay San Roque</title>
</head>
<body>
<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

 <div class="modal" tabindex="-1" id="deletemodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete this Data?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form action="code.php" method="POST" >
            <input type="hidden" name="delete-id" id="delete_id">  

            <div class="modal-body">
            <h3>Are you sure you want to Delete?</h3>
            </div>
            <div class="modal-footer">
                
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="delete" class="btn btn-danger 
            btn">Delete</button>
                    
        </form>
      </div>
    </div>
  </div>
</div>
<?php
            include('../authentication.php');
    ?> 
    <div class="container-fluid mt-5">

    <?php include('../../message.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Barangay San Roque Data
                            <a href="add-data.php" class="btn btn-primary float-end" id="print-btn">Add Data</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Zone</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Youth</th>
                                    <th>Senior Citizen</th>
                                    <th>Pregnant</th>
                                    <th>PWD</th>
                                    <th>Children</th>
                                    <th>No. of Evacuation Center</th>
                                    <th id="print-btn">Created-Date</th>
                                    <th id="print-btn">Modified-Date</th>
                                    <th id="print-btn">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM barangay_data WHERE barangay_name='San Roque'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $san_roque)
                                        {
                                            ?>
                                            <tr>
                                                <td style="display:none;"><?= $san_roque['id']; ?></td>
                                                <td><?= $san_roque['zone']; ?></td>
                                                <td><?= $san_roque['male']; ?></td>
                                                <td><?= $san_roque['female']; ?></td>
                                                <td><?= $san_roque['youth']; ?></td>
                                                <td><?= $san_roque['senior_citizen']; ?></td>
                                                <td><?= $san_roque['pregnant']; ?></td>
                                                <td><?= $san_roque['pwd']; ?></td>
                                                <td><?= $san_roque['children']; ?></td>
                                                <td><?= $san_roque['no_evacuations']; ?></td>
                                                <td id="print-btn" class="col-md-1"><?= $san_roque['created_date']; ?></td>
                                                <td id="print-btn" class="col-md-1"><?= $san_roque['modified_date']; ?></td>
                                                <td id="print-btn"  class="col-md-1.1">
                                                    <a href="edit-data.php?id=<?= $san_roque['id']; ?>" class="btn btn-success btn">Edit</a>
                                                    <button type="button" class="btn btn-danger btn deletebtn">Delete</button>
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
                        <button type="button" onclick="window.print()" class="btn btn-success float-start" id="print-btn">  Print  </button>
                        <a href="../../logout.php" class="btn btn-danger float-end"  id="print-btn">Logout</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
       $(document).ready(function(){
        $('.deletebtn').on('click',function(){

            $('#deletemodal').modal('show');
            $tr =  $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
        })

       })
    
    </script>

</body>
</html>