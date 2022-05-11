<?php
include "./template/header.php";                 
?>
<!DOCTYPE html>
<html>
<head>
<title>insert</title>
<link rel="stylesheet" type="text/css" href="./css/css.css">
</head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
<div class="navigation">
	<ul>
    <li><a href="./profile.php">Admin <br>Profile</a></li>
    	<li><a href="./addstd.php" class="active">Add Student Information</a></li>
    	<li><a href="./showstd.php">Show Student Data</a></li>
		<li><a href="./email.php">Communication<br>via Gmail</a></li>
		<li><a href="./experiment1.php">Bulk <br> Mail</a></li>
    </ul>
</div>
<div class="row text-center">
<div class="container">
<h1>Add Student Information</h1>
<form action="addstd.php" method="post">
<div class="row">
<div class="col-25">
	<label>Filler Name: - </label>
</div>
<div class="col-75">
	<input type="text" name="fillername" placeholder="Form Filler Name" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Filler Email ID: - </label>
</div>
<div class="col-75">
	<input type="text" name="filleremail" placeholder="Form Filler Email ID" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Student Name: - </label>
</div>
<div class="col-75">
	<input type="text" name="stname" placeholder="Student Name" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Student Last Name: - </label>
</div>
<div class="col-75">
	<input type="text" name="stlastname" placeholder="Student Last Name" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Student Email ID: - </label>
</div>
<div class="col-75">
	<input type="text" name="stdemail" placeholder="Student Email ID" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Gender: - </label>
</div>
<div class="col-75">
	<input type="radio" name="stgender" value="male"> Male
	<input type="radio" name="stgender" value="female"> Female
</div></div>
<!-- <input type="text" name="stgender" placeholder="Student Gender" required><br><br> -->
<div class="row">
<div class="col-25">
	<label>School Name: - </label>
</div>
<div class="col-75">
	<input type="text" name="stschoolname" placeholder="Student School Name" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Standard: - </label>
</div>
<div class="col-75">
	<input type="text" name="ststandard" placeholder="Student Standard" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Diploma/Degree: - </label>
</div>
<div class="col-75">
	<input type="text" name="stfortake" placeholder="For taking Admission in Diploma/Degree" required>
</div></div>
<div class="row">
<div class="col-25">
	<label>City: - </label>
</div>
<div class="col-75">
	<select name="stcity" id="stucity" required>
		<option value="" disabled selected hidden>-- Select your City --</option>
		<option value="volvo">Volvo</option>
		<option value="ahmedabad">Ahmedabad</option>
		<option value="amreli">Amreli</option>
		<option value="anand">Anand</option>
		<option value="ankleshwar">Ankleshwar</option>
		<option value="bharuch">Bharuch</option>
		<option value="bhavnagar">Bhavnagar</option>
		<option value="bhuj">Bhuj</option>
		<option value="cambay">Cambay</option>
		<option value="dahod">Dahod</option>
		<option value="deesa">Deesa</option>
		<option value="dharampur">Dharampur</option>
		<option value="dholka">Dholka</option>
		<option value="gandhinagar">Gandhinagar</option>
		<option value="godhra">Godhra</option>
		<option value="himatnagar">Himatnagar</option>
		<option value="idar">Idar</option>
		<option value="jamnagar">Jamnagar</option>
		<option value="junagadh">Junagadh</option>
		<option value="kadi">Kadi</option>
		<option value="kalavad">Kalavad</option>
		<option value="kalol">Kalol</option>
		<option value="kapadvanj">Kapadvanj</option>
		<option value="karjan">Karjan</option>
		<option value="keshod">Keshod</option>
		<option value="khambhalia">Khambhalia</option>
		<option value="khambhat">Khambhat</option>
		<option value="kheda">Kheda</option>
		<option value="khedbrahma">Khedbrahma</option>
		<option value="kheralu">Kheralu</option>
		<option value="kodinar">Kodinar</option>
		<option value="lathi">Lathi</option>
		<option value="limbdi">Limbdi</option>
		<option value="lunawada">Lunawada</option>
		<option value="mahesana">Mahesana</option>
		<option value="mahuva">Mahuva</option>
		<option value="manavadar">Manavadar</option>
		<option value="mandvi">Mandvi</option>
		<option value="mangrol">Mangrol</option>
		<option value="Mansa">Mansa</option>
		<option value="mehmedabad">Mehmedabad</option>
		<option value="modasa">Modasa</option>
		<option value="morvi">Morvi</option>
		<option value="nadiad">Nadiad</option>
		<option value="navsari">Navsari</option>
		<option value="padra">Padra</option>
		<option value="palanpur">Palanpur</option>
		<option value="palitana">Palitana</option>
		<option value="pardi">Pardi</option>
		<option value="patan">Patan</option>
		<option value="petlad">Petlad</option>
		<option value="porbandar">Porbandar</option>
		<option value="radhanpur">Radhanpur</option>
		<option value="rajkot">Rajkot</option>
		<option value="rajpipla">Rajpipla</option>
		<option value="rajula">Rajula</option>
		<option value="ranavav">Ranavav</option>
		<option value="rapar">Rapar</option>
		<option value="salaya">Salaya</option>
		<option value="sanand">Sanand</option>
		<option value="savarkundla">Savarkundla</option>
		<option value="sidhpur">Sidhpur</option>
		<option value="sihor">Sihor</option>
		<option value="songadh">Songadh</option>
		<option value="surat">Surat</option>
		<option value="talaja">Talaja</option>
		<option value="thangadh">Thangadh</option>
		<option value="tharad">Tharad</option>
		<option value="umbergaon">Umbergaon</option>
		<option value="umreth">Umreth</option>
		<option value="una">Una</option>
		<option value="unjha">Unjha</option>
		<option value="upleta">Upleta</option>
		<option value="vadnagar">Vadnagar</option>
		<option value="vadodara">Vadodara</option>
		<option value="valsad">Valsad</option>
		<option value="vapi">Vapi</option>
		<option value="veraval">Veraval</option>
		<option value="vijapur">Vijapur</option>
		<option value="viramgam">Viramgam</option>
		<option value="visnagar">Visnagar</option>
		<option value="vyara">Vyara</option>
		<option value="wadhwan">Wadhwan</option>
		<option value="wankaner">Wankaner</option>
		<option value="Adalaj">Adalaj</option>
		<option value="Adityana">Adityana</option>
		<option value="alang">Alang</option>
		<option value="ambaji">Ambaji</option>
		<option value="ambaliyasan">Ambaliyasan</option>
		<option value="andada">Andada</option>
		<option value="anjar">Anjar</option>
		<option value="anklav">Anklav</option>
		<option value="antaliya">Antaliya</option>
		<option value="arambhada">Arambhada</option>
		<option value="atul">Atul</option>
	</select>
</div></div>
<div class="row">
<div class="col-25">
	<label>Phone Number: - </label>
</div>
<div class="col-75">
	<input type="text" name="stphonenumber" placeholder="Student Phone Number" pattern="[0-9]{10}" title="only 10 numerical value allowed." required>
</div></div>
<div class="row">
<div class="col-25">
	<label>Conversation: - </label>
</div>
<div class="col-75">
<!-- <input type="text" name="stconversation" placeholder="Write here what your Conversation with student" required><br><br> -->
	<textarea name="stconversation" rows="6" cols="100" placeholder="Type here your all Conversation....................">
	</textarea>
</div></div>
<div class="row">
	<input type="submit" name="submit" value="insert">
</div>
</form>
</div>
</div>
</body>
</html>
<?php
            include "./template/footer.php";                
          ?>
<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
$fillername = $_POST['fillername'];
$filleremail = $_POST['filleremail'];
$stname = $_POST['stname'];
$stlastname = $_POST['stlastname'];
$stdemail = $_POST['stdemail'];
$stgender = $_POST['stgender'];
$stschoolname = $_POST['stschoolname'];
$ststandard = $_POST['ststandard'];
$stfortake = $_POST['stfortake'];
$stcity = $_POST['stcity'];
$stphonenumber = $_POST['stphonenumber'];
$stconversation = $_POST['stconversation'];

$sql = "INSERT INTO `studentinfo` VALUES ('$id','$fillername','$filleremail','$stname','$stlastname','$stgender','$stschoolname','$ststandard','$stfortake','$stcity','$stphonenumber','$stconversation','$stdemail')";
$data=mysqli_query($con,$sql);
if ($data) {
echo "Successfully Data Inserted";
}else
{
echo "Sorry something is wrong in your data";
}
}
?>