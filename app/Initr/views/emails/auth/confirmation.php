<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Welcome to <a href="http://initr.io">initr.io</a></h2>

		<div>
			To confirm your email: <?= HTML::linkRoute('Login.users.confirm', null, [$token]) ?>.
		</div>
	</body>
</html>
