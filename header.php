<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php wp_title('|', true, 'right');
		bloginfo( 'name' ); ?>
	</title>
	<meta name="author" content="Mark Reale" />
	<meta name="keywords" content="living, learning, hip hop, apocalypse, javascript, html, css, toronto, bnotions, yorkville media centre, the ymc, new york, general assembly, seneca college, androidto" />
	<meta name="description" content="Website portal for Mark Reale" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- Media queries for new CSS files -->
  
  <link href="<?php bloginfo('template_directory'); ?>/assets/css/tablet.css" rel="stylesheet" media="all and (min-width: 600px)" />

  <link href="<?php bloginfo('template_directory'); ?>/assets/css/st_desktop.css" rel="stylesheet" media="all and (min-width: 960px)" />

	<?php wp_head(); ?>

	<!-- Google Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3360362-5']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>

<body <?php body_class(); ?>> 

	<div id="container">
		<header class="site">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		</header>

		<nav>
			<?php wp_nav_menu(); ?>
		</nav>