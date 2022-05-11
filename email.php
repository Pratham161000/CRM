<?php include 'controllers/authController.php' ?>
<?php
include "./template/header2.php";                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="./css/css.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <style>
      @import url('https://fonts.googleapis.com/css?family=Lora');
li { list-style-type: none; }
.form-wrapper {
  margin: 50px auto 50px;
  font-family: 'Lora', serif;
  font-size: 1.09em;
}
.form-wrapper.login { margin-top: 120px; }
.form-wrapper p { font-size: .8em; text-align: center; }
.form-control:focus { box-shadow: none; }
.form-wrapper {
  border: 1px solid #80CED7;
  border-radius: 5px;
  padding: 25px 15px 0px 15px;
}
.form-wrapper.auth .form-title { color: #007EA7; }
.home-wrapper button,
.form-wrapper.auth button {
  background: #007EA7;
  color: white;
}
.home-wrapper {
  margin-top: 150px;
  border-radius: 5px;
  padding: 10px;
  border: 1px solid #80CED7;
}
  </style>
  <title>Email</title>
</head>
<body>
<div class="navigation">
	<ul>
    	<li><a href="./profile.php">Admin <br>Profile</a></li>
    	<li><a href="./addstd.php">Add Student Information</a></li>
    	<li><a href="./showstd.php">Show Student Data</a></li>
        <li><a href="./email.php" class="active">Communication<br>via Gmail</a></li>  
        <li><a href="./experiment1.php">Bulk <br> Mail</a></li>                                 
    </ul>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth">
          
          <!-- form title -->
<h3 class="text-center form-title">Email</h3> <!-- or Login -->

<?php if (count($errors) > 0): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <li>
      <?php echo $error; ?>
    </li>
    <?php endforeach;?>
  </div>
<?php endif;?>


<form method="post" action="email.php">
						<div class="form-group" >
							<label>Enter Name</label>
							<input type="text" name="name" placeholder="Enter Name" class="form-control"  />
						</div>
						<div class="form-group">
							<label>Enter Email</label>
							<input type="text" name="email" class="form-control" placeholder="Enter Email"  />
						</div>
						<div class="form-group">
							<label>Enter Subject</label>
							<input type="text" name="subject" class="form-control" placeholder="Enter Subject"  />
						</div>
						<div class="form-group">
							<label>Enter Message</label>
							<textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
						</div>
						<button type="submit" name="signup-btn" class="btn btn-lg btn-block">Send</button>
					</form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
            include "./template/footer2.php";                
          ?>