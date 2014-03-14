<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>initr</title>
	<link rel="stylesheet" href="/css/gumby.css">
	<script src="/js/modernizr.js"></script>
</head>
<body>
	<h1 class="hero">
		initr is coming.
	</div>

	<p class="lead">
		learn when it is done
	</p>
	<div class="row">
		<div class="columns ten centered">

			<?php require(__DIR__.'/../partials/_mailchimp.php') ?>
		</div>
	</div>

	<div class="row info">
		<div class="columns ten centered">
			<h2>what is it?</h2>
			<p>
				initr is an npm command that allows you to quickly scaffold up projects based on shared setup scripts.
				Setup scripts are defined in an initr.json file that let's you define the way you want your projects set up.
				initr can setup projects using multiple sources including string commands listed in the initr.json file, local bash files, and shared manifests on initr.io.
			</p>

			<h2>initr.json</h2>

			<h3>commands</h3>

			<p>
				The commands array will simply run through each command recursively and then execute them one by one in order.
			</p>

			<h3>scripts</h3>

			<p>
				The scripts array will check if the listed file exists and then will run the file if it is found.
				If a url is listed through http, initr will grab the file and run it.
			</p>

			<h3>require</h3>

			<p>
				Similar to many package managers like npm, Ruby gems, or Packagist, initr allows you to run version controlled provisioning script set shared on initr.io.
				Above this, initr will resolve all the dependencies required by the manifests you determine.
				This allows modular building of init scripts.
			</p>

		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<srcipt src="/js/gumby.min.js"></srcipt>
	<script>
		$('.modal').on('click', '.switch', function(ev) {
			$('.modal.active').fadeOut(function() {
				$('.modal.active').removeClass('active');
			});
			return false;
		});
	</script>
</body>
</html>
