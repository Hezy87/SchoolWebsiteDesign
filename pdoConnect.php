<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
class pdoConnect   
{   
	public function __construct()
		{
		}
	
	public function dbConnect()    
		{     
			global $dbcon;        
			$dbInfo['username'] = "root";     
			$dbInfo['password'] = "3YV2qEmd";       
			try {
			$dbcon = new PDO('mysql:host=localhost;dbname=school_cms', $dbInfo['username'], $dbInfo['password']);  
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}
		}
	public function fetchQuery($qry)
		{
			global $dbcon;
			$query = $dbcon->prepare($qry);
			$query->execute();			
			return $query->fetchAll();
		}
	public function application($btec, $level2, $blocka, $blockb, $blockc, $blockd, $forename, $surname, $address1, $address2, $city, $county, $postcode, $mobile, $email, $meals, $english, $maths, $homecontact, $relationship, $parentmobile, $parentwork, $parentemail)
		{
			global $dbcon;
			$app = $dbcon->prepare('INSERT INTO post16_applications (btec, level2, blocka, blockb, blockc, blockd, forename, surname, address1, address2, city, county, postcode, mobile, email, meals, english, maths, homecontact, relationship, parentmobile, parentwork, parentemail) VALUES (:btec, :level2, :blocka, :blockb, :blockc, :blockd, :forename, :surname, :address1, :address2, :city, :county, :postcode, :mobile, :email, :meals, :english, :maths, :homecontact, :relationship, :parentmobile, :parentwork, :parentemail)');
			$app->bindParam(':btec', $btec);
			$app->bindParam(':level2', $level2);
			$app->bindParam(':blocka', $blocka);
			$app->bindParam(':blockb', $blockb);
			$app->bindParam(':blockc', $blockc);
			$app->bindParam(':blockd', $blockd);
			$app->bindParam(':forename', $forename);
			$app->bindParam(':surname', $surname);
			$app->bindParam(':address1', $address1);
			$app->bindParam(':address2', $address2);
			$app->bindParam(':city', $city);
			$app->bindParam(':county', $county);
			$app->bindParam(':postcode', $postcode);
			$app->bindParam(':mobile', $mobile);
			$app->bindParam(':email', $email);
			$app->bindParam(':meals', $meals);
			$app->bindParam(':english', $english);
			$app->bindParam(':maths', $maths);
			$app->bindParam(':homecontact', $homecontact);
			$app->bindParam(':relationship', $relationship);
			$app->bindParam(':parentmobile', $parentmobile);
			$app->bindParam(':parentwork', $parentwork);
			$app->bindParam(':parentemail', $parentemail);

			$app->execute();//execute statement 
		}
		

}

class OLDpdoConnect   
{   
	public function __construct()
		{
		}
	
	public function OLDdbConnect()    
		{     
			global $dbcon;        
			$dbInfo['username'] = "root";     
			$dbInfo['password'] = "3YV2qEmd";       
			try {
			$dbcon = new PDO('mysql:host=localhost;dbname=vle', $dbInfo['username'], $dbInfo['password']);  
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}
		}
	public function fetchQuery($qry)
		{
			global $dbcon;
			$query = $dbcon->prepare($qry);
			$query->execute();			
			return $query->fetchAll();
		}
			

}



	

?>