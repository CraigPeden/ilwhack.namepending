<?php
class Testing extends CI_Controller {
	function index()
	{
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
}