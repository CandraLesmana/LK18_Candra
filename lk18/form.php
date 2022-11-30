<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="koneksi.php"></script>
</head>
<body>
<?php
    include "koneksi.php";

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO user (id, username, password) VALUE ('$id','$username','$password')";
        $result = mysqli_query($conn,$sql); 
    }

?>
<form method="POST">
    <div>
        <label>ID</label>
        <input type="text" name="id" value="<?php echo $id; ?>" required>
    </div>
    <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required>
    </div>
    <div>
        <button name="submit">Submit</button>
    </div>
</form>
</body>
</html>