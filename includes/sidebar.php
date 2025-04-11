<?php
$page=substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name"><img src="../../images/logo-icon.webp" alt="logo" width="100%" height="100%"></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../dashboard/index.php" class="<?= $page == "index.php"? 'active':'';?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../mapping/flood.php" class="<?= $page == "flood.php"? 'active':'';?>">
            <i class='bx bx-map' ></i>
            <span class="links_name">Mapping</span>
          </a>
        </li>
        <li>
          <a href="../disaster-records/disaster-records.php" class="<?= $page == "disaster-records.php"? 'active':'';?>">
            <i class='bx bx-file' ></i>
            <span class="links_name">Disaster Records</span>
          </a>
        </li>
        <li>
          <a href="../barangay-statistics/barangay-statistics.php" class="<?= $page == "barangay-statistics.php"? 'active':'';?>">
            <i class='bx bxs-edit' ></i>
            <span class="links_name">Barangay Statistics</span>
          </a>
        </li>
        <!--<li>-->
        <!--  <a href="../map-hover/map-hover.php " class="<?= $page == "map-hover.php"? 'active':'';?>">-->
        <!--    <i class='bx bxs-detail'></i>-->
        <!--    <span class="links_name">Map hover details</span>-->
        <!--  </a>-->
        <!--</li>-->
        <li>
          <a href="../accounts/account-tbl.php">
            <i class='bx bxs-user-account' class="<?= $page == "account-tbl.php"? 'active':'';?>"></i>
            <span class="links_name">Accounts</span>
          </a>
        </li>
        <li>
          <a href="../disaster-records/logs.php" class="<?= $page == "logs.php"? 'active':'';?>">
          <i class='bx bx-history'></i>
            <span class="links_name">Logs</span>
          </a>
        </li>
        <li class="log_out">
           <span class="links_name"><div class="copyright">2022 © BSIT-4A(TEAM A)<br><br>
    PARTIDO STATE UNIVERSITY</div>
        </span>
        </li>
      </ul>
  </div>