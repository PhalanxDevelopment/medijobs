<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin-ext" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
    </script>

</head>
<body <?php body_class(); ?>>

	<div class="fixed_buttons">
		<div class="buts">
			<a class="but big" href="   "><img src="<?php echo get_template_directory_uri(); ?>/img/back_to_top.png"></a>
			<a class="but" href="   "><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"></a>
			<a class="but" href="   "><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"></a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<header>
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto ">
							<li class="nav-item <?php if(get_the_ID() === 15) echo 'active'; ?>">
								<a class="nav-link" href="<?php echo home_url(); ?>">Pagina Principala <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item <?php if(get_the_ID() === 21) echo 'active'; ?>"">
								<a class="nav-link" href="<?php echo home_url(); ?>/festival">Festival</a>
							</li>
							<li class="nav-item <?php if(get_the_ID() === 23) echo 'active'; ?>"">
								<a class="nav-link" href="<?php echo home_url(); ?>/artele-unirii">Artele Unirii</a>
							</li>
							<li class="nav-item <?php if(get_the_ID() === 26) echo 'active'; ?>"">
								<a class="nav-link" href="<?php echo home_url(); ?>/concursuri">Concursuri</a>
							</li>
							<li class="nav-item <?php if(get_the_ID() === 28) echo 'active'; ?>"">
								<a class="nav-link" href="<?php echo home_url(); ?>/contact">Contact
								</a>
							</li>
						</ul>

						<br>
						<form class="form-inline flex-row my-2 my-lg-0 ml-auto">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cauta</button>
						</form>
					</div>
				</nav>
			</header>
		</div>
	</div>
