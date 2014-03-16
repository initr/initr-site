<div class="columns ten centered">
	<?= Form::open(['route' => 'Login.users.store']) ?>
		<h2>Sign Up</h2>

		<div class="field">
			<?= Form::label('username', 'Username:') ?>
			<?= Form::text('username', $user->username, ['class' => 'input']) ?>
		</div>

		<div class="field">
			<?= Form::label('email', 'Email:') ?>
			<?= Form::text('email', $user->email, ['class' => 'input']) ?>
		</div>

		<div class="field">
			<?= Form::label('password', 'Password:') ?>
			<?= Form::password('password', ['class' => 'input']) ?>
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
