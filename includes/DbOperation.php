<?php
 
class DbOperation
{
    //Database connection link
    private $con;
 
    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';
 
        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();
 
        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }
	
	/*
	* The create operation
	* When this method is called a new record is created in the database
	*/
	
	
	
	
	
/*----------------------------------------------- REGISTER---------------------------------------------------*/
function insertData($name,$email,$pwd){

$stmt = "INSERT INTO `user`(`name`, `email`, `password`) VALUES('$name','$email','$pwd'	)";
// echo $stmt;
$data = $this->con->query($stmt);
		 
		if($data){

			return true; 
		}
		else{

			return false;
		}
	
 
	}
/*----------------------------------------------- LOGIN---------------------------------------------------*/
	
	
	function Login($email,$pwd){
		
		$sql="SELECT email,password FROM `user` where email ='$email' and password = '$pwd'";
		$stmt = mysqli_query($this->con,$sql);
		
		$num = mysqli_num_rows($stmt);
		
		if($num>0){
			
			return true;
		}
		else{
			
			return false;
		}
		
		
	}
	
/*----------------------------------------------- LOGIN DATA---------------------------------------------------*/

	
	function getLoginData($email,$pwd){


		$stmt = "SELECT * FROM `user` where email = '$email' and password = '$pwd'";
		$result = $this->con->query($stmt);
 		
		$outer = array(); 
		
		while($obj = $result->fetch_object()){


			// $inner  = array();
			$outer['id'] = $obj->id; 
			$outer['name'] = $obj->name; 
			$outer['email'] = $obj->email; 
			$outer['password'] = $obj->password; 
 		 	
			// array_push($outer, $inner); 
		}
		
		return $outer; 
	}
	
		
/*----------------------------------------------- Get Blood Group---------------------------------------------------*/

	
		
/*------------------------------------------ Get Blood Group List By Id----------------------------------------------*/

	
	
	
/*----------------------------------------------- Change Password---------------------------------------------------*/

	
	
	
 
	
}