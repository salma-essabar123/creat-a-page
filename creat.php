<?php
require "database.php";
?>
<?php 
if(isset($_POST['creat'])){
  $name=$_POST['nm'];
  $tel=$_POST['tel'];
  $email=$_POST['email'];
  $cin=$_POST['cin'];
  $date=$_POST['date'];
 $pic=$_FILES['img'];
 $user=$_POST['userr'];
 $pass=$_POST['passs'];
  $sql1="INSERT INTO usersdata(name,email,number,cin,birthday,pic) VALUES('$name','$email','$tel','$cin','$date','$pic');";
  $sql2="INSERT INTO users(username,password) VALUES('$user','$pass');";
  mysqli_query($conn,$sql1);
  mysqli_query($conn,$sql2);

  echo "<h1>CONGRATS</h1>";
        echo "<h3>ur acount has been created succefuly! click <a href='index.php'>here</a></h3>";   
}
?>
