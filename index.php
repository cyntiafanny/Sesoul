<!--?php
	session_start();

	include 'db.php';

	$_SESSION['message']='';

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_POST['pass']==$_POST['repass']){
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			$nama=$_POST['nama'];
			$umur=$_POST['umur'];
			$lokasi=$_POST['lokasi'];
			$foto='image/'.$_FILES['avatar']['name'];

			if(preg_match("!image!", $_FILES['avatar']['type'])){

				if(copy($_FILES['avatar']['tmp_name'],$foto)){

					$_SESSION['username']=$username;
					$_SESSION['avatar']=$foto;

					$sql="INSERT INTO users(id,username,password,nama,umur,lokasi,foto)
					VALUES('$id','$username','$password','$nama','$umur','$lokasi','$foto')";
					
					if(mysqli_query($conn,$sql)){
						$_SESSION['message']="Registration Successful!";
						header("location:home.php");
					}
					else{
						$_SESSION['message']="Database Error! Could not enter the information";
					}
				}
				else{
					$_SESSION['message']="File upload failed!";
				}

			}
			else{
				$_SESSION['message']="Please upload only JPG, PNG or GIF image!";
			}

		}
		else{
			$_SESSION['message']="Password did not match!";
		}
	}
?-->

<!-- Belom kelar -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sesoul</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>


<section id="hero" class="wow fadeIn">
    <div class="hero-container">
	  <h1>Welcome to Sesoul</h1>
      <h2>Find your Match here...</h2>
      <img src="img/start.png">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      </div>
  </section>
  
  <section id="get-started" class="padd-section text-center wow fadeInUp">
  <!--Modal: Login / Register Form-->
	<div id="modalLRForm" tabindex="-1" role="dialog" >
	  <div class="modal-dialog cascading-modal" role="document">
		<!--Content-->
		<div class="modal-content">

		  <!--Modal cascading tabs-->
		  <div class="modal-c-tabs">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
				  Login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#panel8" role="tab">
				  Register</a>
			  </li>
			</ul>

			<!-- Tab panels -->
			<div class="tab-content">
			  <!--Panel 7-->
			  <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

				<!--Body-->
				<form action="logreg.php" method="post" accept-charset="utf-8">
					<div class="modal-body mb-1">
						<div class="md-form form-sm mb-5">
						<input type="text" id="modalLRInput10" name="username" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput10">Username</label>
						</div>

						<div class="md-form form-sm mb-4">
						<input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput11">Password</label>
						</div>
						<div class="text-center mt-2">
						<input type="submit" name="login" value="Login">
						</div>
					</div>
				</form>
				<!--Footer-->
				<div class="modal-footer">
				  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
				</div>

			  </div>
			  <!--/.Panel 7-->

			  <!--Panel 8-->
			  <div class="tab-pane fade" id="panel8" role="tabpanel">

				<!--Body-->
				<form action="logreg.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
					<div class="md-form form-sm mb-5">
						<input type="text" id="modalLRInput12" name="nama" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
					</div>

					<div class="md-form form-sm mb-5">
						<input type="text" id="modalLRInput13" name="umur" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput13">Age</label>
					</div>

					<div class="md-form form-sm mb-4">
						<input type="text" id="modalLRInput14" name="lokasi" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput14">Location</label>
					</div>
					
					<div class="md-form form-sm mb-4">
						<input type="text" id="modalLRInput15" name="username" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput15">Username</label>
					</div>
					
					<div class="md-form form-sm mb-4">
						<input type="password" id="modalLRInput16" name="password" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput16">Password</label>
					</div>
					
					<div class="md-form form-sm mb-4">
						<input type="password" id="modalLRInput17" name="repass" class="form-control form-control-sm validate">
						<label data-error="wrong" data-success="right" for="modalLRInput17">Re-enter Password</label>
					</div>
					
					<label for="myfile">Profile Picture</label>
					<input type="file" id="avatar" name="avatar" class="inp">
					
					<!-- <?php
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
							echo "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
						} else {
							echo "File is not an image.";
							$uploadOk = 0;
						}
					}
					// Check if file already exists
					if (file_exists($target_file)) {
						echo "Sorry, file already exists.";
						$uploadOk = 0;
					}
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 500000) {
						echo "Sorry, your file is too large.";
						$uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}
					?>-->

					<div class="text-center form-sm mt-2">
						<input type="submit" name="register" value="Register">
					</div>

					</div>
				</form>
			  <!--/.Panel 8-->
			</div>

		  </div>
		</div>
		<!--/.Content-->
	  </div>
	</div>
	<!--Modal: Login / Register Form-->
	</section>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
    Modal LogIn/Register</a>
</div>
  
  <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
