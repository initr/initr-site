<li>
	<h3><?= $version->version_name ?></h3>

	<div class="github-info">Commit: <?= HTML::link($version->base_url, $version->sha) ?></div>

	<span class="require-label">Requires:</span>
	<ul class="requires">
		<?php foreach($version->json_file['require'] as $requireName => $requireVersion) : ?>
			<li><?= HTML::linkRoute('Manifests.manifests.show', $requireName, $requireName) ?>: <?= $requireVersion ?></li>
		<?php endforeach ?>
	</ul>

	<span class="script-label">Scripts:</span>
	<ul class="scripts">
		<?php foreach($version->json_file['scripts'] as $script) : ?>
			<li><?= $script ?></li>
		<?php endforeach ?>
	</ul>
</li>
