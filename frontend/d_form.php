
<!doctype html>
<html lang="en">
  <head>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap1/bootstrap.min.css">

    <title>Donor Form</title>
    <link rel="stylesheet" href="d_form.css">
  </head>
 <body>
 
     <div class="container">
       <form action="d_form_processor.php" method="POST">
      <h3>DONATE BLOOD</h3>

      <div class="row">
        <div class="col">
            <label>Full Name</label>
          <input name="fullname" type="text" class="form-control" placeholder="Full name" aria-label="Full name">
        </div>
        <div class="col">
            <label>Age</label>
          <input name="age" type="number" class="form-control" placeholder="" aria-label="age" style="margin-bottom: 10px;">
        </div>
      </div>

     
      <div bg>
 <div class="row">
      <div class="col" >
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
   <div class="col">
          <label>Unit(in ml)</label>
          <input name="unit" type="number" class="form-control" placeholder="" aria-label="unit" style="margin-bottom: 10px;">
  </div>
</div>
<div class="row">
      <div class="col">
            <label>Disease(if any)</label>
          <input name="disease" type="text" class="form-control"  aria-label="disease">

</div>

<div class="col">
          <label>Last Donation</label>
          <input name="last_donation" type="date" class="form-control" placeholder="" aria-label="unit" style="margin-bottom: 10px;">
  </div>
<div class="col">
            <label>Contact</label>
          <input name="contact" type="tel" class="form-control"  aria-label="contact">
</div>
<div>
          <label>Location</label>
          <input name="location" type="text" class="form-control" placeholder="" aria-label="location" style="margin-bottom: 10px;">
  </div>

<!-- <div class="col">
</div> --> 
        <!-- <div class="gender">
          <p>Gender:</p>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender"  value="male">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender"  value="female">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
      </div> -->
      <button type="submit">Donate</button>
</form>
    
    <script src="bootstrap.bundle.min.js" ></script>
  </body>
</html>
