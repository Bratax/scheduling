<?php
// edit.php

// your database connection
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "insertion";

// select database
$conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error());

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "SELECT * FROM addtable WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $room = mysqli_real_escape_string($conn, $_POST['room']);
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn, $_POST['end_time']);

    $query = "UPDATE addtable SET faculty='$faculty', course='$course', subject='$subject', room='$room', start_time='$start_time', end_time='$end_time' WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error());

    if ($result) {
        echo '<script type="text/javascript">
                  alert("Schedule Successfully Updated");
                  location="tablelist.php";
               </script>';
    } else {
        echo "Could not update schedule: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- HTML form for editing the schedule -->
<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }

    form input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    form input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Faculty:</label>
    <input type="text" name="faculty" value="<?php echo $row['faculty']; ?>" required><br>
    <label>Course:</label>
    <input type="text" name="course" value="<?php echo $row['course']; ?>" required><br>
    <label>Subject:</label>
    <input type="text" name="subject" value="<?php echo $row['subject']; ?>" required><br>
    <label>Room:</label>
    <input type="text" name="room" value="<?php echo $row['room']; ?>" required><br>
    <label>Start time:</label>
    <input type="text" name="start_time" value="<?php echo $row['start_time']; ?>" required><br>
    <label>End time:</label>
    <input type="text" name="end_time" value="<?php echo $row['end_time']; ?>" required><br>
    <input type="submit" name="update" value="Update">
</form>
