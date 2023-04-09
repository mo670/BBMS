$host = 'localhost';
$dbusername = 'root';
$dbpassword = "";
$db = "pharmacy_v2";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $dbusername, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($pdo) {
		//echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	  echo $e->getMessage();
} 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <thead>
    <tr></tr>
    </thead>
<tbody>
    <tr></tr>
    <tr></tr> 
    <tr></tr>
</tbody> 

    
</body>
</html>