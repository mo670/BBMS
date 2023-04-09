<?php 
session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$email = $_POST['email'];
$password = $_POST['password'];
// $created_at = date("Y-m-d h:i:s");
// $updated_at = date("Y-m-d h:i:s");


// work with database

// step1 - connecting to database

$host = 'localhost';
$dbusername = 'root';
$dbpassword = "root";
$db = "blood_bank";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	  echo $e->getMessage();
} 

// step 2 : insert data into database

/**
 * INSERT INTO users (id, first_name, last_name, email, 
 * username, mobileno, password, created_at, 
 * updated_at) 
 * VALUES (NULL, 'test first name', 'test last name', 'testname@email.com', 
 * 'testusername', '8923759824758', 'qqerqwer', '2022-03-23 06:02:52.000000',
 *  '2022-03-23 06:02:52.000000');
 */


$data = [null,$email,$password, $updated_at];
try{
  $pdo = new PDO($dsn,$email, $password);
  $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  if($pdo){
     echo "Data is stored successfully";
  }
}catch(PDOException $e){
  echo $e->getMessage();
  // echo "Data is NOT stored successfully";
  
}

$selectSql = "SELECT COUNT(*) AS total_user FROM 'users' WHERE email like  ? AND password LIKE ?";
$stmt = $pdo-> prepare($selectSql);
$data = [$email,$password];
$stmt -> execute($data);

$stmt -> setFetchMode(PDO:: FETCH_ASSOC);
$data = $stmt-> fetch ();
if($data['total_user']){
  $_SESSION['isValidUser']=true;
  header('location: d_dashboard.php'); 
} else{
  $_SESSION['isValidUser'] = false;
  header('location: login.php'); 
}


?>

