<?php?>

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

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">S<span>e</span>soul</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
		  <li><a href="likedStandardAcc.php">Who Liked You?</a></li>
          <li class="menu-active"><a href="matched.php">Matched</a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="chat" class="padd-section text-center wow fadeInUp">

  <button class="btn-left" onClick="window.location.href='matched.php'">Back</button>
  <h2>Lorem</h2>

	<div class="containers">
	  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
	  <p>Hello. How are you today?</p>
	</div>

	<div class="containers darker">
	  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
	  <p>Hey! I'm fine. Thanks for asking!</p>
	</div>

	<div class="containers">
	  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
	  <p>Sweet! So, what do you wanna do today?</p>
	</div>

	<div class="containers darker">
	  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
	  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
	</div>
     
	 <div class="col-lg-12 col-md-12">
          <div class="form">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Write your message..." placeholder="Write your message..."></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
	 
  </section>
  
	<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
	  <img class="w3-modal-content" id="img01" style="width:100%">
	</div>

	<script>
	function onClick(element) {
	  document.getElementById("img01").src = element.src;
	  document.getElementById("modal01").style.display = "block";
	}
	</script>

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
