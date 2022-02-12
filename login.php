<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "database.php";?>
</head>
 <?php 
 if (isset($_POST['sub2']) && isset($_POST['user']) && isset($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM users";
    $sql3="SELECT * FROM usersdata";
    $result=mysqli_query($conn,$sql);
    $result3=mysqli_query($conn,$sql3);
    $login=0;
    while($row=mysqli_fetch_assoc($result)){
        if($row['username']==$user && $row['password']==$pass){
            $login++;
            break;
        }
    }
    if($login>0){
        $result2=mysqli_query($conn,$sql);
        while($roww=mysqli_fetch_assoc($result2)){
            echo $roww['username']."****".$roww['password']."<br>";
        }
        echo "second<br>";
        while($row2=mysqli_fetch_assoc($result3)){
            echo $row2['pic']."<br>";
        }
    }
    else {
        echo "u dont have acount here go back and <a href='index.php'>creat</a> one.";
    }
 }
 else{
     echo "<h2>ERROR!Click <a href='index.php'>here</a> to go back .</h2>";
 }
    ?>
    
 
</body>
</html>
