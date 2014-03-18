<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>initr.io</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<?= isset($stylesBefore) ? $stylesBefore : null ?>
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
	<script src="/js/gumby.min.js"></script>
	<?= isset($scripts) ? $scripts : null ?>
</body>
</html>
