
<?php
    $id = $_GET['id'];
    $data = ['id'=>$id];

    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $blood_group=$_POST['blood_group'];
    $unit=$_POST['unit'];
    $disease=$_POST['disease'];
    // $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $last_donation=date("Y:m:d  h:i:s");





// $data = [
//         'id' => $id,
//         'order_item'=>$order_item,
//         'price'=>$price,
//         'quantity'=>$quantity,
//         'description'=>$description,
//         'item_image'=>$item_image
        // 'description'=>$food_description  
        // ];


// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();
// <!-- step:2 connect to database -->
$host = 'localhost';
$dbUserName = 'root';
$dbPassword = 'root';
$db = 'blood_bank';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
  $pdo = new PDO($dsn, $dbUserName, $dbPassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($pdo) {
    echo "Connected to the $db database successfully!";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

   

$sql= "INSERT INTO `donors`(`id`,`fullname`, `age`, `blood_group`, `unit`, `disease`, `contact`,`address`, `last_donation`)
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
$data=[$fullname,$age,$blood_group,$unit,$disease,$contact,$address,$last_donation];

try{
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($data);
//     
    
    if($result){// true means: execution of query is successful
      $data = $stmt->fetch();
       header('location:donor_list.php');
       //echo "Data is stored successfully";
    }
  }catch(Exception $e){
    echo $e->getMessage();
  }



?>

