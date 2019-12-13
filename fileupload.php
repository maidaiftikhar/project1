<?php
// session_start();
// $_SESSION['key']=$_GET['key'];
include('fileuploadL.php');

if (!isset($_SESSION['teacher_email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: teacherLogin.php');
}
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: teacherLogin.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div>
  	<h2>File Upload</h2>
  </div>

  <form method="post" action="fileupload.php" enctype="multipart/form-data">

  	  <label>Click to Add Files</label>
  	  <input type="file" name="filename[]" multiple>

  	  <button type="submit" name="submit">upload</button>
		<!-- <button type="submit" name="down">down</button> -->

  </form>
</body>
</html>
