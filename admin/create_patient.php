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
            <h1 class="m-0">Patient Request</h1>
            <p>Add Patient</p>
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
           <form action="create_patient_processor.php" method="post">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Fullname <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="fullname">
                  </div>
                  <div class="col-md-6">
                    <label for="age" class="text-black">Age <span class="text-danger">*</span></label>
                    <input type="digit" class="form-control" id="age" name="age">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="blood_group" class="text-black">Blood Group <span class="text-danger">*</span></label>
                    <select name="blood_group" class="form-control" aria-label="Default select example">
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
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="unit" class="text-black">Unit(ml) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="unit">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="reason" class="text-black"> Reason <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="">
                  </div> 
                  <div class="col-md-12">
     
                       <div class="form-outline">
                         <label class="form-label" for="requested_date">Requested Date</label>
                         <input name="requested_date" type="date" id="requested_date" class="form-control form-control-lg" />
                       </div>
     
                     </div>
                     <div class="col-md-12">        
                      <div class="form-outline">
                        <label class="form-label" for="contact">Contact</label>
                        <input name="contact" type="tel" id="contact" class="form-control form-control-lg" />
                      </div>

                    </div>
                  <div class="col-md-12">
                  <label for="address" class="text-black">Address</label>
                    <input type="text" id="address" name="address" class="form-control form-control-lg" placeholder="Please Enter your Address Here">
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
