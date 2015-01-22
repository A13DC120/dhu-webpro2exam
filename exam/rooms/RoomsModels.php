<?php
class RoomsModels
{
	public function all()
	{
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
		foreach ($pdo->query('SELECT * FROM rooms') as $row){
		//var_dump($row);

		$var = array('id' =>rooms);
	}


	}


}