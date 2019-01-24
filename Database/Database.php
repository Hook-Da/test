<?php 
class Database{
	private static $instance = null;
	public $pdo;
	private function __construct()
	{
		try
		{
			$this->pdo = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
		}
		catch(PDOexception $e)
		{
			$e->getMessage();
		}
	}
	public static function getInstance()
	{
		if(!isset(self::$instance))
		{
			self::$instance = new Database();
		}
		return self::$instance;
	}
	
}