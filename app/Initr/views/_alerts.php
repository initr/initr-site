<?php $alerts = ['success', 'danger', 'warning', 'info', 'primary'];

foreach($alerts as $alert) {
	if (Session::has($alert)) {
		$message = Session::get($alert);
		echo "<div class=\"columns ten centered alert {$alert}\">{$message}</div>";
	}
}
