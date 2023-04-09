<?php

session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$user_name=$_POST['user_name'];
// $gender=$_POST['gender'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
// $created_at=$_POST['created_at'];
// $updated_at=$_POST['updated_at'];




// $data=['fullname'=> $fullname, 'age'=> $age,'blood_group'=>$blood_group,'unit'=>$unit,'disease'=>$disease,'contact'=>$contact];

// database connection

$host= 'localhost';
 $dbusername= 'root';
 $dbpassword='root';
 $dbname='blood_bank';

 $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if ($pdo) {
		echo "Connected to the $dbname database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

//insert data into database

// $sql ="INSERT INTO 'patients' ('fullname','age','blood_group','unit','disease','contact') 
//                           VALUES(
//                               :fullname,
//                               :age,
//                               :blood_group,
//                               :unit,
//                               :disease,
//                               :contact)";

// INSERT INTO `donors`(`fullname`, `age`, `blood_group`, `unit`, `disease`, `contact`, `last_donation`) 
// VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

// (INTO er serial r database er row er serial same na hole jiboneo insert hobe na..)
$sql= "INSERT INTO `registrations`(`id`,`first_name`,`last_name`, `email`, `password`, `user_name`, `mobile_no`, `address`)
                                  VALUES (null, 
                                    ?,
                                    ?, 
                                    ?, 
                                    ?,
                                    ?, 
                                    ?,
                                    ?)";

// print_r($sql);
//data preparation
$data=[$first_name,$last_name,$email,$password,$user_name,$mobile_no,$address];


// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();


try
{
      $stmt = $pdo->prepare($sql);

    $result = $stmt->execute($data);
    print_r($result);
    if($result)
    {
      $_SESSION['message']= "Please login!";
      header("location:login.php");
}
  
  }
  
  catch(Exception $e)
  {
    echo $e->getMessage();
    $_SESSION['message']= "Data is NOT stored successfully";
    header("location:registration.php"); 
  }
  
  ?>
