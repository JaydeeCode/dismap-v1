<?php 
session_start();
if(isset($_SESSION['auth'])){
    header('location:../../admin/dashboard/index.php');
}
?>
<?php

    require '../../admin/dbconfig.php';
    // query for (male, female ,etc)
    // --------MALE----------
    $query = "SELECT SUM(male) as 'male' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $male = mysqli_fetch_array($query_run);
    // --------FEMALE--------
    $query = "SELECT SUM(female) as 'female' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $female = mysqli_fetch_array($query_run);
    // --------YOUTH--------
    $query = "SELECT SUM(youth) as 'youth' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $youth = mysqli_fetch_array($query_run);
    // --------SENIOR CITIZEN--------
    $query = "SELECT SUM(senior_citizen) as 'senior_citizen' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $senior_citizen= mysqli_fetch_array($query_run);
    // --------PREGNANT--------
    $query = "SELECT SUM(pregnant) as 'pregnant' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $pregnant= mysqli_fetch_array($query_run);
    // --------PWD--------
    $query = "SELECT SUM(pwd) as 'pwd' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $pwd= mysqli_fetch_array($query_run);
    // --------CHILDREN--------
    $query = "SELECT SUM(children) as 'children' FROM barangay_data ";

    $query_run = mysqli_query($con, $query);
    $children= mysqli_fetch_array($query_run);


    // ------------------QUERY FOR NUMBER OF FLOODS, TSUNAMI, EROSION, LANDSLIDE-----------------------
    
    // -------------LANDSLIDE QUERY FOR TOTAL---------------
    $query = "SELECT disaster,(SUM(number_map)) as 'landslide_total' FROM disaster_records WHERE disaster='Landslide' ";

    $query_run = mysqli_query($con, $query);
    $landslide_total = mysqli_fetch_array($query_run);
    
    // -------------SOIL EROSION QUERY FOR TOTAL---------------
    $query = "SELECT disaster,(SUM(number_map)) as 'erosion_total' FROM disaster_records WHERE disaster='Soil Erosion'";

    $query_run = mysqli_query($con, $query);
    $erosion_total = mysqli_fetch_array($query_run);

    // -------------FLOODS QUERY FOR TOTAL---------------
    $query = "SELECT disaster,(SUM(number_map)) as 'floods_total' FROM disaster_records WHERE disaster='Flood' ";

    $query_run = mysqli_query($con, $query);
    $floods_total = mysqli_fetch_array($query_run);
    
    // -------------TSUNAMI QUERY FOR TOTAL---------------
    $query = "SELECT disaster,(SUM(number_map)) as 'tsunami_total' FROM disaster_records WHERE disaster='Tsunami' ";

    $query_run = mysqli_query($con, $query);
    $tsunami_total = mysqli_fetch_array($query_run);
?>
<?php include ('../includes/header.php');

include ('../includes/sidebar.php');

include ('../includes/topbar.php'); ?>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Population</div>
            <?php
                $query = "SELECT SUM(male + female) as 'population' FROM barangay_data";

                $query_run = mysqli_query($con, $query);
                $population = mysqli_fetch_array($query_run);
                $pop = $population['population'];
                ?>
              <div class="number">
              <?php
              echo number_format("$pop");
            ?>
            </div>
          </div>
          <img src="../images/population.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Male</div>
            <?php
                  $query = "SELECT SUM(male) as 'male' FROM barangay_data ";

                  $query_run = mysqli_query($con, $query);
                  $male = mysqli_fetch_array($query_run);
                  $mal = $male['male'];
              ?>
              <div class="number">
              <?php
                echo number_format("$mal");
              ?>
              </div>
          </div>
          <img src="../images/male.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Female</div>
            <?php
                $query = "SELECT SUM(female) as 'female' FROM barangay_data ";

                $query_run = mysqli_query($con, $query);
                $female = mysqli_fetch_array($query_run);
                $fem = $female['female'];
                ?>
                  <div class="number">
                <?php
                echo  number_format("$fem");
            ?>
            </div>
          </div>
          <img src="../images/female.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Youth</div>
            <?php
                  $query = "SELECT SUM(youth) as 'youth' FROM barangay_data ";

                  $query_run = mysqli_query($con, $query);
                  $youth = mysqli_fetch_array($query_run);
                  $you = $youth['youth'];
                  ?>
                  <div class="number">
                  <?php
                  echo  number_format("$you");
                  ?>
              </div>
          </div>
          <img src="../images/youth.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Senior Citizen</div>
            <?php
                $query = "SELECT SUM(senior_citizen) as 'senior_citizen' FROM barangay_data ";

                $query_run = mysqli_query($con, $query);
                $senior_citizen = mysqli_fetch_array($query_run);
                $sen = $senior_citizen['senior_citizen'];
                ?>
                  <div class="number">
                <?php
                echo number_format("$sen");
            ?>
            </div>
          </div>
          <img src="../images/senior-citizen.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Pregnant</div>
            <?php
                  $query = "SELECT SUM(pregnant) as 'pregnant' FROM barangay_data ";

                  $query_run = mysqli_query($con, $query);
                  $pregnant = mysqli_fetch_array($query_run);
                  $preg = $pregnant['pregnant'];
                  ?>
                  <div class="number">
                  <?php
                  echo number_format($preg);
              ?>
              </div>
          </div>
          <img src="../images/pregnant.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">PWD</div>
            <?php
                  $query = "SELECT SUM(pwd) as 'pwd' FROM barangay_data ";

                  $query_run = mysqli_query($con, $query);
                  $pwd = mysqli_fetch_array($query_run);
                  $pw = $pwd['pwd'];
                  ?>
                <div class="number">
                  <?php
                         echo  number_format("$pw");
                  ?>
                </div>
          </div>
          <img src="../images/pwd.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Children</div>
            <?php
                $query = "SELECT SUM(children) as 'children' FROM barangay_data ";

                $query_run = mysqli_query($con, $query);
                $children = mysqli_fetch_array($query_run);
                $chi = $children['children'];
                ?>
              <div class="number">
                <?php
                echo  number_format(" $chi");
                ?>
            </div>
          </div>
          <img src="../images/children.svg">
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Evacuations</div>
            <?php
                  $query = "SELECT SUM(no_evacuations) as 'no_evacuations' FROM barangay_data ";

                  $query_run = mysqli_query($con, $query);
                  $no_evacuations = mysqli_fetch_array($query_run);
                  $evac = $no_evacuations['no_evacuations'];
                    ?>
                  <div class="number">
                  <?php
                   echo number_format("$evac"); 
                  ?> 
                  </div>

          </div>
          <img src="../images/evacuations.svg">
        </div>
      </div>

      <div class="box-boxes">
        <div class="recent-box box">
          <div class="title">Population Overview</div>
          <div class="box-details">
            <!-- content for pie chart -->
            <div id="piechart" style="width: 100%; height: 400px; "></div>
          </div>
        </div>
      </div>

      <div class="box-boxes">
        <div class="recent-box box">
          <div class="title">Disaster Records Overview</div>
          <div class="box-details">
            <!-- content for pie chart disaster mapp -->
            <div id="piechart_2" style="width: 100%; height: 400px;"></div>
          </div>
        </div>
      </div>

      <div class="box-boxes">
        <div class="recent-box box">
          <div class="title">Evacuation Centers</div>
          <div class="box-details">
            <ul class="details">
              <li class="topic">Barangay</li>
              <li><a href="#">Tabgon</a></li>
              <li><a href="#">Bikal</a></li>
              <li><a href="#">Canatuan</a></li>
              <li><a href="#">Haponan</a></li>
              <li><a href="#">Gibgos</a></li>
              <li><a href="#">Malabog</a></li>
             
            </ul>
            <ul class="details">
            <li class="topic">Link to Map</li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://goo.gl/maps/R5w8x6fxLzcNCCrp9" target="_blank" style=" color:white; ">Locate</a></li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://maps.app.goo.gl/sfEPnXWRYekuYKZRA" target="_blank" style=" color:white; ">Locate</a></li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://goo.gl/maps/nyA87HrQnYFdtx1u6" target="_blank" style=" color:white; ">Locate</a></li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://goo.gl/maps/RNUkSumhsHDJGYAM7" target="_blank" style=" color:white; ">Locate</a></li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://maps.app.goo.gl/orD2ocBnSpmpP4y57" target="_blank" style=" color:white; ">Locate</a></li>
            <li style="background-color:rgb(0, 0, 94); text-align:center; border-radius: 10px;"><a href="https://maps.app.goo.gl/c2heosFMQjGwhXsq9" target="_blank" style=" color:white; ">Locate</a></li>
          </ul>
          </div>
    </div>
  </section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Male',     <?php echo $male['male'];?>],
          ['Female',      <?php echo $female['female'];?>],
          ['Youth',  <?php echo $youth['youth'];?>],
          ['Senior Citizen', <?php echo $senior_citizen['senior_citizen'];?>],
          ['Pregnant',    <?php echo $pregnant['pregnant'];?>],
          ['PWD',    <?php echo $pwd['pwd'];?>],
          ['Children',    <?php echo $children['children'];?>]
        ]);

        var options = {
          title: "This is the population overview of the top 20 Barangays that are prone to Disasters.",
    backgroundColor: 'transparent',
    pieHole: 0.5,
    colors: [ "cornflowerblue", 
            "olivedrab", 
            "orange", 
            "tomato", 
            "crimson", 
            "purple", 
            "turquoise", 
            "forestgreen", 
            "navy", 
            "gray"],
    pieSliceText: 'value',
    tooltip: {
    text: 'number'
    },
    fontName: 'Open Sans',
    legend: {position: 'bottom'}
};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Floods',     <?php echo $floods_total['floods_total'];?>],
    ['Lanslide',      <?php echo $landslide_total['landslide_total'];?>],
    ['Tsunami', <?php echo $tsunami_total['tsunami_total'];?>],
    ['Soil-Erosion',  <?php echo $erosion_total['erosion_total'];?>]
  ]);

  var options = {
    title: "This is the number of Disaster Map from top 20 Barangays that are affected by previous disasters. ",
    backgroundColor: 'transparent',
    pieHole: 0.5,
    colors: [ "cornflowerblue", 
            "olivedrab", 
            "orange", 
            "tomato" 
            ],
    pieSliceText: 'value',
    tooltip: {
    text: 'number'
    },
    fontName: 'Open Sans',
    legend: {position: 'bottom'}
};

  var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));

  chart.draw(data, options);
}
</script>

<?php include ('../includes/ft-script.php');?>