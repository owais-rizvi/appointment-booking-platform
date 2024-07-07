<?php
include ('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $mycondition = $_POST['mycondition'];
    $date = $_POST['date'];
    $doctor_choice = $_POST['doctor_choice'];

    $sql = "INSERT INTO `appointment-form` (name,email,phone_number,age,mycondition,date,doctor_choice) VALUES ('$name','$email','$phone_number','$age','$mycondition','$date','$doctor_choice')";
    if ($conn->query($sql)) {
        echo "Appointment confirmed";
    } else {
        echo "Error: $conn->error";
    }
}
$conn->close();
?>
