<?php //require "../php-config/Connection.php" ?>
<?php require "../controller/user-data.php" ?>
<?php //require "../controller/Register-Controller.php" ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="stylesheet" href="../public/css/Register.css">

</head>
<body>
<div id="registration-container">
    <div class="login-logo">
        <img src="../public/images/login-logo.png" width="80" alt="Logo">
    </div>
    <h2 style="color: #3468C0;">Register</h2>
    <form action="../controller/user-update.php" method="post" enctype="multipart/form-data">
        <label>
            <input type="text" name="fname" value="<?php $row['fname']; ?>" placeholder="First Name" required>
        </label>
        <label>
            <input type="text" name="lname" value="<?php $row['lname']; ?>" placeholder="Last Name" required>
        </label>
        <label>
            <input type="text" name="uname" value="<?php $row['uname']; ?>" placeholder="Username" required>
        </label>

        <!-- Password input with toggle button -->
        <div class="password-container">
            <label for="password"></label><input type="password" name="password" id="password" value="<?php $row['password']; ?>" placeholder="Password" required>
            <span class="password-toggle" onclick="togglePassword()">👁️</span>
        </div>

        <label>
            <input type="tel" name="phone" value="<?php $row['phone']; ?>" placeholder="Phone" required>
        </label>
        <label>
            <input type="email" name="email" value="<?php $row['email']; ?>" placeholder="Email" required>
        </label>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select gender</option>
            <option value="male"
                    <?php if($row['gender'] == 'male'){
                    echo "selected";
                }
                ?>
            >
                Male</option>
            <option value="female"
                <?php if($row['gender'] == 'female'){
                    echo "selected";
                }
                ?>
            >
                Female</option>
            <option value="other"
                <?php if($row['gender'] == 'other'){
                    echo "selected";
                }
                ?>
            >
                Other</option>
        </select>

        <label for="profile-picture">Profile Picture </label>
        <input type="file" id="prof-Img" name="prof-Img" placeholder="Select Profile Picture">
        <!--            <input type="submit" name="upload" Sid="upload" placeholder="upload">-->

        <button type="submit" >Register</button>
    </form>
</body>
</html>
