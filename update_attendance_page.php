<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" required><br><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>
    <input type="submit" value="Search Attendance">
</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
// Establish database connection (replace these values with your actual database credentials)
$hostName = "HOSTNAME";
$dbUser = "DATABASE_USER";
$dbPassword = "DATABASE_PASSWORD";
$dbName = "DATABASE_NAME";
// Create connection
$conn = new mysqli($host, $dbUser, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve roll number and date from the POST request
    $rollNumber = $_POST['roll_number'];
    $date = $_POST['date'];

    // Check if the roll number exists in the daily_attendance table for the given date
    $sql = "SELECT * FROM daily_attendance WHERE roll_number = '$rollNumber' AND date = '$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Roll number found, display the attendance status
        $row = $result->fetch_assoc();
        $attendance = $row['attendance'];

        // Display the attendance status in a table format
        echo "<table border='1'>
                <tr>
                    <th>Roll Number</th>
                    <th>Date</th>
                    <th>Attendance</th>
                </tr>
                <tr>
                    <td>$rollNumber</td>
                    <td>$date</td>
                    <td>$attendance</td>
                </tr>
            </table>";

        // Provide a button to update attendance
        echo '<form method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
                <input type="hidden" name="roll_number" value="' . $rollNumber . '">
                <input type="hidden" name="date" value="' . $date . '">
                <input type="hidden" name="update" value="true">
                <input type="submit" value="Update Attendance">
            </form>';
    } else {
        echo "Roll number not found for the given date";
    }

}

// Check if update button is clicked
if (isset($_POST["update"]) && $_POST["update"] == "true") {
    // Retrieve roll number and date from the POST request
    $rollNumber = $_POST['roll_number'];
    $date = $_POST['date'];

    // Toggle the attendance (assuming 'A' for Absent and 'P' for Present)
    $sql = "SELECT attendance FROM daily_attendance WHERE roll_number = '$rollNumber' AND date = '$date'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $attendance = $row['attendance'];
        $newAttendance = ($attendance === 'A') ? 'P' : 'A';

        // Update the attendance in the database
        $updateSql = "UPDATE daily_attendance SET attendance = '$newAttendance' WHERE roll_number = '$rollNumber' AND date = '$date'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Attendance updated successfully";
        } else {
            echo "Error updating attendance: " . $conn->error;
        }
    } else {
        echo "Roll number not found for the given date";
    }
}

$conn->close();
?>


