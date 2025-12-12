<?php

$buyer_user = "buyer01";
$buyer_pass = "12345";


$username = $_POST['username'] ?? "";
$password = $_POST['password'] ?? "";


if ($username === $buyer_user && $password === $buyer_pass) {
    
    header("Location: buyer-gallery.html");
    exit();
} else {
    echo "<h2 style='color:red; text-align:center; margin-top:50px;'>Invalid username or password!</h2>";
    echo "<p style='text-align:center;'><a href='buyer-login.html'>Try Again</a></p>";
}
?>
