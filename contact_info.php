
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Once Upon A Time &mdash; Weddings & Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="Sivaneswaran Thuvarahan" />

  <!-- 
	//////////////////////////////////////////////////////

	DESIGNED & DEVELOPED by Sivaneswaran Thuvarahan
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<div class="fh5co-hero" data-section="home">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="display-t">
					<div class="display-tc">
						<div class="container">
							<div class="col-md-10 col-md-offset-1">
								<div class="animate-box">
									<h2>Once Upon A Time</h2>
                                    <h2>Weddings &amp; Events</h2>
                                    <h1>Provided to you by</h1>
                                    <h1>Rowena Suaris</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="">
            <div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>Contact Info & Inquiries</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
                    <form method="post" action="contact_info.function.php" class="contact_info_form">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="first_name" class="sr-only">First Name</label>
                                <input type="name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="last_name" class="sr-only">Last Name</label>
                                <input type="name" class="form-control" id="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                            <?php
                                $district_option = array(
                                    'Ampara' => 'Ampara',
                                    'Anuradhapura' => 'Anuradhapura',
                                    'Badulla' => 'Badulla',
                                    'Batticaloa' => 'Batticaloa',
                                    'Colombo' => 'Colombo',
                                    'Galle' => 'Galle',
                                    'Gampaha' => 'Gampaha',
                                    'Hambantota' => 'Hambantota',
                                    'Jaffna' => 'Jaffna',
                                    'Kalutara' => 'Kalutara',
                                    'Kandy' => 'Kandy',
                                    'Kegalle' => 'Kegalle',
                                    'Kilinochchi' => 'Kilinochchi',
                                    'Kurunegala' => 'Kurunegala',
                                    'Mannar' => 'Mannar',
                                    'Matale' => 'Matale',
                                    'Matara' => 'Matara',
                                    'Monaragala' => 'Monaragala',
                                    'Mullaitivu' => 'Mullaitivu',
                                    'Nuwara-Eliya' => 'Nuwara-Eliya',
                                    'Polonnaruwa' => 'Polonnaruwa',
                                    'Puttalam' => 'Puttalam',
                                    'Ratnapura' => 'Ratnapura',
                                    'Trincomalee' => 'Trincomalee',
                                    'Vavuniya' => 'Vavuniya'
                                );
                                ?>
                                <label for="type_of_event" class="sr-only">Type of Event</label>
                                <select type="text" class="form-control" id="type_of_event" required>
                                    <?php foreach($district_option as $var => $district_name) { ?>
                                        <option
                                            <?php 
                                            if(isset($_GET['district']) && ($var == $_GET['district'])) {
                                                echo "selected";
                                            }else if(!isset($_GET['district']) && ($district_name == "Jaffna")) {
                                                echo "selected";
                                            }?>>
                                            <?php echo $district_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="num_of_people" class="sr-only">Number of People</label>
                                <input type="number" class="form-control" id="num_of_people" placeholder="Number of People" min="0" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="telephone" class="sr-only">Telephone</label>
                                <input type="text" class="form-control" id="telephone" placeholder="Telephone" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="reset" class="btn btn-secondary btn-block" value="CLEAR">
                            </div>
                        </div>
                    </form>
                </div>
			</div>
        </div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p style="font-size:16px;">Copyright ©2019 All Rights Reserved | S.Thuvarahan</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

