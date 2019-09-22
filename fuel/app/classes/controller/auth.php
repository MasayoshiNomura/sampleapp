<?php

class Controller_Auth extends Controller_Template
{

	public function action_login()
	{
		$data["subnav"] = array('login'=> 'active' );
		$this->template->title = 'Auth &raquo; Login';
		$this->template->content = View::forge('auth/login', $data);
	}

	public function action_register()
	{
		$data["subnav"] = array('register'=> 'active' );
		$this->template->title = 'Auth &raquo; Register';
		$this->template->content = View::forge('auth/register', $data);
	}

	public function action_success_page()
	{
		$data["subnav"] = array('success_page'=> 'active' );
		$this->template->title = 'Auth &raquo; Success page';
		$this->template->content = View::forge('auth/success_page', $data);
	}

}
