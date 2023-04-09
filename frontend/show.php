<?php
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";


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


$sql = "SELECT * FROM donors WHERE id = :id";

try{
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($data);
    if($result)
    {// true means: execution of query is successful
      $data = $stmt->fetch();
    //   print_r($data);

    }
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
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <h1> Donor Request</h1>
    <div class="container">
         <div>
            <label for="customertype"> Customer Type</label>
            <span><?php echo $data['fullname']?></span>
         </div>
          <div>
            <label for="nametitle"> age</label>
            <span><?php echo $data['age']?></span>
            
         </div>
         <div>
         <label>Blood Group</label>
         <select name="blood_group" class="form-select bg" aria-label="Default select example">
                 <option selected>Blood Group</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
          </select>
</div>
  <div>        
<label>Unit(in ml)</label>
          <input name="unit" type="number" class="form-control" placeholder="" aria-label="unit" style="margin-bottom: 10px;">
</div>
<div class="disease">
            <label>Disease(if any)</label>
          <input name="disease" type="text" class="form-control"  aria-label="disease">
</div>
    <div>  
<label>Contact</label>
          <input name="contact" type="text" class="form-control"  aria-label="contact">
</div>
    
                  </form>
      </div>
</body>
</html>