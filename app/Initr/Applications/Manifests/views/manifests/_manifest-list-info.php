<li>
	<h3><?= HTML::linkRoute('Manifests.manifests.show', $manifest->name, $manifest->name) ?></h3>

	<div class="github-info"><?= HTML::link($manifest->repository_url, 'View on Github') ?></div>

	<?php if ($manifest->versions) : ?>
		<span class="require-label">Versions:</span>
		<ul class="requires">
			<?php foreach($manifest->versions as $version) : ?>
				<li><?= $version->version_name ?></li>
			<?php endforeach ?>
		</ul>
	<?php endif ?>
</li>
