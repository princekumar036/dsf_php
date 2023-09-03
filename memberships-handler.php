<?php

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('location: index.php');
        exit;
    }

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $university = isset($_POST['university']) ? htmlspecialchars($_POST['university']) :'';
    $school = isset($_POST['school']) ? htmlspecialchars($_POST['school']) :'';
    $centre = isset($_POST['centre']) ? htmlspecialchars($_POST['centre']) :'';
    $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) :'';
    $residence = isset($_POST['residence']) ? htmlspecialchars($_POST['residence']) :'';
    $university = isset($_POST['university']) ? htmlspecialchars($_POST['university']) :'';

    require_once "_db_conn.php";

    $sql = "INSERT INTO memberships 
                (name, email, mobile, university, school, centre, course, residence) VALUES
                ('$name', '$email', '$mobile', '$university', '$school', '$centre', '$course', '$residence')";
    
    if (mysqli_query($conn, $sql)) {

        // Send an email to notify
        $toEmail = 'info@dsfofficial.org';
        $subject = '[DSF Website] New Membership';
        $body = "
            <h3>New Membership Form submission on <a href='https://www.dsfofficial.org'>DSF Website</a></h3>
            Here are the details:<br><br>
            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br>
            <b>Mobile:</b> $mobile <br>
            <b>University:</b> $university <br>
            <b>School:</b> $school <br>
            <b>Centre:</b> $centre <br>
            <b>Course:</b> $course <br>
            <b>City of Residence:</b> $residence <br>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        // Header for sender info 
        $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
        mail($toEmail, $subject, $body, $headers);

        header('location: memberships-success.php');
        exit;
    }
    else {
        header('location: memberships.php?msg=Something went wrong. Please try again.');
        exit;
    }