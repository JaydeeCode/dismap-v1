<?php 

session_start();
include('../authentication.php');

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
            <h1>Barangay Statistics</h1>
            <p>Below is the list of <b>Top 20 Barangays</b>. Each barangay have numbers of population and their specific category. <strong>Select specific barangay to see more details.</strong></p>
            </div>
            <div class="images-barangay-zone">
                <a href="agaas/agaas-tbl.php">
                    <div class="cards">
                            <p>Agaas</p>
                    </div>
                </a>
                <a href="antolon/antolon-tbl.php">
                    <div class="cards">
                            <p>Antolon</p>
                    </div>
                </a>
                <a href="bahay/bahay-tbl.php">
                    <div class="cards">
                            <p>Bahay</p>
                    </div>
                </a>
                <a href="cabacongan/cabacongan-tbl.php">
                    <div class="cards">
                            <p>Cabacongan</p>
                    </div>
                </a>
                <a href="canatuan/canatuan-tbl.php">
                    <div class="cards">
                            <p>Canatuan</p>
                    </div>
                </a>
                <a href="colongcogong/colongcogong-tbl.php">
                    <div class="cards">
                            <p>Colongcogong</p>
                    </div>
                </a>
                <a href="gibgos/gibgos-tbl.php">
                    <div class="cards">
                            <p>Gibgos</p>
                    </div>
                </a>
                <a href="guijalo/guijalo-tbl.php">
                    <div class="cards">
                            <p>Guijalo</p>
                    </div>
                </a>
                <a href="hanopol/hanopol-tbl.php">
                    <div class="cards">
                            <p>Hanopol</p>
                    </div>
                </a>
                <a href="haponan/haponan-tbl.php">
                    <div class="cards">
                            <p>Haponan</p>
                    </div>
                </a>
                <a href="ilawod/ilawod-tbl.php">
                    <div class="cards">
                            <p>Ilawod</p>
                    </div>
                </a>
                <a href="lubas/lubas-tbl.php">
                    <div class="cards">
                            <p>Lubas</p>
                    </div>
                </a>
                <a href="malabog/malabog-tbl.php">
                    <div class="cards">
                            <p>Malabog</p>
                    </div>
                </a>
                <a href="mandiclum/mandiclum-tbl.php">
                    <div class="cards">
                            <p>Mandiclum</p>
                    </div>
                </a>
                <a href="maqueda/maqueda-tbl.php">
                    <div class="cards">
                            <p>Maqueda</p>
                    </div>
                </a>
                <a href="pili-centro/pili-centro-tbl.php">
                    <div class="cards">
                            <p>Pili-Centro</p>
                    </div>
                </a>
                <a href="san-roque/san-roque-tbl.php">
                    <div class="cards">
                            <p>San Roque</p>
                    </div>
                </a>
                <a href="san-vicente/san-vicente-tbl.php">
                    <div class="cards">
                            <p>San Vicente</p>
                    </div>
                </a>
                <a href="tabgon/tabgon-tbl.php">
                    <div class="cards">
                            <p>Tabgon</p>
                    </div>
                </a>
                <a href="tabiguian/tabiguian-tbl.php">
                    <div class="cards">
                            <p>Tabiguian</p>
                    </div>
            </div>
        </div>

  </section>


  <?php include ('../../includes/ft-script.php');?>