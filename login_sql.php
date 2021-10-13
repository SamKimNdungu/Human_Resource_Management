<?php
include 'connection.php';
if(isset($_REQUEST['usr']) || isset($_REQUEST['pass'])) {
$username = mysqli_real_escape_string($connect, $_REQUEST['username']);
$password = mysqli_real_escape_string($connect, $_REQUEST['pass']);
if (isset($username) && !empty($password)) {
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo '<script type = "text/javascript">
        window.location = "menu_main.php";
       </script>';
    } else {
          echo '<script language="javascript">';
        echo 'alert("Your Login Name or Password is invalid")';
        echo '</script>';
    }
} else {
    echo "Please fill all the required fields";
}
}
?>