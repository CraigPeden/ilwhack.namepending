<?php
class Javascript extends CI_Controller {
	function index()
	{
		// This file outputs some data from CI to the header
		frontend('Content-type: text/javascript');

		echo "var ci_site_url = '" . site_url() . "';\n";
		echo "var ci_base_url = '" . base_url() . "';\n";
	}
}