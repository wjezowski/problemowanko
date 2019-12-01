<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang="en">
<?php
	$this->load->view('head', $title);
//	$this->load->view('sidebar',$sidebar_content);
?>
	<body>
		<div id="container">
<?php
	$this->load->view('main_content',$main_content);
	$this->load->view('footer');
?>
		</div>
	</body>
<?php
//	$this->view('head/head.php');
?>
</html>