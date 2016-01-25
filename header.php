	<!doctype <html>
	<head>
		<title>Elmer's Theme</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-static-top navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/wordpress"><img class="img-responsive om-logo" src="/wordpress/wp-content/uploads/2016/01/orangeMaquinitaLogo_0.jpg"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-left',
									'walker' => new Walker_Nav_Primary()
									)); 
							?>
							<div class="navbar-right">
								<button type="button" class="btn navbar-btn btn-login"><?php wp_loginout(); ?></button>
							</div>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.col-xs-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</nav>

		<div class="container">

