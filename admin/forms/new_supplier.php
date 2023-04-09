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
            <h1 class="m-0">New Supplier</h1>
            <p>Adding Supplier</p>
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
           <!-- Change End Plz -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
           <form action="#" method="post">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="put your secret password">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="address" class="form-control" id="address" name="address" placeholder="">
                  </div> 
                  <div class="col-md-12">
     
                       <div class="form-outline">
                         <label class="form-label" for="phoneNumber">Phone Number</label>
                         <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                       </div>
     
                     </div>
                  <br>
                  <div class="col-md-6">
                  <label for="gender" class="text-black">Gender</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male" class="text-black">Male</label>
                    <input type="radio" id="male" name="gender" value="female">
                    <label for="female" class="text-black">Female</label>
                        </div>
                        <div class="col-md-6">
                        <label for="marital" class="text-black">Marital Status</label>
                    <input type="radio" id="married" name="marital" value="married">
                    <label for="married" class="text-black">Married</label>
                    <input type="radio" id="single" name="marital" value="single">
                        <label for="single" class="text-black">Single</label>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    </div>
                    </div>
                </div>
            </form>
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
