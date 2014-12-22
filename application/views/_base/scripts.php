<script>
	var base_url = function(b){var c="<?php echo base_url() ?>";if(b){return c+b}else{return c}};
</script>

<?php if (ENVIRONMENT == 'production') : ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
<?php else : ?>
	<script src="<?php echo base_url('assets/js/libs/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
<?php endif; ?>

<script src="<?php echo base_url('assets/js/plugins/mediaelement.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<?php if (!empty($js)) : ?>
	<?php foreach ($js as $file) : ?>
		<script src="<?php echo base_url("assets/js/$file.js") ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>