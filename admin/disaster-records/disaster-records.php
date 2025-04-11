<?php 
session_start();
include ('../../includes/header.php');

include ('../../includes/sidebar.php');

include ('../../includes/topbar.php'); ?>

     <div class="home-content">
      <style>
  .disaster_record_content{
           overflow-x:hidden;
           padding: 5px;
            /*margin-left: 50px;*/
            /*margin-right: 50px;*/
            margin: 0 80px 0 80px;
        }
        .disaster_record_content .text{
            grid-column: 1 / span 10;
            grid-row: 1 / span 5;

            
        }
        
        .disaster_record_content .text h1{
            text-align: center;
            margin: 20px;
        }
        
        .disaster_record_content .text p{
            text-align: justify;
            text-indent: 5rem;
            margin: 20px;
        }
        
        .disaster_record_content .images{
         width: cal(100% / 4 - 50px);
         display: flex;
         border-top-right-radius: 10px;
         border-top-left-radius: 10px;
          align-items: center;
          justify-content: space-between;
          margin-top: 10px;
        overflow-x:scroll;
        overflow-y:hidden;
        }
        
        
        
        .disaster_record_content .images .cards{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 3rem;
            background: #072945;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin: 1px;
            align-items: center;
            justify-content: center;
        }
        .disaster_record_content .images .cards img{
            border-radius: 10px;
            margin: 5px;
        }
        
        .disaster_record_content .images .cards:hover{
            transform: scale(1.05);
        }
        
        .disaster_record_content .images .cards p{
            grid-column: 1 / span 1;
            grid-row: 2 / span 2;
            color: white;
            justify-self: center;
            align-self: center;
        }
        
        .disaster_record_content .images a{
            text-decoration: none;
        }
        
        @media only screen and (max-width: 1000px) {
            .disaster_record_content {
                    margin: 0;
                 }
        }
        
        </style>
            <div class="disaster_record_content">
                <div class="text">
                <h1>Disaster Prone Area Record in Caramoan</h1>
                <p>The proportion of the country's population that lives in locations where there is a high danger of dying or suffering damage from common hazards including landslides, earthquakes, floods, droughts, and volcanoes. Each significant noticeable hazard that is relevant may have its own indicator assessment.</p>
                <p>Physical exposure to a hazardous event and vulnerability to the hazard are two factors that influence the probability of fatality in a disaster brought on by natural hazards. Utilizing historical and other data on vulnerabilities and hazards, the indicator calculates the risk at the sub-national level. The national values are then calculated by averaging the sub-national danger levels.</p>
                </div>
                <div class="images">
                    <a href="landslide.php">
                        <div class="cards">
                                <img src="images/Landslide(1).png" alt="" style="width: 260px; height: 180px;">
                                <p>Landslide</p>
                        </div>
                    </a>
                    <a href="soil_erosion.php">
                        <div class="cards">
                                <img src="images/Soil Erosion(1).png" alt="" style="width: 260px; height: 180px;">
                                <p>Soil Erosion</p>
                        </div>
                    </a>
                    <a href="floods.php">
                        <div class="cards">
                                <img src="images/Floods(1).png" alt="" style="width: 260px; height: 180px;">
                                <p>Floods</p>
                        </div>
                    </a>
                    <a href="tsunami.php">
                        <div class="cards">
                                <img src="images/Tsunami(1).png" alt="" style="width: 260px; height: 180px;">
                                <p>Tsunami</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

  </section>

  <?php include ('../../includes/ft-script.php');?>