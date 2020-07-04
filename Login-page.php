<!DOCTYPE html>
<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement


Honor Code:
This is my own work and I have not received any unauthorized help in completing this. I have not copied from my classmate, friend, nor any unauthorized resource.
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. If proven guilty, I won't be credited any points for this endeavor.
-->
<?php
	include "conn.php";
?>
	<html>
		<head>
			<title>Login form</title>
			<!-- Bootstrap css-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<!-- Script-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<!-- link to login-page css styles-->
			<link rel="stylesheet" type="text/css" href="Style.css">
		</head>
		<body>
			<!-- login box body-->
			<div class="loginbox">
				<img src="icon1.png" class="icon">
					
				<h1>Login to Comu-Fy</h1>
				<!-- Loginpage form-->
				<form method="post" action="Loginpage.php">
					<p>Username</p>
					<input type="text" name="uname" placeholder="Enter Username">
					<p>Password</p>
					<input type="password" name="pname" placeholder="Enter Password">
					<input type="submit" name="" value="Login">
					<h5> or <h5>	
					<!-- Modal signup form-->
					<div class="text-center">
						<a href=""  data-toggle="modal" data-target="#modalRegisterForm">Sign up</a>
					</div>
				</form>
			</div>
			
			<div class="sform">
				<!-- Signup form-->
				<form method="post" action="Signup.php">
					<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								</div>
								<!-- Signup form body (modal)-->
								<div class="modal-body mx-3">
									<div class="md-form mb-5">
										<i class="fas fa-user prefix grey-text"></i>
										<input type="text" id="orangeForm-name" class="form-control validate" name="uname">
										<label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
									</div>
									
									<div class="md-form mb-5">
										<i class="fas fa-envelope prefix grey-text"></i>
										<input type="email" id="orangeForm-email" class="form-control validate" name="ename">
										<label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
									</div>

									<div class="md-form mb-4">
										<i class="fas fa-lock prefix grey-text"></i>
										<input type="password" id="orangeForm-pass" class="form-control validate" name="pname">
										<label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
									</div>

								</div>
									<!-- Sign up button-->
									<div class="modal-footer d-flex justify-content-center">
										<button type="submit" class="btn btn-deep-orange">Sign up</button>
									</div>
							</div>
						</div>
					</div>
				</form>	
			</div>
		</body>
		</html>
