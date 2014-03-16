<div class="columns ten centered">
	<?= Form::open(['route' => 'Login.session.store']) ?>
		<h2>Sign In</h2>

		<div class="field <?= $errors->has('username') ? 'danger' : null ?>">
			<?= Form::label('username', 'Username:') ?>
			<?= Form::text('username', null, ['class' => 'input']) ?>
			<?php if ($errors->has('username')) : ?>
				<span class="error"><?= $errors->first('username') ?></span>
			<?php endif ?>
		</div>

		<div class="field <?= $errors->has('password') ? 'danger' : null ?>">
			<?= Form::label('password', 'Password:') ?>
			<?= Form::password('password', ['class' => 'input']) ?>
			<?php if ($errors->has('password')) : ?>
				<span class="error"><?= $errors->first('password') ?></span>
			<?php endif ?>
		</div>

		<div class="btn primary medium">
			<?= Form::submit('Sign Up') ?>
		</div>
	<?= Form::close() ?>
</div>
