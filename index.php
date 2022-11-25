<?php
	$http = ( isset( $_SERVER[ 'HTTPS' ] ) ) ? 'https' : 'http';
	$url = $http . '://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ];
	$base = $http . '://' . $_SERVER[ 'HTTP_HOST' ];
	function isMobile() {
	    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
?>
<!DOCTYPE html>
<html lang="EN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AZULIK - New Year</title>
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Let the wafting air bring our SPIRIT TOGETHER to rejoice as we prepare to welcome this new year.">
		<meta property="og:title" content="New Year Azulik" />
        <meta property="og:description" content="Let the wafting air bring our SPIRIT TOGETHER to rejoice as we prepare to welcome this new year." />
        <meta property="og:image" content="<?php echo $base; ?>/images/nido-azulik.png" />
        <link rel="canonical" href="<?php echo $url; ?>" />
		<link rel="shortcut icon" href="images/icono.svg" />
		<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<header>
			<div class="overlay"></div>
			<div class="container">
				<img src="images/logo.png">
				<!-- <a href="#">BOOK NOW</a> -->
			</div>
		</header>
		<main>
			<h1>Azulik</h1>
			<section id="home">
				<video playsinline autoplay muted>
				<?php if ( !isMobile() ) : ?>
					<source src="images/header.mp4" type="video/mp4">
				<?php else: ?>
					<source src="images/header-mobile.mp4" type="video/mp4">
				<?php endif; ?>
				</video>
			</section>
			<section id="inspire">
				<h3>INHALE CELEBRATION. <span>Exhale creation</span></h3>
				<img src="images/inspireText.jpg" class="titleImg">
				<div class="imageText">
					<?php if ( !isMobile() ) : ?>
						<img src="images/inspire.png">
					<?php else: ?>
						<img src="images/inspire-mobile.png">
					<?php endif; ?>
					<div class="info">
						<p>Let the wafting air</p>
						<p>bring our SPIRIT TOGETHER</p>
						<p>to rejoice as we prepare to welcome this new year.</p>
					</div>
				</div>
				<span class="line"></span>
				<h3>New Year's Eve</h3>
			</section>
			<section id="agenda">
				<div class="container">
					<div class="filaTabla head">
						<h2>TULUM AGENDA</h2>
						<a href="assets/menu-tulum.pdf" download>Download Menu</a>
						<a href="assets/program.pdf" download>Download Program</a>
					</div>
					<div class="filaTabla">
						<div>
							SFER IK Tulum
							<b>7:45 pm</b>
						</div>
						<h3>Sacred air</h3>
						<p>With the sacred smoke and honoring the ancestors we clean ourselves energetically, to receive the new wind.</p>
					</div>
					<div class="filaTabla">
						<div>
							SFER IK Tulum
							<b>8:00 pm – 9:00 pm</b>
						</div>
						<h3>New Flights</h3>
						<p>We begin the celebration of these changes of air, we gather to toast and begin with joy the year to come.</p>
					</div>
					<div class="filaTabla noBorde">
						<div>
							DINNER Celebration
							<b>9:00 pm to 2:00 am</b>
						</div>
						<h3>Winds of Change</h3>
						<p>The ritual legacy of the four winds inspires this gastronomic journey through Mexican cuisine that, with moments designed to awaken a surprise, summons us to the pleasure of sharing and enjoying the new year.</p>
					</div>
					<div class="dFlex">
						<div class="mitad pcPics">
							<img src="images/nido-azulik.png">
						</div>
						<div class="mitad right">
							<img src="images/azulik-tulum.svg">
							<a href="https://nye-2023-azulik-tulum.eventbrite.com.mx/" target="_blank" class="boton">RESERVE NOW</a>
							<a href="https://goo.gl/maps/8CMYWHg3JhxX5qAGA" target="_blank" class="locationButton"></a>
						</div>
					</div>
					<div class="mobilePics">
						<img src="images/nido-azulik-mobile.png">
						<a href="assets/menu-tulum.pdf" download>Download Menu</a><br><br><br>
						<a href="assets/program.pdf" download>Download Program</a>
					</div>
				</div>
				<video playsinline autoplay muted>
				<?php if ( !isMobile() ) : ?>
					<source src="images/agenda.mp4" type="video/mp4">
				<?php else: ?>
					<source src="images/agenda-mobile.mp4" type="video/mp4">
				<?php endif; ?>
				</video>
				<div class="container">
					<div class="filaTabla head">
						<h2>UH MAY AGENDA</h2>
						<a href="assets/menu-uh-may.pdf" download>Download Menu</a>
					</div>
					<div class="filaTabla noBorde">
						<div>
							DINNER Celebration
							<b>8:00 pm to 1:00 am</b>
						</div>
						<h3>Winds of Change</h3>
						<p>We listen to the whisper of the sacred wind, we let it be the inspiration for this culinary experience that invites transformation, a celebration in which we gather to breathe fresh air and start the new year revitalized. </p>
					</div>
					<div class="dFlex">
						<div class="mitad pcPics">
							<img src="images/cuisine.png">
						</div>
						<div class="mitad right">
							<div class="dFlexLogos">
								<img src="images/uh-may.svg">
								<img src="images/jungle-cuisine.svg">
							</div>
							<a href="https://nye-2023-azulik-uhmay.eventbrite.com.mx/" target="_blank" class="boton">RESERVE NOW</a>
							<a href="https://g.page/azulik-uh-may?share" target="_blank" class="locationButton"></a>
						</div>
					</div>
					<div class="mobilePics">
						<img src="images/cuisine-mobile.png">
						<a href="descargables/menu-uh-may.pdf" download>Download Menu</a>
					</div>
				</div>
			</section>
			<section id="message">
				<h2>May the breeze of this coming year <b>INSPIRE</b> the new paths to come.</h2>
			</section>
		</main>
		<footer>
			<img src="images/icono.svg">
			<!-- <p>Queries/Concierges: <a href="mailto:hostess@tulum.azulik.com">hostess@tulum.azulik.com</a></p> -->
		</footer>
		<script src="js/script.js?v=<?php echo time(); ?>"></script>
	</body>
</html>
