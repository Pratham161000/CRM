<?php
require_once './googleconn/vendor/autoload.php';
require_once './connection.php';
  
// init configuration
$clientID = '773854944857-kbi2bt8ku52p48g6v7vmgapkmeqodr6c.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/project/redirect.php';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// $con = $GLOBALS['con'];
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $facultyExpr = "/pratham.buddhadev111596@marwadiuniversity.ac.in/i";
  $studentExpr = "/pratham619buddhadev@gmail.com/i";
  $stmt = "";
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    if($email === "pratham.buddhadev111596@marwadiuniversity.ac.in"){
      $stmt = $con->prepare("SELECT * FROM admindetails WHERE adminemail = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows <= 0){
        $stmt = $con->prepare("INSERT INTO admindetails (adminname,adminemail) VALUES (?,?)");
        $stmt->bind_param("ss",$name,$email);
        $stmt->execute();
      }
      setFacultySession($email,$con);
      header("Location: ./showstd.php");
    }
    else if(preg_match($facultyExpr,$email)){
      $stmt = $con->prepare("SELECT * FROM admindetails WHERE adminemail = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows <= 0){
        $stmt = $con->prepare("INSERT INTO admindetails (adminname,adminemail) VALUES (?,?)");
        $stmt->bind_param("ss",$name,$email);
        $stmt->execute();
      }
      setFacultySession($email,$con);
      header("Location: ./showstd.php");
    }
    else if(preg_match($studentExpr,$email)){
      preg_match('/[0-9]{6}[0-9]*/',$email,$match);
      $stmt = $con->prepare("SELECT * FROM otherfacultydetails WHERE facultyEmail = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows <= 0){
        $stmt = $con->prepare("INSERT INTO otherfacultydetails (facultyName,facultyEmail) VALUES (?,?)");
        $stmt->bind_param("ss",$name,$email);
        $stmt->execute();
      }
      setStudentSession($email,$con);
      header("Location: ./addstdbyfaculty.php");
    }
  }

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  header("Location: ".$client->createAuthUrl());
}

function setStudentSession($email,$con){
  $sql = "SELECT facultyid FROM otherfacultydetails WHERE facultyEmail = '$email'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $id = $row['facultyid'];
  $_SESSION['loggedin'] = 1;
  $_SESSION['facultyid'] = $id;

}

function setFacultySession($email,$con){
  $sql = "SELECT adminid FROM admindetails WHERE adminemail = '$email'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $id = $row['adminid'];
  $_SESSION['loggedin'] = 1;
  $_SESSION['adminid'] = $id;
}
?>