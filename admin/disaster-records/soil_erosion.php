<?php
session_start();
include ('../../includes/header.php');

include ('../../includes/sidebar.php');

include ('../../includes/topbar.php'); ?>

     <div class="home-content">
        <style>
            .disaster_record_content_barangay-zone{
   padding: 25px;
}

.disaster_record_content_barangay-zone .text-barangay-zone{
    grid-column: 1 / span 10;
    grid-row: 1 / span 2;
}

.disaster_record_content_barangay-zone .text-barangay-zone h1{
    text-align: center;
    margin: 20px;
}

.disaster_record_content_barangay-zone .text-barangay-zone p{
    text-align: justify;
    text-indent: 5rem;
    margin: 20px;
}

.disaster_record_content_barangay-zone .images-barangay-zone{
    grid-column: 1 / span 10;
    grid-row: span 5 / span 10;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(7, 1fr);
    grid-gap: 10px;
}



.disaster_record_content_barangay-zone .images-barangay-zone .cards{
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 3rem;
    background: #072945;
    border-radius: 10px;
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
}

.disaster_record_content_barangay-zone .images-barangay-zone .cards:hover{
    transform: scale(1.05);
    background: #0B4373;
}

.disaster_record_content_barangay-zone .images-barangay-zone .cards img{
    grid-column: 1 / span 1;
    grid-row: 1 / span 1;
    width: 100%;
    height: 100%;
    border-radius: 10px 10px 0 0 ;
}
.disaster_record_content_barangay-zone .images-barangay-zone .cards p{
    grid-column: 1 / span 1;
    grid-row: 2 / span 2;
    color: white;
    justify-self: center;
    align-self: center;
}

.disaster_record_content_barangay-zone .images-barangay-zone a{
    text-decoration: none;
}
     </style>
<div class="map">
    <div class="disaster_record_content_barangay-zone">
        <div class="text-barangay-zone">
        <h1>Barangay Soil Erosion Prone</h1>
        <p>Below are the list of Barangays that are prone to disasters such as landslide, soil erosion, floods, and tsunami. <strong>Select specific barangay to see more details.</strong></p>
        </div>
        <div class="images-barangay-zone">
            <a href="soil_erosion-content/antolon-tbl.php">
                <div class="cards">
                        <p>Antolon</p>
                </div>
            </a>
            <a href="soil_erosion-content/bahay-tbl.php">
                <div class="cards">
                        <p>Bahay</p>
                </div>
            </a>
            <a href="soil_erosion-content/colongcogong-tbl.php">
                <div class="cards">
                        <p>Colongcogong</p>
                </div>
            </a>
            <a href="soil_erosion-content/guijalo-tbl.php">
                <div class="cards">
                        <p>Guijalo</p>
                </div>
            </a>
            <a href="soil_erosion-content/hanopol-tbl.php">
                <div class="cards">
                        <p>Hanopol</p>
                </div>
            </a>
    
            <a href="soil_erosion-content/malabog-tbl.php">
                <div class="cards">
                        <p>Malabog</p>
                </div>
            </a>
            <a href="soil_erosion-content/pili-centro-tbl.php">
                <div class="cards">
                        <p>Pili-Centro</p>
                </div>
            </a>
            <a href="#">
                <div class="null">
                </div>
            </a>
            <a href="#">
                <div class="null">
                </div>
            </a>
            <a href="#">
                <div class="null">
                </div>
            </a>
            <a href="#">
                <div class="null">
                </div>
            </a>
            <a href="#">
                <div class="null">
                </div>
            </a>
            <a href="disaster-records.php">
                <div class="cards cards-back" style="width: 50%;background:#0d6efd;">
                        <p>Back</p>
                </div>
            </a>
        </div>
    </div>

  </section>

  <?php include ('../../includes/ft-script.php');?>