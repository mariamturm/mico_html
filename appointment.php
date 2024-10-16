<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $inputPatientName = htmlspecialchars($_POST['inputPatientName']);
    $inputDoctorName = htmlspecialchars($_POST['inputDoctorName']);
    $inputDepartmentName = htmlspecialchars($_POST['inputDepartmentName']);
    $inputPhone = htmlspecialchars($_POST['inputPhone']);
    $inputSymptoms = htmlspecialchars($_POST['inputSymptoms']);
    $inputDate = htmlspecialchars($_POST['inputDate']);


    // Place to put appointments
    $file = "appointments.txt";

    // What each line of the appointment should say:
    $dataPatient = "Patient: $inputPatientName" . PHP_EOL;
    $dataDoctor = "Doctor: $inputDoctorName" . PHP_EOL;
    $dataDepartment = "Department: $inputDepartmentName" . PHP_EOL;
    $dataPhone = "Phone: $inputPhone" . PHP_EOL;
    $dataSymptoms = "Symptoms: $inputSymptoms" . PHP_EOL;
    $dataDate = "Date: $inputDate\n" . PHP_EOL;

    // add each line to appointment.txt 
    file_put_contents($file, $dataPatient, FILE_APPEND);
    file_put_contents($file, $dataDoctor, FILE_APPEND);
    file_put_contents($file, $dataDepartment, FILE_APPEND);
    file_put_contents($file, $dataPhone, FILE_APPEND);
    file_put_contents($file, $dataSymptoms, FILE_APPEND);
    file_put_contents($file, $dataDate, FILE_APPEND);


    // Return HTML for the popup
    echo "
    <div class=\"book_section\">
        <div class=\"appointment-size\">
            <h4> <span> APPOINTMENT </span> BOOKED!</h4>
            <table>
                <tr>
                    <td><strong>Patient Name:</strong></td>
                    <td>$inputPatientName</td>
                </tr>
                <tr>
                    <td> <strong>Doctor's Name:</strong></td>
                    <td>$inputDoctorName</td>
                 </tr>
                <tr>
                    <td><strong>Department:</strong> </td>
                    <td>$inputDepartmentName</td>
                </tr>
                <tr>
                    <td><strong>Phone Number:</strong> </td>
                    <td>$inputPhone</td>
                </tr>
                <tr>
                    <td><strong>Symptoms:</strong></td>
                    <td>$inputSymptoms</td>
                 </tr>
                <tr>
                    <td><strong>Date:</strong> </td>
                    <td>$inputDate </td>
                </tr>
            </table>
        </div>
    </div>







    ";
} else {
    echo "Form submission error!";
}

/*
    // Backup copy
    echo "
        Appointment booked! <br><br>
        <strong>Patient Name:</strong> $inputPatientName <br>
        <strong>Doctor's Name:</strong> $inputDoctorName <br>
        <strong>Department:</strong> $inputDepartmentName <br>
        <strong>Phone Number:</strong> $inputPhone <br>
        <strong>inputSymptoms:</strong> $inputSymptoms <br>
        <strong>Date:</strong> $inputDate <br>
        ";
*/

?>


