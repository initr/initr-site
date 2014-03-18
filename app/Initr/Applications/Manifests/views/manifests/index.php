<div class="columns ten centered">
	<div class="manifest-info">
		<div class="main-info">
			<h2>Search Manifests</h2>
		</div>

		<ul class="manifests">
			<?php foreach($manifests as $manifest) : ?>
				<?= View::make('Manifests::manifests._manifest-list-info', compact('manifest')) ?>
			<?php endforeach ?>
		</ul>
	</div>
</div>
