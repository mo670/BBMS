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
            <h1 class="m-0">New Invoice</h1>
            <p>Creating New Invoice</p>
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
       <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="number" class="form-control" id="by_invoice_number" placeholder="By Invoice Nuber" onkeyup="searchInvoice(this.value, 'INVOICE_ID');">
            &emsp;<input type="text" class="form-control" id="by_customer_name" placeholder="By Customer Name" onkeyup="searchInvoice(this.value, 'NAME');">
            &emsp;<label class="font-weight-bold" for="">By Invoice Date :&emsp;</label>
            <input type="date" class="form-control" id="by_date" onchange="searchInvoice(this.value, 'INVOICE_DATE');">
            &emsp;<button class="btn btn-success font-weight-bold" onclick="refresh();"><i class="fas fa-sync"></i></button>
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
                      <th>Invoice No</th>
                      <th>Customer Name</th>
                      <th>Date</th>
              <th>Total Amount</th>
              <th>Total Discount</th>
              <th>Net Total</th>
              <th>Action</th>
                  </tr>
              </thead>
          <tbody id="invoices_div">
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
