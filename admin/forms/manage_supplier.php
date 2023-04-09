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
            <h1 class="m-0">Manage Supplier</h1>
            <p>Manage Existing Supplier</p>
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
          <label class="font-weight-bold" for="">Search :&emsp;</label>
          <input type="text" class="form-control" id="" placeholder="Search Customer" onkeyup="searchCustomer(this.value);">
        </div>

        <div class="col col-md-12">
          <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
        </div>

        <div class="col col-md-12 table-responsive">
          <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                  <thead>
                      <tr>
                          <th style="width: 2%;">SL.</th>
                  <th style="width: 10%;">Supplier ID</th>
                          <th style="width: 13%;">Supplier Name</th>
                  <th style="width: 13%;">Contact Number</th>
                  <th style="width: 17%;">Address</th>
                  <th style="width: 13%;">Email</th>
                  <th style="width: 17%;">Password</th>
                  <th style="width: 17%;">Company Name</th>
                  <th style="width: 15%;">Action</th>
                      </tr>
                  </thead>
                  <tbody id="customers_div">
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
