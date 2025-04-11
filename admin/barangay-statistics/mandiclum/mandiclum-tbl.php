<?php

session_start();
require '../../dbconfig.php';
include('../authentication.php');

if(isset($_SESSION['auth']))
{
    if($_SESSION['role_no'] != "1"){
        header('location:../../../logout.php');
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

    <title>Barangay Statistics</title>
</head>
<body>
<?php include('../../authentication.php');?>
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
    <div class="container-fluid mt-5">

    <?php include('../../../message.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Barangay Mandiclum Data
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
                                    $query = "SELECT * FROM barangay_data WHERE barangay_name='Mandiclum'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $mandiclum)
                                        {
                                            ?>
                                            <tr>
                                                <td style="display:none;"><?= $mandiclum['id']; ?></td>
                                                <td><?= $mandiclum['zone']; ?></td>
                                                <td><?= $mandiclum['male']; ?></td>
                                                <td><?= $mandiclum['female']; ?></td>
                                                <td><?= $mandiclum['youth']; ?></td>
                                                <td><?= $mandiclum['senior_citizen']; ?></td>
                                                <td><?= $mandiclum['pregnant']; ?></td>
                                                <td><?= $mandiclum['pwd']; ?></td>
                                                <td><?= $mandiclum['children']; ?></td>
                                                <td><?= $mandiclum['no_evacuations']; ?></td>
                                                <td id="print-btn" class="col-md-1"><?= $mandiclum['created_date']; ?></td>
                                                <td id="print-btn" class="col-md-1"><?= $mandiclum['modified_date']; ?></td>
                                                <td id="print-btn"  class="col-md-1.1">
                                                    <a href="edit-data.php?id=<?= $mandiclum['id']; ?>" class="btn btn-success btn">Edit</a>
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
                        <a href="../barangay-statistics.php" class="btn btn-primary float-start" id="print-btn">Back</a>
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