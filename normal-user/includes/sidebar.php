<?php
$page=substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name"><img src="../images/logo-icon.webp" alt="logo" width="100%" height="100%"></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../dashboard/index.php "  class="<?= $page == "index.php"? 'active':'';?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../mapping/flood.php " class="<?= $page == "flood.php"? 'active':'';?>">
            <i class='bx bx-map' ></i>
            <span class="links_name">Mapping</span>
          </a>
        </li>
     
        <li>
          <a href="../disaster_preparedness/disaster_preparedness.php " class="<?= $page == "disaster_preparedness.php"? 'active':'';?>">
            <i class='bx bx-file' ></i>
            <span class="links_name">Disaster Preparedness</span>
          </a>
        </li>
        <li class="log_out">
           <span class="links_name"><div class="copyright">2022 © BSIT-4A(TEAM A)<br><br>
    PARTIDO STATE UNIVERSITY</div>
        </span>
        </li>
      </ul>
  </div>