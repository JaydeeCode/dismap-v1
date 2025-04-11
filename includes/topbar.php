<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><img src="../../images/mdrrmo_logo(1).webp " width="90%" height="40px"></span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <?php if(isset($_SESSION['auth_type'])) : ?>
            <div class="header" onclick="menuToggle();" style='display: flex;cursor:pointer;'>
                <span class="admin_name"><?php echo $_SESSION['auth_user']['fullname']?></span>
                <i class='bx bx-chevron-down' ></i>
            </div>
            <div class="menu" id="tog">
              <p style="text-align:center;"><?php echo $_SESSION['auth_user']['role_type']?></p>
                <div class="menu_item">
                      <a href="../../admin/accounts/account-tbl.php">
                        <i class="bx bx-pencil"></i>Edit Account
                      </a>
                </div>
                <div class="menu_item">
                  <a href="../../logout.php">
                    <i class="bx bx-log-out"></i>Log out
                  </a>
            </div>

          </div>
          
      </div>
      <?php endif; ?>
      <script>
        function menuToggle() {
            var x = document.getElementById("tog");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
    </script>
  </nav>