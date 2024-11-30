<?php


include("common.php");

if (isset($_POST["signupbtn"])) {
    $admin_email = mysqli_real_escape_string($connection, $_POST["email"]);
    $emailchecksql = "SELECT * FROM admins WHERE admin_email = '{$admin_email}'";
    $row = mysqli_query($connection, $emailchecksql);

    if (mysqli_num_rows($row) > 0) {
        header("Location: http://localhost/PakFixer/admin/signup.php?emaildupe=yes");
    } else {
        $admin_username = mysqli_real_escape_string($connection, $_POST["user"]);
        $admin_password = md5($_POST["password"]);

        $sql = "INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`, `admin_date`) VALUES (NULL, '{$admin_username}', '{$admin_email}', '{$admin_password}', '0', current_timestamp());";
        if (mysqli_query($connection, $sql)) {
            header("Location: http://localhost/pakfixer/admin/signup.php?error=yes");
        } else {
            header("Location: http://localhost/pakfixer/admin/signup.php?error=no");
        }
    }
} else if (isset($_POST["loginbtn"])) {

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admins WHERE admin_email = '{$email}' AND admin_password='{$password}'";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        header("Location: http://localhost/PakFixer/admin/dashboard.php");

        while ($data = mysqli_fetch_assoc($row)) {
          
            session_start();
            $_SESSION["id"] = $data["admin_id"];
            $_SESSION["name"] = $data["admin_name"] ;
            $_SESSION["email"] = $data["admin_email"];
            $_SESSION["status"] = $data["admin_status"];
        }
    } else {
        header("Location: http://localhost/PakFixer/admin/index.php?alert=error");
    }
}
