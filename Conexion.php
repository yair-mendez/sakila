<?php
	class Conexion {
		private $Host ="";
		private $User ="";
		private $Password ="";
		private $Database ="";
		private $Connection;
	
		public function __construct(){
			$this-> Host = "b54ahes1ioszqp4rnsic-mysql.services.clever-cloud.com";
            $this-> User = "ulcjbqdwqyliewzv";
			$this-> Password = "Au0KLrfwnLEM2DaAbk23";
			$this-> Database = "b54ahes1ioszqp4rnsic";
		}

		public function OpenConnection() {
			try
			{
				$this-> Connection = new PDO("mysql:host={$this->Host}; dbname={$this->Database}" , $this->User , $this->Password);
				$this-> Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				$this-> Connection=false;
			}
		}

		public function CloseConnection(){
			mysql_close($this-> Connection);
		}

		public function GetConnection(){
			return $this-> Connection;
		}
	}
	/*$Obj = new Conexion();
    $Obj-> OpenConnection();
    if($Obj-> GetConnection())
        echo "Ok";
    else 
        echo "Error";*/
 ?>