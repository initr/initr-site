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
				<li>
					<h3><?= $version->version_name ?></h3>

					<div class="github-info">Commit: <?= HTML::link($version->base_url, $version->sha) ?></div>

					<span class="script-label">Scripts:</span>
					<ul class="scripts">
						<?php foreach($version->compiled_scripts as $script) : ?>
							<li><?= $script ?></li>
						<?php endforeach ?>
					</ul>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
