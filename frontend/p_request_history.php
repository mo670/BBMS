<?php
session_start();
      if(array_key_exists('message',$_SESSION) && !empty($_SESSION['message'])){
    ?>
    <div>
        <?php
    echo $_SESSION['message'] ;
    $_SESSION['message'] = "";
    ?>        
</div>
    <?php
}
    

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
		//echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	  echo $e->getMessage();
} 

$sql = "SELECT * FROM patients";



try{
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();

    $dataset = $stmt->fetchAll();

  }catch(Exception $e){
      echo $e->getMessage();
  }  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Table</title>
  <link rel="stylesheet" href="d_request_history.css">
</head>
<body>
<table class="table" border="1">

<h4>Blood request</h4>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">fullName</th>
      <th scope="col">age</th>
      <th scope="col">blood_group</th>
      <th scope="col">unit</th>
      <th scope="col">reason</th>
      <th scope="col">contact</th>
      <th scope="col">location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
$counter = 0;
foreach($dataset as $data):
  //echo "".$data['fname']."</a>"."<br />";
  $counter++;

    ?>
    <tr>
      <th scope="row"><?php echo $counter;?></th>
      <td><?php echo $data['fullname'];?></td>
      <td><?php echo $data['age'];?></td>
      <td><?php echo $data['blood_group'];?></td>
      <td><?php echo $data['unit'];?></td>
      <td><?php echo $data['reason'];?></td>
      <td><?php echo $data['contact'];?></td>
      <td><?php echo $data['location'];?></td>

      <td>
      <a href='show.php?id=<?php echo $data["id"] ?>'>Show</a> |
      <a href='edit.php?id=<?php echo $data["id"] ?>'>Edit</a> 
      <a href='delete.php?id=<?php echo $data["id"] ?>' onclick="return confirm('are you sure?')"> Delete </a>

      </td>
    </tr>
   <?php
   endforeach;
   ?> 
  </tbody>
</table>
</body>
</html>