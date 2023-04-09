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
$dbUserName = 'root';
$dbPassword = "root";
$db = "blood_bank";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $dbUserName, $dbPassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($pdo) {
		//echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	  echo $e->getMessage();
} 

$sql = "SELECT * FROM donors";



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

</head>
<body>
<table class="table" border="1px" style="width:1500px,text-align center">
  <thead>
    <tr>

            <th>SL.</th>
            <th>Full Name</th>
              <th>Age</th>
             <th>Blood Group</th>
              <th>Unit(ml)</th>
              <th>Disease</th>
              <th>Contact</th>
        
                  
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
      <td><?php echo $data['disease'];?></td>
      <td><?php echo $data['contact'];?></td>
   
      
    </tr>
   <?php
   endforeach;
   ?> 
  </tbody>
</table>
</body>
</html