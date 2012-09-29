<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Diretas Já!</title>
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />

	<!-- Use jQuery for best compatibility with other CSS3 enabled browsers -->
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/flux.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		
		// Banner
		$(function(){
			if(!flux.browser.supportsTransitions)
				alert("Flux Slider requires a browser that supports CSS3 transitions");
				
			window.f = new flux.slider('#slider', {
				pagination: false,
				transitions : ["dissolve"],
				delay : 4000
			});
		});
		
		// Twitter profile @DiretasJaSEP
		$("body").delegate(".ribbon-top","click",function(){
		    window.open("https://twitter.com/DiretasJaSEP", '_blank');
		});
		
	});
		
	</script>
	<?php wp_head(); ?>
</head>
<body>

<div id="container">

<div class="escudo">
</div>

<div class="bubble">
	<div class="ribbon-top"></div>
	<div class="rectangle"><h2>A <span>Sociedade Esportiva Palmeiras</span> precisa de você!</h2></div>
	<div class="triangle-l"></div>
	<div class="triangle-r"></div>
	<div class="banner">
		<div id="slider">
			<?php foreach(range(1, 6) as $i): ?>
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/banner_<?php echo $i; ?>.jpg" alt="" /> 
			<?php endforeach; ?>
		</div>
	</div>