<?php

class UsersController extends AppController
{
	public $name = 'Users';
	
	/*
		Default method
	*/
	public function index()
	{
		$usersArr = $this->User->find('all');
		$this->set('users',$usersArr);
	}
	
	function hello()
	{
	
	}
}
?>