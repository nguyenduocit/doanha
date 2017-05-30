<?php 
/**
* 
*/
class Logout extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('login'))
	        {
	            $this->session->unset_userdata('login');
	            $this->session->unset_userdata('userdata');
                $this->session->sess_destroy();
	        }
	        redirect(admin_url('login'));
	}
}
?>