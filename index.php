<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	// get info on the request
	$view = require "server/pageless.php";
	$viewName = $view[ 0 ];
	$viewPath = $view[ 1 ];

	// pull in Lazaro disclaimer and footer
	require ('inc/lazaro.php');

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>

	<!-- Page Meta -->
	<meta charset="utf-8">
	<title>Project Name<?php echo ( $viewName != "404" ? " | " . $viewName : "" ) ?></title>
	<meta name="description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">
	<meta name="keywords" content="Keyword_A, Keyword_B, Keyword_C, Keyword_D, Keyword_E">
	<meta name="author" content="Lazaro Advertising">
	<link rel="canonical" href="https://example.com/">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#444444">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#444444">

	<!-- Open Graph Name Space -->
	<meta property="og:title" content="Your Title Here">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://example.com/product.html">
	<meta property="og:site_name" content="http://example.com/">
	<meta property="og:image" content="http://example.com/download/og-thumbnail-image.png">
	<meta property="og:image:width" content="310">
	<meta property="og:image:height" content="310">
	<meta property="og:image" content="http://example.com/download/og-cover-image.png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:description"
		content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
			Excepteur sint occaecat cupidatat non proident.">

	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="Your FB_APP_ID">

	<!-- Twitter Card Data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Your @publisher_handle">
	<meta name="twitter:title" content="Your Page Title">
	<meta name="twitter:description" content="Your Page description less than 200 characters">
	<meta name="twitter:creator" content="Your @author_handle">

	<!-- Twitter Summary card images must be at least 120x120px -->
	<meta name="twitter:image" content="https://example.com/image.jpg">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Concert+One|Roboto:400,400i,700"
		rel="stylesheet">

	<!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="/style.css">

	<!-- jQuery 3 -->
	<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper" data-page="<?php echo $viewName ?>"><!-- Page Wrapper -->

	<!-- Header Section -->
	<section class="header-section">
		<div class="container">
			<div class="header row">
				<div class="columns small-3">
					<a class="logo" href="/">
						<img src="/img/logo.svg">
					</a>
				</div>
				<div class="text-right columns small-9">
					<div class="navigation inline">
						<a class="button js_nav_button <?php echo ( $viewName == "pageone" ? "active" : "" ) ?>" data-page-id="pageone" href="/pageone">page-1</a>
						<a class="button js_nav_button <?php echo ( $viewName == "pagetwo" ? "active" : "" ) ?>" data-page-id="pagetwo" href="/pagetwo">page-2</a>
						<a class="button js_nav_button <?php echo ( $viewName == "contact" ? "active" : "" ) ?>" data-page-id="contact" href="/contact">contact</a>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- END : Header Section -->


	<!-- Page Content -->
	<div id="page-content">

		<?php require $viewPath; ?>

	</div> <!-- END : Page Content -->


	<!-- Lazaro Signature -->
	<?php lazaro(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->









<!-- ⬇ All Modals below this point ⬇ -->

<div id="modal-wrapper"><!-- Modal Wrapper -->
	<div class="modal-box js_modal_box">
		<!-- Modal Content : Sample Video -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-video">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<!-- video embed -->
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Video -->

		<!-- Modal Content : Sample Form -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-form">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<h2>Form Title Goes Here</h2>
					</div>
				</div>
				<div class="row">
					<!-- video embed -->
					<div class="columns small-12">
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns small-12">
						<p>Augmented reality chrome network skyscraper Tokyo camera military-grade cardboard footage ablative otaku warehouse Kowloon table tower monofilament. Bicycle girl tower network face forwards towards fetishism corporation tiger-team. Monofilament decay hacker RAF dolphin DIY franchise narrative math-skyscraper realism systemic order-flow corrupted. Math-sentient tube cyber-paranoid order-flow long-chain hydrocarbons Chiba boy. RAF advert narrative dissident car wristwatch soul-delay cardboard nano-neon silent. Wonton soup pistol nano-otaku assault franchise realism RAF denim skyscraper geodesic tube into weathered youtube artisanal grenade. Youtube monofilament smart-corporation military-grade Tokyo meta-papier-mache corrupted disposable plastic savant shanty town dolphin 8-bit wonton soup. Military-grade Tokyo digital 3D-printed boat advert San Francisco engine tattoo computer skyscraper physical construct. Sub-orbital computer media market order-flow nodal point j-pop spook Chiba soul-delay tiger-team tanto cartel. Camera tower-space franchise range-rover futurity network military-grade Shibuya. Saturation point tanto physical BASE jump 3D-printed neural fetishism long-chain hydrocarbons rain. Bicycle apophenia futurity digital boat denim post-jeans free-market car corporation range-rover cardboard convenience store concrete. Long-chain hydrocarbons j-pop Tokyo crypto-table cardboard render-farm. Tokyo boy disposable industrial grade bridge A.I. carbon footage BASE jump cartel free-market euro-pop long-chain hydrocarbons-ware grenade. Pre-man voodoo god towards euro-pop cyber-crypto-Legba systema modem beef noodles. Free-market boy sensory post--space systemic jeans. Uplink singularity shanty town voodoo god rifle tank-traps smart-katana shrine human. Hotdog savant human garage wonton soup tube dolphin j-pop. Tiger-team wristwatch engine vehicle cartel apophenia augmented reality man network stimulate. Shrine claymore mine monofilament hotdog voodoo god geodesic knife. Voodoo god silent otaku hacker computer post-singularity office tower shanty town. Tokyo lights corrupted marketing skyscraper receding beef noodles uplink footage gang rebar order-flow table nano-bicycle tube. </p>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Form -->


		<!-- Modal Close Button -->
		<div class="modal-close js_modal_close">&times;</div>
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php lazaro_disclaimer(); ?>









<!-- JS Modules -->
<script type="text/javascript" src="/js/modules/pageless.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<script type="text/javascript" src="/js/modules/disclaimer.js"></script>

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

</body>

</html>
