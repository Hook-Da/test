<?php
require_once './database/database.php';
abstract class mainModel
{
	public function __construct()
	{
	}
	public function all()
	{
		$table = get_class(new static());
		$sql = "SELECT * FROM `$table`";
		$pdo = Database::getInstance()->pdo;
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_OBJ);
		//var_dump($result);die();
		return $result;
	}
}