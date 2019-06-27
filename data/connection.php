<?php

	class Connection{
		public $conn;

		public function __construct(){
			$this->conn = new PDO('mysql:host=localhost;dbname=db','root','');
			//echo "Linked .......................";
		}

		public function dataInsert($name,$add,$pos){
			try{
				$stat = $this->conn->prepare("INSERT INTO office_info (name,address,position) VALUES (:name,:address,:position)");
			$stat->execute(
				array(
					':name'		=>$name,
					':address'	=>$add,
					':position'	=>$pos
				)
			);
			echo "Inserted Succesfully";
			}catch(\Exception $e){
				echo "ERROR:". $e->getMessage();
			}
		}
	}




?>