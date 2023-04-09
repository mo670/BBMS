<?php

session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

$fullname=$_POST['fullname'];
$age=$_POST['age'];
$blood_group=$_POST['blood_group'];
$unit=$_POST['unit'];
$reason=$_POST['reason'];
$requested_date=date("Y:m:d  h:i:s");
$contact=$_POST['contact'];
$address=$_POST['address'];



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
$sql= "INSERT INTO `patients`(`id`,`fullname`, `age`, `blood_group`, `unit`, `reason`,`requested_date`, `contact`,`address`)
                                  VALUES (null, 
                                    ?,
                                    ?, 
                                    ?, 
                                    ?,
                                    ?, 
                                    ?,
                                    ?,
                                    ?)";

// print_r($sql);
//data preparation
$data=[$fullname,$age,$blood_group,$unit,$reason,$requested_date,$contact,$address];


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
      $_SESSION['message']= "Data is stored successfully";
      header("location:patient_list.php");
}
  
  }
  
  catch(Exception $e)
  {
    echo $e->getMessage();
    $_SESSION['message']= "Data is NOT stored successfully";
    header("location:create_patient.php"); 
  }
  
  ?>
