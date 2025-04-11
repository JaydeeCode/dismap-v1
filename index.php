<?php
include 'admin/dbconfig.php';
session_start();

if(isset($_SESSION['auth'])){
	header("Location: admin/dashboard/index.php");
	exit(0);
}


if(isset($_POST['login_btn'])){
	$username = mysqli_real_escape_string($con,$_POST["username"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	
	$login_query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
	$login_query_run = mysqli_query($con,$login_query);
	
	if(mysqli_num_rows($login_query_run) > 0){
		foreach($login_query_run as $data){
				$user_id = $data['id'];
				$fullname = $data['fullname'];
				$username = $data['username'];
				$role_type = $data['role_type'];
				$role_no = $data['role_no'];
		}
		$_SESSION['auth']= true;
		$_SESSION['role_no'] = $role_no;
		$_SESSION['auth_type']= "$role_type";
		$_SESSION['auth_user']= [
			'user_id' => $user_id,
			'fullname' => $fullname,
			'username' => $username,
			'role_type' => $role_type,
		];

		if($_SESSION['auth_type']== 'Mdrrmo Head'){
			header("location:admin/dashboard/index.php");
		}
		if($_SESSION['auth_type']== 'Admin'){
			header("location:admin/dashboard/index.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Agaas'){
			header("location:barangay_portal/agaas/agaas-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Antolon'){
			header("location:barangay_portal/antolon/antolon-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Bahay'){
			header("location:barangay_portal/bahay/bahay-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Cabacongan'){
			header("location:barangay_portal/cabacongan/cabacongan-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Canatuan'){
			header("location:barangay_portal/canatuan/canatuan-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Colongcogong'){
			header("location:barangay_portal/colongcogong/colongcogong-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Gibgos'){
			header("location:barangay_portal/gibgos/gibgos-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Guijalo'){
			header("location:barangay_portal/guijalo/guijalo-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Hanopol'){
			header("location:barangay_portal/hanopol/hanopol-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Haponan'){
			header("location:barangay_portal/haponan/haponan-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Ilawod'){
			header("location:barangay_portal/ilawod/ilawod-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Lubas'){
			header("location:barangay_portal/lubas/lubas-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Malabog'){
			header("location:barangay_portal/malabog/malabog-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Mandiclum'){
			header("location:barangay_portal/mandiclum/mandiclum-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Maqueda'){
			header("location:barangay_portal/maqueda/maqueda-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Pili-Centro'){
			header("location:barangay_portal/pili-centro/pili-centro-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_San Roque'){
			header("location:barangay_portal/san-roque/san-roque-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_San Vicente'){
			header("location:barangay_portal/san-vicente/san-vicente-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Tabgon'){
			header("location:barangay_portal/tabgon/tabgon-tbl.php");
		}
		if($_SESSION['auth_type']== 'Barangay_Tabiguian'){
			header("location:barangay_portal/tabiguian/tabiguian-tbl.php");
		}
	}
		
	else{
		echo "<script>alert('Login details incorrect');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<link rel="icon" href="images/logo-icon.webp">
</head>
<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/logo-icon.webp">
		</div>
		<div class="login-content">

			<form action="#" method="POST">
				<img src="images/mdrrmo_logo.jpg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           			<div class="i">
           		   		<i class="fas fa-user"></i>
           			</div>
           			<div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" required>
           			</div>
           		</div>
           		<div class="input-div pass">
           			<div class="i"> 
           		    	<i class="fas fa-lock"></i>
           			</div>
           			<div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<input type="submit" name="login_btn" class="btn" value="Login">
				<br>
				<p class="guest">Don't have an account? 
				
				<a href="normal-user/dashboard/index.php">GUEST LOGIN</a>.</p>
				<label id="error" class="label label-danger pull-right"></label> 

            </form>

        </div>
    </div>
    <script type="text/javascript">
    const inputs = document.querySelectorAll(".input");

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
</script>


</body>
</html>