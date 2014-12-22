<!DOCTYPE html>
<html lang="pt-br" prefix="fb: http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">

	<!-- HEAD -->
	<?php $this->load->view('_base/head') ?>

	<body>
		<!-- HEADER -->
		<?php $this->load->view('_base/header') ?>

		<div class="wrap">
			<div class="container">

				<!-- CONTENT -->
				<div class="content">
					<?php $this->load->view($content) ?>
				</div>
			</div>

			<div id="push"></div>
		</div>

		<!-- FOOTER -->
		<?php $this->load->view('_base/footer') ?>
	</body>

	<!-- SCRIPTS -->
	<?php $this->load->view('_base/scripts') ?>
</html>