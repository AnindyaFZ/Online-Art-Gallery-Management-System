<?php
$conn = new mysqli("localhost", "root", "", "artisan_gallery");

if ($conn->connect_error) { die("Connection error"); }

$result = $conn->query("SELECT username FROM buyers");

echo "<h2>Registered Buyers</h2>";
echo "<a href='admin-dashboard.html'>← Back</a><br><br>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "• " . $row['username'] . "<br>";
    }
} else {
    echo "No buyers found.";
}

$conn->close();
?>
