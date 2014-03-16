<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>initr.io</title>
	<link rel="stylesheet" href="/css/gumby.css">
	<script src="/js/modernizr.js"></script>
</head>
<body>
	<?= View::make('App::_nav') ?>

	<div class="row">
		<?= View::make('App::_alerts') ?>
	</div>
	<div class="row">
		<?= $content ?>
	</div>

	<a href="https://github.com/initr/initr-site/issues/1" class="github">
		Help This Project
		<i class="icon-github"></i>
	</a>

	<footer>
		&copy; <?= date('Y') ?> <a href="http://ryantablada.com">Ryan Tablada</a>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<srcipt src="/js/gumby.min.js"></srcipt>
</body>
</html>
