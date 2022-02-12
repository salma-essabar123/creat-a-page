<!DOCTYPE html>
<html lang="en">
<head>
    <title>creat_an_acount</title>
</head>
<body>
    <form action="creat.php" method="post" enctype="multipart/form-data">
        <label>username :</label><input type="text" name="userr">
        <label>password :</label><input type="password" name="passs">
        <label>FULL NAME :</label><input type="text" name="nm"><br>
        <label>NUMBER :</label><input type="tel" name="tel"><br>
        <label>EMAIL :</label><input type="email" name="email"><br>
        <label>CIN :</label><input type="number" name="cin"><br>
        <label>BIRTH DATE :</label><input type="date" name="date"><br>
        <label>PIC :</label><input type="file" name="img"><br>
        <input type="submit" name="creat" value="creat">
    </form>
</body>
</html>
