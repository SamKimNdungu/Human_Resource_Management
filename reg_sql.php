<?php
include 'connection.php';
if(isset($_REQUEST['email']) || isset($_REQUEST['usr']) || isset($_REQUEST['pass']) || isset($_REQUEST['pass_confirm'])) {
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
$username = mysqli_real_escape_string($connect, $_REQUEST['usr']);
$password = mysqli_real_escape_string($connect, $_REQUEST['pass']);
$password_confirm = mysqli_real_escape_string($connect, $_REQUEST['pass_confirm']);
if (isset($email) && !empty($password)) {
    if (isset($password) == $password_confirm) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $error = "User already exists";
            echo $error;
        } else {
            $query = "INSERT INTO users (username, email, password)VALUES('$username', '$email', '$password')";
            mysqli_query($connect, $query);
            echo '<script language="javascript">';
            echo 'alert("Account Created Successfully")';
            echo '</script>';
            echo '<script type = "text/javascript">
        window.location = "main_menu.php";
       </script>';
        }
    } else {
        echo 'Passwords not same';
    }
} else {
    echo "Please fill all the required fields";
}
}
?>