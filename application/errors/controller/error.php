<?php

/**
* 
*/
class Error extends TM_Controller
{
	public function error404($message = '')
	{
		$this->view("404", $message);
	}

	public function errorDatabase($message)
	{
		$this->view("database", $message);
	}
}