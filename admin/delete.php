<?php
session_start();

$id = $_GET['id'];
$data = ['id'=>$id];

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

$sql = "DELETE FROM donors WHERE donors.`id` = :id";

try{
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($data);
    if($result){
      $_SESSION['message'] = "Data is deleted successfully";
      header("location:donor_list.php");
    }
  }catch(Exception $e){
    $_SESSION['message'] = "Data is NOT deleted.";
    header("location:donor_list.php");
  
    // @TODO
    // : any error sshould go to log file in production environment
  }