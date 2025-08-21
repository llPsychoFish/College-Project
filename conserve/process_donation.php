<?php
  include '../dbh.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields exist
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['country'], $_POST['amount'], $_POST['method'])) {
        $fname = $conn->real_escape_string($_POST['first_name']);
        $lname = $conn->real_escape_string($_POST['last_name']);
        $email = $conn->real_escape_string($_POST['email']);
        $country = $conn->real_escape_string($_POST['country']);
        $amount = (float)$_POST['amount'];
        $method = $conn->real_escape_string($_POST['method']);

        $sql = "INSERT INTO donations (first_name, last_name, email, country, amount, method)
                VALUES ('$fname', '$lname', '$email','$country', $amount, '$method')";

        if ($conn->query($sql) === TRUE) {
            if ($method === 'card') {
                echo "<h2>Thank you, $fname $lname! 🐾</h2>";
                echo "<p>You donated \$$amount using Credit/Debit Card.</p>";
                echo "<p><strong>Note:</strong> This is a demo. Card details are not processed or stored for security reasons.</p>";
            } else {
                echo "<h2>Thank you, $fname $lname! 🐾</h2>";
                echo "<p>You donated \$$amount using $method.</p>";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<h2>Error: Missing form data</h2>";
        echo "<p>Please make sure all fields are filled out.</p>";
        echo "<p>Missing fields: ";
        $missing = [];
        if (!isset($_POST['first_name'])) $missing[] = "first_name";
        if (!isset($_POST['last_name'])) $missing[] = "last_name";
        if (!isset($_POST['email'])) $missing[] = "email";
        if (!isset($_POST['country'])) $missing[] = "country";
        if (!isset($_POST['amount'])) $missing[] = "amount";
        if (!isset($_POST['method'])) $missing[] = "method";
        echo implode(", ", $missing) . "</p>";
    }

    $conn->close();
}
?>
