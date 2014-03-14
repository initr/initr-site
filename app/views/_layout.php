<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>initr</title>
	<link rel="stylesheet" href="/css/prettify.css">
	<link rel="stylesheet" href="/css/sunburst.css">
	<link rel="stylesheet" href="/css/gumby.css">
	<script src="/js/modernizr.js"></script>
</head>
<body>
	<?= $content ?>

	<a href="https://github.com/initr/initr-site/issues/1" class="github">
		Help This Project
		<i class="icon-github"></i>
	</a>

	<footer>
		&copy; <?= date('Y') ?> <a href="http://ryantablada.com">Ryan Tablada</a>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<srcipt src="/js/gumby.min.js"></srcipt>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
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
