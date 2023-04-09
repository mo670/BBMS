<!DOCTYPE html>
<html lang="en">
<?php include_once('./elements/header.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

  <!-- Navbar -->
  <?php include_once('./elements/navigation.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('./elements/aside.php');?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registration</h1>
        
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
           <form action="create_donor_processor.php" method="post">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="first_name" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                  </div>
                  <div class="col-md-6">
                    <label for="last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="unit" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="user_name" class="text-black">User Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="disease" name="user_name" placeholder="">
                  </div> 
                  <div class="col-md-12">
     
                       <div class="form-outline">
                         <label class="form-label" for="last_donation">Mobile Number</label>
                         <input name="mobile_no" type="tel" id="mobile_no" class="form-control form-control-lg" />
                       </div>
     
                     </div>
                     <div class="col-md-12">        
                      <div class="form-outline">
                        <label class="form-label" for="contact">Address</label>
                        <input name="address" type="text" id="address" class="form-control form-control-lg" />

                        <div class="citys">
    <!-- <label for="exampleDataList" class="form-label">City</label> -->
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Name of City...">
                            <datalist id="datalistOptions">
                            <option value="Dhaka"> 
                            <option value="khulna">
                            <option value="Rajshahi">
                            <option value="Borishal">
                            <option value="Chottogram">
                            <option value="Rangpur">
                            </datalist>
                            </div>
                      </div>

                    </div>
                    <!-- <div class="col-md-6">
                  <label for="gender" class="text-black">Gender</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male" class="text-black">Male</label>
                    <input type="radio" id="male" name="gender" value="female">
                    <label for="female" class="text-black">Female</label>
                        </div> -->
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
       </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('./elements/footer.php');?>
</body>
</html>
