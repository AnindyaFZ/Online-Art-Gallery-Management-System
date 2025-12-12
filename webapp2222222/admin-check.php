<?php

$admin_user = "buyer01";
$admin_pass = "12345";

if ($_POST['username'] == $admin_user && $_POST['password'] == $admin_pass) {
    header("Location: admin-dashboard.html");
    exit();
} else {
    echo "<h2>Invalid admin credentials!</h2>";
    echo "<a href='admin-login.html'>Try again</a>";
}
?>
