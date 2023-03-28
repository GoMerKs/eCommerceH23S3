<?php
namespace app\core;

use PDO;

class Model{
	public static ?PDO $connection = null; //class variable: points to the class not the object || '?' is a nullable PDO

	public function __construct(){
		if(self::$connection == null) {	//'::' is like 'this'
			$host = 'localhost';
			$dbname = 'webapplication';
			$user = 'root';
			$pass = '';
			$charset = 'utf8mb4';
			try {
				self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);
				self::$connection->query("SET NAMES $charset");	//encoded in utf 8
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
}