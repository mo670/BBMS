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
<?php include_once('./partials/header.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('./partials/navigation.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('./partials/aside.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Donor List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/frontend/index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
       <div class="col-md-12 form-group form-inline">
           
         
            
           
            </div>

            <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
    </div>
       <div class="col col-md-12 table-responsive">
      <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
              <thead>
                  <tr>
                      <th>SL.</th>
                      <th>Full Name</th>
                      <th>Age</th>
                      <th>Blood Group</th>
              <th>Unit(ml)</th>
              <th>Disease</th>
              <th>Contact</th>
              <th>Action</th>
                  </tr>
              </thead>
          <tbody id="invoices_div">
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

      <td>
      <a href='show.php?id=<?php echo $data["id"] ?>'>Show</a> |
      <a href='edit.php?id=<?php echo $data["id"] ?>'>Edit</a> |
      <a href='delete.php?id=<?php echo $data["id"] ?>' onclick="return confirm('are you sure?')"> Delete </a>

      </td>
    </tr>
   <?php
   endforeach;
   ?> 
          </tbody>
          </table>
      </div>
</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('./partials/footer.php');?>
</body>
</html>
