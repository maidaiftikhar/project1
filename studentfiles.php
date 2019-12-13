<?php
$conn = mysqli_connect('localhost','root','','student_portal');
$classkey=$_GET['id'];
$query="SELECT * FROM files WHERE class_id=$classkey";
$result=mysqli_query($conn, $query);
while($row= mysqli_fetch_assoc($result)){
  $file=$row['file_name'];
  $filepath=$row['file_path'];
  echo '<a href="openfile.php?open='.$filepath.'">'.$file.'</a>';
  echo "<br>";

}

 ?>
