<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { 
    // Retrieve form data
<<<<<<< HEAD
    $name = $_GET['name'] ?? ' ';
    $email = $_GET['email'] ?? ' ';
    $number = $_GET['number'] ?? ' ';
    $company = $_GET['company'] ?? ' ';
    $message = $_GET['message'] ?? ' ';
=======
$name = $_GET['name'] ?? ' ';
$email = $_GET['email'] ?? ' ';
$number = $_GET['number'] ?? ' ';
$company = $_GET['company'] ?? ' ';
$message = $_GET['message'] ?? ' ';

>>>>>>> eec5804a0983d16a37439c16cbe808ac64c8e687

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'testPHP');

    // Check connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO registration (name, email, number, company, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $number, $company, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Registration Successful!'); window.location.href='index.html';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Invalid request.";
}
?>

<?php
echo "Hello World!";
?>
