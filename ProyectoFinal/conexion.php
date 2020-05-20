<?php
	define('DB_HOST',"localhost");
	define('DB_USER',"root");
	define('DB_PASS',"");
	define('DB_DATABASE',"proyecto");
	define('DB_CHARSET',"utf-8");


$conexion=mysqli_connect('localhost','root','','proyecto');
	class ConexionDB
	{
		protected $_db;
		function __construct()
		{
			$this->_db= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if($this->_db->connect_errno)
			{
				echo "Fallo la conexion a MySql";
				return;
			}
			$this->_db->set_charset(DB_CHARSET);
		}


	
	
		public function convertJSON( $query )
		{
			if ( $result = $this->_db->query($query))
			{
				if($result->num_rows > 0)
				{
						$jsondata["success"]=true;
						$jsondata["data"]["message"]= $result->num_rows;
						$jsondata["data"]["users"]=array();

						while ($row = $result->fetch_object()) 
						{

							$jsondata["data"]["users"][]=$row;
						}
				}
				else
				{
					$jsondata["success"]=false;
					$jsondata["data"]= 
					array('message' => $this->db->error);
				}
				header("content-type: application/json; charset=utf-8");
				echo json_encode($jsondata,JSON_FORCE_OBJECT);

			}
		}
	}
?>