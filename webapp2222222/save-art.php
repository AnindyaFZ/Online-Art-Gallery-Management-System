<?php
$conn = new mysqli("localhost", "root", "", "artisan_gallery");

if ($conn->connect_error) { die("Connection failed"); }

$title = $_POST['title'];
$artist = $_POST['artist'];
$price = $_POST['price'];

$sql = "INSERT INTO artworks (title, artist, price)
        VALUES ('$title', '$artist', $price)";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Artwork added successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

echo "<br><br><a href='admin-dashboard.html'>← Back to Dashboard</a>";

$conn->close();
?>
