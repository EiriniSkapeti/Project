<?php
	function db_connect(){
		static $conn;
		
		if(!isset($conn)){
			$config=parse_ini_file('dbinfo.ini');
			$conn=mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
			if($conn==false){
				echo "Error";
				return mysqli_connect_error();
				die();
			}else{
				//echo "Successfully connect to DB (first time)!!!<br>";
			}
		}else{
			//echo "Successfully connect to DB!!!<br>";
		}
		return $conn;
		
	}


?>