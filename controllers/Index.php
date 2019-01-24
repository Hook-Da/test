<?php
require_once './bootstrap/view.php';
class Index extends mainControl
{	
	public function __construct()
	{
		parent::__construct(View::create());
		$about = About::all();
		$services = Service::all();
		//var_dump($services);die();
		$workers = Worker::all();
		$this->view->render('index',$about,$services,$workers);
	}
}