<div class="columns ten centered">
	<?= Form::open(['route' => 'Login.users.store']) ?>
		<h2>Sign Up</h2>

		<div class="field <?= $errors->has('username') ? 'danger' : null ?>">
			<?= Form::label('username', 'Username:') ?>
			<?= Form::text('username', $user->username, ['class' => 'input']) ?>
			<?php if ($errors->has('username')) : ?>
				<span class="error"><?= $errors->first('username') ?></span>
			<?php endif ?>
		</div>

		<div class="field <?= $errors->has('email') ? 'danger' : null ?>">
			<?= Form::label('email', 'Email:') ?>
			<?= Form::text('email', $user->email, ['class' => 'input']) ?>
			<?php if ($errors->has('email')) : ?>
				<span class="error"><?= $errors->first('email') ?></span>
			<?php endif ?>
		</div>

		<div class="field <?= $errors->has('password') ? 'danger' : null ?>">
			<?= Form::label('password', 'Password:') ?>
			<?= Form::password('password', ['class' => 'input']) ?>
			<?php if ($errors->has('password')) : ?>
				<span class="error"><?= $errors->first('password') ?></span>
			<?php endif ?>
		</div>

		<div class="field">
			<?= Form::label('password_confirmation', 'Password Confirmation:') ?>
			<?= Form::password('password_confirmation', ['class' => 'input']) ?>
		</div>

		<div class="btn primary medium">
			<?= Form::submit('Sign Up') ?>
		</div>
	<?= Form::close() ?>
</div>
