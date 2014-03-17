<div class="columns ten centered">
	<?= Form::open(['route' => 'Manifests.manifests.store']) ?>
		<h2>Register Manifests</h2>

		<?php if ($errors->has('name')) : ?>
			<div class="alert warning"><?= $errors->first('name') ?></div>
		<?php endif ?>

		<div class="field <?= $errors->has('repository_url') ? 'danger' : null ?>">
			<?= Form::label('repository_url', 'Repository Url:') ?>
			<?= Form::text('repository_url', $manifest->repository_url, ['class' => 'input']) ?>
			<?php if ($errors->has('repository_url')) : ?>
				<span class="error"><?= $errors->first('repository_url') ?></span>
			<?php endif ?>
		</div>

		<div class="btn primary medium">
			<?= Form::submit('Submit') ?>
		</div>
	<?= Form::close() ?>
</div>
