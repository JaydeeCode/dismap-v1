<?php

session_start();
require '../../dbconfig.php';

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

    <title>Disaster Records</title>
</head>
<body>
<?php
include('../authentication.php');?>
<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal" tabindex="-1" id="deletemodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete this Data?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="delete-code/maqueda-delete-code.php" method="POST" >
      <input type="hidden" name="delete-id" id="delete_id">  

      <div class="modal-body">
        <h3>Are you sure you want to Delete?</h3>
      </div>
      <div class="modal-footer">
        
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="delete-maqueda" class="btn btn-danger 
            btn">Delete</button>
                
    </form>
      </div>
    </div>
  </div>
</div>

    <div class="container-fluid mt-5">

    <?php include('../../../message.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Barangay Maqueda | Flood Records
                            <a href="add-data.php" class="btn btn-primary float-end" id="print-btn">Add Data</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Zone</th>
                                    <th>Disaster</th>
                                    <th>No. of Disaster Map</th>
                                    <th>Population At Risk</th>
                                    <th>Recommendation</th>
                                    <th>Remarks</th>
                                    <th id="act">Created Date</th>
                                    <th id="act">Modified Date</th>
                                    <th id="act">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM disaster_records WHERE barangay_name='Maqueda' AND disaster='flood'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $flood)
                                        {
                                            ?>
                                            <tr>
                                                <td style="display:none;"><?= $flood['id']; ?></td>
                                                <td><?= $flood['zone']; ?></td>
                                                <td><?= $flood['disaster']; ?></td>
                                                <td><?= $flood['number_map']; ?></td>
                                                <td><?= $flood['population_at_risk']; ?></td>
                                                <td><?= $flood['recommendation']; ?></td>
                                                <td class="col-md-1"><?= $flood['remarks']; ?></td>
                                                <td id="act" class="col-md-1"><?= $flood['created_date']; ?></td>
                                                <td id="act" class="col-md-1"><?= $flood['modified_date']; ?></td>
                                                <td id="act-con"  class="col-md-1">
                                                    <a href="edit-data.php?id=<?= $flood['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm deletebtn">Delete</button>
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
                        <a href="../floods.php" class="btn btn-primary float-start" id="print-btn">Back Disaster Records Home</a>
                        <button onclick="window.print()" class="btn btn-success float-end" id="print-btn">  Print  </button>

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