<?php

	class Database{
		public $conn;

		public function __construct(){
			$this->conn = new PDO('mysql:host=localhost;dbname=device','root','');
			//echo "Coneected Successfully";
		}

		public function insertData($name,$model,$price){
			try{
				$statment = $this->conn->prepare('INSERT INTO mobiles (name,model,price) VALUES (:name,:model,:price)');
				$statment->execute(
					array(
						':name'=>$name,
						':model'=>$model,
						':price'=>$price
					)
			);
			echo "Inserted";
			}catch(\Exception $e){
				echo "ERROR".$e->getMessage();
			}
		}
	}




?>