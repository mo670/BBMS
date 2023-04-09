<?php
    $id = $_GET['id'];
    $data = ['id'=>$id];


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
   $sql = "SELECT * FROM donors WHERE id = :id";

try{
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($data);
    if($result){// true means: execution of query is successful
      $data = $stmt->fetch();
       // header('location:food_edit.php');
       echo "Data is stored successfully";
    }
  }catch(Exception $e){
    echo $e->getMessage();
  }



?>


<!DOCTYPE html>
<html lang="en">
<?php include_once('./partials/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once('./partials/navigation.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once('./partials/aside.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Order</h1>
              <!-- <p>Adding Shop</p> -->
             <!--  -->
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
     
            
    <section class="container background-color mt-5">
    <div class="row mx-5">
      <!-- <div class="col-md-6 mt-3">
        <img src="../frontend/images/food5.webp " style="height: 600px; width: 500px;">

      </div> -->
      <div class="col-md-12">
        <form action="edit_processor.php" method="POST">
          <h4 class="mb-3">Update donors history </h4>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">serial no</label>
            <input type="text" class="form-control"  value="<?php echo $data['id']?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Full Name</label>
              <input type="text" class="form-control"  value="<?php echo $data['fullname']?>"id="exampleInputPassword1" name="fullname">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"> Age</label>
              <input type="text" class="form-control" value="<?php echo $data['age']?>" id="exampleInputPassword1" name="age">
            </div>
             <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Blood Group</label>
              <input type="text" class="form-control"  value="<?php echo $data['blood_group']?>" id="exampleInputPassword1" name="blood_group">
            </div>
             <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Unit(ml)</label>
              <input type="digit" class="form-control" value="<?php echo $data['unit']?>"id="exampleInputPassword1" name="unit">
            </div>
          <div class="mb-3">
            <label for="filebutton" class="form-label">Disease</label>
            <input type="text" class="input-file" value="<?php echo $data['disease']?>" id="exampleInputPassword1" name="disease">
          </div>
          <div class="mb-3">
            <label for="filebutton" class="form-label">Contact</label>
            <input type="digit" class="input-file" value="<?php echo $data['contact']?>" id="exampleInputPassword1" name="contact">
          </div>
          <div class="mb-3">
            <label for="filebutton" class="form-label">Address</label>
            <input type="text" class="input-file" value="<?php echo $data['address']?>" id="exampleInputPassword1" name="address">
          </div>
          
          
          
       
         
          
         
        
          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>

    </div>

  </section>
  <!-- /.content-wrapper -->
  <!-- <?php include_once('./partials/footer.php'); ?> -->
</body>

</html>