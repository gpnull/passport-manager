<?php


function layout_view($body, $data = array()) {
	$CI = get_instance();
	$layout_data['content_body']   = $CI->load->view('' . $body, $data, true);
	$controller = $CI->router->fetch_class();
	$check = $CI->session->userdata(LOGGED_USER);
	if(!$check) {
		redirect('/account/login');
	}else {
		$CI->load->view('layout/layout_view', $layout_data);
	}
}
