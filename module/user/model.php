<?php 
class userModel extends model
{
	public function getAll()
	{
		return $this->dao->select("*")->from("user")->fetchAll();
	}
} 
?>