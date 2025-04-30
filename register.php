	<?php
	if($_SERVER['REQUEST_METHOD'] === "POST"){
		// echo "<pre>";
		// print_r($_SERVER);
		// echo "</pre>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit;

	$firstname = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO users(`first_name`,`last_name`,`phone`,`email`,`password`)
	VALUES('$firstname','$last_name','$phone','$email','$password')";
	$query = mysqli_query($conn,$sql);

	if($query){
		echo "Register Successfully";
	}else{
		echo "Error";
	}

	}
	
	?>
	<div class="main-content main-content-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index-2.html">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Authentication
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="site-main">
						<h3 class="custom_blog_title">
							Authentication
						</h3>
						<div class="customer_login">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="login-item">
										<h5 class="title-login">Register now</h5>
										<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="register">
											<p class="form-row form-row-wide">
												<label class="text">First Name</label>
												<input title="fisrt_name" type="text" name="first_name" class="input-text">
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Last Name</label>
												<input title="last_name" type="text" name="last_name" class="input-text">
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Phone</label>
												<input title="phone" type="text" name="phone" class="input-text">
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Email</label>
												<input title="name" type="email" name="email" class="input-text">
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Password</label>
												<input title="pass" type="password" name="password" class="input-text">
											</p>
											<p class="form-row">
												<span class="inline">
													<input type="checkbox" name="tandc" value="tandc" id="cb2">
													<label for="cb2" class="label-text">I agree to <span>Terms & Conditions</span></label>
												</span>
											</p>
											<p class="">
												<input type="submit" class="button-submit" value="Register Now">
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>