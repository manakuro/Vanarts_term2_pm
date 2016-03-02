<?php
include('../bootstrap.php');

if (!empty($_POST)) {

    session_start();

    $conn = connectDB();

    // Check to see if the user exists in table or not
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Default User
    // - username: root
    // - password: root
    $query = "
        select * from admin_users 
        where password = '$password'
        and username = '$username'
        and del_flg = 0
    ";

    $rows = mysqli_query($conn, $query);
    if (!$rows) {
        echo $conn->error;
        exit;
    }

    $rows = mysqli_num_rows($rows);
    if ($rows === 1) {

        $_SESSION['auth'] = true;
        $_SESSION['is_login_error'] = false;
        header('Location: ./gallery.php');

    } else {

        $_SESSION['auth'] = false;
        $_SESSION['is_login_error'] = true;
        header('Location: ./login.php');

    }


}