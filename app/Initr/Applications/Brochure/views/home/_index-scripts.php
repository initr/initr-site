<script>
	$('.modal').on('click', '.switch', function(ev) {
		$('.modal.active').fadeOut(function() {
			$('.modal.active').removeClass('active');
		});
		return false;
	});
</script>
