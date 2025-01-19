<?php 
    include("connection.php");
    include("login.php")
    ?>
    
    <html>
<head>
<title>Hall Reservation Hub</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <div class="header">
        <img src="clg.jpeg" width="500px" class="center">
    </div>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                
            
             <a class="navbar-brand" href="#">HALL RESERVATION HUB</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="bi bi-menu-up"></i>>
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-menu" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
              </svg>
              
            </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link"  href="website.html">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">LOGIN</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>          </section>
        </div>
        <section class="vh-100">
          <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
              <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="pic31.jpg"
                  class="img-fluid" alt="Phone image">
              </div>
              <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h1 align="center">SIGN IN</h1>
                <form name="form" action="" onsubmit="return isvalid()" method="POST">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <i class="bi bi-person-circle"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <label class="form-label" >Username</label>
                    <input type="username" id="user" class="form-control form-control-lg" name="user" placeholder="Username"/>
                    
                  </div>
        
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <i class="bi bi-lock-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                      <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>
                    <label class="form-label" >Password</label>
                    <input type="password" id="pass" class="form-control form-control-lg" name="pass" placeholder="Password" />
                    
                  </div>
        
                  <div class="link">
                    <a href="#!">Forgot password?</a>
                  </div>
        
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary" id="btn" value="Login" name="submit">Sign in</button>
        
                  
        
                </form>
              </div>
            </div>
          </div>
        </section>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>