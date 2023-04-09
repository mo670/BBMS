<!DOCTYPE html>


   

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap1/bootstrap.min.css">

    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <form action="login_processor.php" method="post">
      <div class="container">
    
    <h2>Login</h2>
    
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label"></label>
          <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="user name" style="width: 150%;">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label"></label>
          <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="type password" style="width: 150%;margin-bottom: 3px;">
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div>
        <div>
          <a href="google.com" style="color: rgb(172, 165, 155);">Forgot Password?</a>
        </div>
      
     
     <button><a class="button" href="#" role="submit">Login</a></button><br>

     <p>or Sign up with</p>
     <a href="#" class="fa fa-facebook">f</a>
     <a href="#" class="fa fa-twitter">t</a>
    </div>
  </form>
  
  </div>
 
  
</div>
</form>


    
    <script src="bootstrap.bundle.min.js" ></script>
  <footer></footer>
  </body>
</html>