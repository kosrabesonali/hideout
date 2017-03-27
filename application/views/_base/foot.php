
	</div>
	<!-- End Site Wrapper -->
	<?php
		foreach ($scripts['foot'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}
	?>

	<?php // Google Analytics ?>
	<?php $this->load->view('_partials/ga') ?>
	
	<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	>
	<script type="text/javascript" src='<?php  echo asset_url('js/egprojets.lib.js');?>'></script>
	<script type="text/javascript" src='<?php  echo asset_url('js/egprojets.custom.js');?>'></script
</body>
</html>