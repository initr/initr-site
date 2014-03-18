<div class="columns ten centered">
	<div class="manifest-info">
		<div class="main-info">
			<h2>Search Manifests</h2>

			<?= Form::open(['method' => 'GET']) ?>
				<div class="field">
					<?= Form::label('q', 'Search:') ?>
					<?= Form::text('q', Input::get('q'), ['class' => 'input']) ?>
				</div>
				<div class="row">
					<div class="btn medium primary search">
						<?= Form::submit('Search') ?>
					</div>
				</div>
			<?= Form::close() ?>
		</div>

		<ul class="manifests">
			<?php foreach($manifests as $manifest) : ?>
				<?= View::make('Manifests::manifests._manifest-list-info', compact('manifest')) ?>
			<?php endforeach ?>
		</ul>
	</div>
</div>
