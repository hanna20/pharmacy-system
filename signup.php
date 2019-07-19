<!-- <?php 
  include("connect.php") 
?>
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Reigster</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="post" action="connect.php" name="sign" onsubmit="return check()">
              <div class="form-label-group">
              	&nbsp;
                <!-- first name -->
                 <input type="text" id="fn" class="form-control" placeholder="First Name" name="fname" required autofocus>
               </div>
               <br>
                 <div class="form-label-group">
                <!-- middle name -->
                 <input type="text" id="mn" class="form-control" placeholder="Middle Name" name="mname" required autofocus>
               </div>
               <br>
                 <div class="form-label-group">
                 <!-- last name -->
                 <input type="text" id="ln" class="form-control" placeholder="Last Name" name="lname" required autofocus>
               </div>
               <br>
                 <div class="form-label-group">
                 <!-- birthdate -->
                 <input type="text" id="dat" class="form-control" placeholder="Date of Birth" name="date" required autofocus>
               </div>
               <br>
                 <div class="form-label-group">
                 <!-- email -->
                <input type="email" id="em" class="form-control" placeholder="Email address" name="email" required autofocus>
              </div>
              <br>
                <div class="form-label-group">
                <!-- username -->
                <input type="text" id="un" class="form-control" placeholder="User Name" name="uname" required autofocus>
              </div>
              <br>
              <div class="form-label-group">
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                <!-- <label for="inputPassword">Password</label> -->
              </div>
              <br>
              <div class="form-label-group">
                <input type="password" id="cp" class="form-control" placeholder="Confirm Password" name="cpass" required>
                <!-- <label for="inputPassword">Password</label> -->
              </div>

             
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="Signup">Signup</button>
              <p>Already have an account. <a href="login.php">Login here!</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript">




function check() {



    var fname = document.sign.fname.value;
    var mname = document.sign.mname.value;
    var lname = document.sign.lname.value;
    var male = document.sign.male.value;
    var email = document.sign.email.value;
    var uname = document.sign.uname.value;
    var pass = document.sign.pass.value;
    var cpass = document.sign.cpass.value;
   
    

    if(fname == null || fname == '')
    {
        document.getElementById("fn").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("fn").style.color="red";
        return false;
    }
    else if(mname == null || mname == '')
    {
        document.getElementById("mn").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("mn").style.color="red";
        return false;
    }

     else if(lname == null || lname == '')
    {
        document.getElementById("ln").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("ln").style.color="red";
        return false;
    }
 
    else if(male == null || male == '')
    {
        document.getElementById("gender").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("gender").style.color="red";
        return false;
    }

    else if(email == null || email == '')
    {
        document.getElementById("em").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("em").style.color="red";
        return false;
    }
  
   else if(uname == null || uname == '')
    {
        document.getElementById("un").innerHTML="<html>&nbsp&nbsp</html>*Required!";
        document.getElementById("un").style.color="red";
        return false;
    }

    else  if(pass != cpass) {
        //document.write(document.sign.pass.innerHTML="Password Doesn't Match!");
        document.getElementById("pass").innerHTML="<span>*Password not Match!";
        document.getElementById("pass").style.color="red";
        document.getElementById("pass").style.fontFamily="Arial";
        return false;
    }

 
    
   
    else{
        return true;
    }


   


}
</script>





</body>
</html>