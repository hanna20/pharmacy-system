<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script> -->

</head>
<body>

<body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="https://v4-alpha.getbootstrap.com/examples/carousel/#">Pharmacy</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://v4-alpha.getbootstrap.com/examples/carousel/#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://v4-alpha.getbootstrap.com/examples/carousel/#">Drug</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://v4-alpha.getbootstrap.com/examples/carousel/#">About us</a>
          </li>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0"> -->
         <!--  <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->

        <!-- </form> -->
      </div>
    </nav>

    <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">LogIn</h5>
            <form class="form-signin">
              <div class="form-label-group">
              	&nbsp;
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <!-- <label for="inputEmail">Email address</label> -->
              </div>
              <br>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <!-- <label for="inputPassword">Password</label> -->
              </div>

             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login in</button>
              <hr class="my-4">
              <p>Don't have an account. <a href="signup.php">Signup here!</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</body>
</html>