<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;

	/**
	 * USER constructor.
	 * Instancie la base de donnée
     */
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }


	/**
	 * @param $sql
	 * @return PDOStatement
	 * On prépare la requete sql
     */
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	/**
	 * @param $uname
	 * @param $umail
	 * @param $upass
	 * @return PDOStatement
     */
	public function register($uname, $umail, $upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}


	/**
	 * @param $uname
	 * @param $umail
	 * @param $upass
	 * @return bool
	 * Methode de connection
     */
	public function doLogin($uname, $umail, $upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	/**
	 * @return bool
	 * Methode pour savoir si la session est en cours
     */
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	/**
	 * @param $url
     */
	public function redirect($url)
	{
		header("Location: $url");
	}

	/**
	 * @return bool
	 * Methode pour se déconnecter
     */
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
