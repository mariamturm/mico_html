<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $inputPatientName = htmlspecialchars($_POST['inputPatientName']);
    $inputDoctorName = htmlspecialchars($_POST['inputDoctorName']);
    $inputDepartmentName = htmlspecialchars($_POST['inputDepartmentName']);
    $inputPhone = htmlspecialchars($_POST['inputPhone']);
    $inputSymptoms = htmlspecialchars($_POST['inputSymptoms']);
    $inputDate = htmlspecialchars($_POST['inputDate']);

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


