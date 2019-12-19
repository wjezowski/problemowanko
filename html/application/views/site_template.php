<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php
	$this->load->original_view_method('every_page/head');
?>

	<body>
		<div id="container">
			<div id="header">
				Fabulous header
			</div>

			<div id="content_container">
<?php
				$this->load->original_view_method('every_page/menu');
?>
				<div id="body">
<?php
					$this->load->original_view_method('every_page/buttons');
?>
					<div id="body_container">
<?php
						$this->load->original_view_method($view, $main_content);
?>
					</div>
				</div>
			</div>
			
<?php
			$this->load->original_view_method('every_page/footers');
?>
		</div>
	</body>
</html>
