<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");
    if(isset($_POST['signup'])){
        $username = $_POST['Name'];
        $email = $_POST['Email'];
        $add = $_POST['Address'];

        $insert_query="INSERT INTO id (Name,Email,Address) VALUES ('$username','$email','$add')";
        $data=mysqli_query($connection,$insert_query);
    }
    ?>






 <center>
    <form method="post" >
        Name<input type="text" placeholder="Enter Name" name="Name" ><br><br>
        Email<input type="text" placeholder="Enter Email" name="Email" ><br><br>
        Address<input type="text" placeholder="Enter Address" name="Address" ><br><br>
        <input type="submit" value="Submit" name="signup" >
    </form>
    </center>
</body>
</html>