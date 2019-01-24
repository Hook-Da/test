<?php
class View
{
	static $instance = null;
	public static function create()
	{
		if(!self::$instance)
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function render($name, $about = null, $services = null,$workers = null)
	{
		try
		{
			$path = "./view/$name.php";
			if(file_exists("$path"))
			{
				//var_dump($about[0]->name);die();
				require_once($path);
			}
			else
			{
				throw new Exception("Данного файла $name.php нет в папке View", 1);
			}
		}
		catch(Exception $e)
		{
			echo '<pre>';
			echo $e->getMessage();
			echo '</pre>';
		}
	}
}