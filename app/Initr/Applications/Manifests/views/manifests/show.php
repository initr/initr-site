<div class="columns ten centered">
	<div class="manifest-info">
		<div class="main-info">
			<h2><?= $manifest->name ?></h2>

			<?= HTML::link($manifest->repository_url, 'View on Github') ?>

			<?php if (Auth::check()) : ?>
				<div class="btn medium secondary update">
					<?= HTML::linkroute('Manifests.manifests.update', 'Update', $manifest->name) ?>
				</div>
			<?php endif ?>
		</div>

		<ul class="versions">
			<?php foreach($manifest->versions as $version) : ?>
				<?= View::make('Manifests::manifests._version-info', compact('version')) ?>
			<?php endforeach ?>
		</ul>
	</div>
</div>
