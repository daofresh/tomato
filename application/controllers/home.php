<?php

class Home extends TM_Controller
{
	public function index()
	{
		$model = 'I am model';
		
		$this->view('index', $model); 
	}
	public function demo($template = 'default')
	{
		$this->template = $template;
		$this->view('demo', $template);
	}
}