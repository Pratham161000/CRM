<?php
include "./template/header.php";                 
?>
<html>
<head>
<meta charset="utf-8">
<title>Other Faculty Profile</title>
<link rel="stylesheet" type="text/css" href="./css/css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .card {
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
    max-width: 600px;
    margin: auto;
    text-align: left;
    font-family: arial;
    border-radius: 4px;
    background: skyblue;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    padding: 14px 80px 18px 36px;
    cursor: pointer;
}
.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
    .tag{
        text-align: center;
    }
    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }
    button:hover, a:hover {
        opacity: 0.7;
    }
</style>
</head>
<body>
<div class="navigation">
	<ul>
    	<li><a href="./otherfacultyprofile.php" class="active">Faculty <br>Profile</a></li>
    	<li><a href="./addstdbyfaculty.php">Add Student Information</a></li>                                       
    </ul>
</div>
<br><br>  
<h2 style="text-align:center">User Profile</h2>     
</body>
<?php
 require('connection.php');
$result = mysqli_query($con,"SELECT *FROM otherfacultydetails ");
while($row = mysqli_fetch_array($result))
{
      echo "<br><br>";
      echo "<div class='card'>";
      echo "<h1 class='tag'> Faculty Profile </h1>";
      echo "<div style='margin: 24px 0;'>";
      echo "<br><b>Faculty ID: - </b> ". $row['facultyid'];
      echo "<br><b>Faculty Name: - </b>". $row['facultyName'];
      echo "<br><b>Faculty Email: - </b>". $row['facultyEmail'];
      echo "</div>";
      echo "<p><a href='logout.php'><button value='logout'>Logout</button></a></p>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
}
mysqli_close($con);
?>
    </main>
<br><br>
 
</html>
<?php
            include "./template/footer.php";                
          ?>