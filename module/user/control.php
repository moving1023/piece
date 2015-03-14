<?php
class user extends control
{
	public function index()
	{
		$this->view->users = $this->user->getAll();
		$this -> display();
	}

	public function add()
	{

	}
}

?>