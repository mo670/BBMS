<!-- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <!-- offcanvas trigger -->
        
            <button 
            class="text-white bg-dark" 
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
      
      
          <a class="navbar-brand fw-bold text-uppercase" href="#">BloodBank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <form class="d-flex ms-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <i class="bi bi-search"></i>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                  </div>
            </form>
<ul class="navbar-nav mb-2 mb-lg-0"></ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Contact</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                  <li><hr class="dropdown-divider"></li>
                  
                </ul>
              </li>
          </div>
        </div>
    </nav>
     </div>
 </div>
 </div>
            



      <!--offcanvas -->
    
      
      <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
   
        <div class="offcanvas-body p=0">
            <nav class ="navbar-dark">
                <ul class="navbar-dark">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3"> DashBoard

                        </div><br>
                    </li>

                

                    <a href="#" class="nav-link px-3 active">
                        <span class="text-secondary">
                        <i class="bi bi-gear-fill"></i>
                    </span>
                    <span class="text-secondary" >Home</span>
                    </a><br>
                    
                        <a href="#" class="nav-link px-3 active">
                            <span class="text-secondary">
                                <i class="bi bi-droplet-fill"></i>
                        </span>
                        <span class="text-secondary" >Patient List</span>
                        </a><br>
                        <a href="#" class="nav-link px-3 active">
                            <span class="text-secondary">
                             <i class="bi bi-card-list"></i>
                        </span>
                        <span class="text-secondary" >Request Form</span>
                        </a><br>
                        <a href="p_request_form.php
                        " class="nav-link px-3 active">
                            <span class="text-secondary">
                                <i class="bi bi-person-rolodex"></i>
                        </span>
                        <span class="text-secondary" >Request History</span>
                        </a><br>

                        <a href="#" class="nav-link px-3 active" >
                            <span class="text-secondary">
                                <i class="bi bi-inbox"></i>
                        </span>
                        <span class="text-secondary" >Inbox Us</span>
                        </a><br>
                        <hr class="dropdown-divider"/>
                        <a href="#" class="nav-link px-3 active">
                            <span class="text-secondary">
                                <i class="bi bi-box-arrow-in-right"></i>
                        </span>
                        <span class="text-secondary" >logout</span>
                        </a>
                       

                </ul>
            </nav>
   
        </div>
      </div>