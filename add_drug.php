
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="https://v4-alpha.getbootstrap.com/examples/carousel/#">Pharmacy</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Drug</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
      </div>
    </nav>

    <br><br><br>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Drug Name</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        
                         <div class="form-group">
                            <label>Drug Date</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        
                         <div class="form-group">
                            <label>Expired Date</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        
                         <div class="form-group">
                            <label>Manufactured</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>