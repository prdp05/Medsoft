<?php //require "../controller/isLogin.php"?>
<?php require "../controller/user-data.php" ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting</title>
    <link rel="stylesheet" href="../public/css/setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
<div class="container">
    <div class="edit-profile">
        <h1>Edit Profile</h1>

        <img src="../public/images/<?php echo $row['PROFILEPICTURE']?>">

        <span class="name"><?php echo $row['FULLNAME'] ?></span>

        <form action="">
        <span>Username: pradeep</span><br>
        <label>Phone No: 9848744205</label><br>
        <label>Email: pradeepbanjara92@gmail.com</label><br>
        <label>Gender: Male</label><br>
            <div class="action">
            <li><a href=""><button type="submit" id="edit-user">Edit User</button></a></li>
            <button type="submit" id="delete-user">Delete User</button>
            </div>
        </form>

    </div>

    <div class="add-user">
        <li><a href="Register.php"><i class="fa-solid fa-user-plus"></i></a></li>
        <h3>Create new account</h3>
    </div>
</div>
</body>
</html>
