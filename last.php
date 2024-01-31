<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="middle_name">Middle Name:</label>
    <input type="text" id="middle_name" name="middle_name"><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="age">Age (Date of Birth/Age):</label>
    <input type="text" id="age" name="age" placeholder="" required><br>

    <label for="course_year">Course and Year:</label>
    <input type="text" id="course_year" name="course_year" required><br>

    <label for="enrolled">Enrolled:</label>
    <input type="radio" id="enrolled_yes" name="enrolled" value="Yes" required>
    <label for="enrolled_yes">Yes</label>
    <input type="radio" id="enrolled_no" name="enrolled" value="No" required>
    <label for="enrolled_no">No</label><br>

    <label for="subject_grade">Subject and Grade:</label>
    <input type="text" id="subject_grade" name="subject_grade" placeholder="" required><br>

    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $first_name = $_GET['first_name'];
    $middle_name = $_GET['middle_name'];
    $last_name = $_GET['last_name'];
    $age = $_GET['age'];
    $course_year = $_GET['course_year'];
    $enrolled = $_GET['enrolled'];
    $subject_grade = $_GET['subject_grade'];

    
    echo "<h2>Student Information:</h2>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Middle Name:</strong> $middle_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Course and Year:</strong> $course_year</p>";
    echo "<p><strong>Enrolled:</strong> $enrolled</p>";
    echo "<p><strong>Subject and Grade:</strong> $subject_grade</p>";
}
?>



</body>
</html>
