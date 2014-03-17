<div class="navbar row" id="nav1">
	<!-- Toggle for mobile navigation, targeting the <ul> -->
	<a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
	<h1 class="three columns logo">
		<a href="/">
			initr.io
		</a>
	</h1>
	<ul class="six columns">
		<li>
			<?= HTML::linkRoute('Brochure.home.index', 'About') ?>
		</li>
		<li>
			<?= HTML::linkRoute('Brochure.home.example', 'Schema') ?>
		</li>
		<?php if (Auth::guest()) : ?>
			<li>
				<?= HTML::linkRoute('Manifests.manifests.create', 'Submit Manifest') ?>
			</li>
			<li>
				<?= HTML::linkRoute('Login.users.create', 'Signup') ?>
			</li>
			<li>
				<?= HTML::linkRoute('Login.session.create', 'Login') ?>
			</li>
		<?php else : ?>
			<li>
				<?= HTML::linkRoute('Login.session.destroy', 'Logout') ?>
			</li>
		<?php endif ?>
	</ul>

</div>
