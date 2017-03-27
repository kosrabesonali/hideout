<?php /*<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href=""><?php echo $site_name; ?></a>
	</div>

	<div class="navbar-collapse collapse">

		<ul class="nav navbar-nav">
			<?php foreach ($menu as $parent => $parent_params): ?>

				<?php if (empty($parent_params['children'])): ?>

					<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
					<li <?php if ($active) echo 'class="active"'; ?>>
						<a href='<?php echo $parent_params['url']; ?>'>
							<?php echo $parent_params['name']; ?>
						</a>
					</li>

				<?php else: ?>

					<?php $parent_active = ($ctrler==$parent); ?>
					<li class='dropdown <?php if ($parent_active) echo 'active'; ?>'>
						<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
							<?php echo $parent_params['name']; ?> <span class='caret'></span>
						</a>
						<ul role='menu' class='dropdown-menu'>
							<?php foreach ($parent_params['children'] as $name => $url): ?>
								<li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>

				<?php endif; ?>

			<?php endforeach; ?>
		</ul>

		<?php //$this->load->view('_partials/language_switcher'); ?>
		
	</div>

</div>
</nav> */?>



<!-- Site Wrapper -->
	<div id="site-wrapper">
		<!-- Header -->
		<header id="site-header">
			<div class="nav-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul>
								<li><i class="fa fa-envira"></i>Open hour - 10 am - 11 pm</li>
								<li><i class="fa fa-phone"></i>+00 123 456 789 000</li>
								<li><a href=""><i class="fa fa-envelope"></i>support@example.com</a></li>
								<li class="social-bloc">
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar" role="navigation">
				<div class="container">
					<div class="row">
						<h1 class="sr-only">Food Lover</h1>
				        <a href="index.html" title="FoodLover" class="logo">
							<img src="assets/img/logo.png" alt="" width="170">
						</a>
						<button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="menu-mobile visible-xs">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<ul class="nav navbar-nav navbar-collapse collapse">
							<!--<li><a class="active" href="index.html">Home</a></li>
							<li><a href="about-us.html">about us</a></li>
							<li><a href="menu.html">menu</a></li>
							<li><a href="reservation.html">reservation</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="contact-us.html">contact us</a></li>-->
							<?php foreach ($menu as $parent => $parent_params): ?>

								<?php if (empty($parent_params['children'])): ?>

									<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
									<li <?php if ($active) echo 'class="active"'; ?>>
										<a href='<?php echo $parent_params['url']; ?>'>
											<?php echo $parent_params['name']; ?>
										</a>
									</li>

								<?php else: ?>

									<?php $parent_active = ($ctrler==$parent); ?>
									<li class='dropdown <?php if ($parent_active) echo 'active'; ?>'>
										<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
											<?php echo $parent_params['name']; ?> <span class='caret'></span>
										</a>
										<ul role='menu' class='dropdown-menu'>
											<?php foreach ($parent_params['children'] as $name => $url): ?>
												<li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
											<?php endforeach; ?>
										</ul>
									</li>

								<?php endif; ?>

							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->