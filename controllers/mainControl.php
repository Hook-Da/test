<?php 
abstract class mainControl
{
	protected $view = null;
	public function __construct($viewObject)
	{
		$this->view = $viewObject;
	}
}