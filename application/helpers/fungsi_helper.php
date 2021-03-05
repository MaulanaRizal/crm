<?php 

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('ID_USER');
	if ($user_session) {
		redirect('user/dashboard');
	}
}

function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('ID_USER');
	if (!$user_session) {
		redirect('login');
	}
}

?>