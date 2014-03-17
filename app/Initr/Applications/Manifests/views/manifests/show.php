<div class="columns ten centered">
	<div class="manifest-info">
		<div class="main-info">
			<h2><?= $manifest->name ?></h2>

			<?= HTML::link($manifest->repository_url, 'View on Github') ?>
		</div>

		<ul class="versions">
			<?php foreach($manifest->versions as $version) : ?>
				<li>
					<h3><?= $version->version_name ?></h3>

					<div class="github-info"><?= HTML::link($version->base_url, 'View on Github') ?></div>

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
