<?php
include 'connection.php';
if(isset($_REQUEST['fname']) || isset($_REQUEST['sname']) || isset($_REQUEST['lname'])||isset($_REQUEST['country']) || isset($_REQUEST['diocese']) || isset($_REQUEST['year']) || isset($_REQUEST['parish'])) {
$fname = mysqli_real_escape_string ($connect, $_REQUEST['fname']);
$lname = mysqli_real_escape_string ($connect, $_REQUEST['sname']);
$sname = mysqli_real_escape_string ($connect, $_REQUEST['lname']);
$country = mysqli_real_escape_string($connect, $_REQUEST['country']);
$diocese = mysqli_real_escape_string($connect, $_REQUEST['diocese']);
$year = mysqli_real_escape_string($connect, $_REQUEST['year']);
$parish = mysqli_real_escape_string($connect, $_REQUEST['parish']);

if (isset($fname) && !empty($year)) {
    $query = "INSERT INTO data_entry (fname, lname, sname, country, diocese,doa, parish)VALUES('$fname', '$lname', '$sname', '$country', '$diocese', '$year' , '$parish')";
    mysqli_query($connect, $query);
    echo '<script language="javascript">';
    echo 'alert("New Entry Created Successfully")';
    echo'</script>';
}
}
?>