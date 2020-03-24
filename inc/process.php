<?php 

    $first_error = $last_error = $mail_error = $gender_error = $dep_error = "";
    $first = $last = $mail = $gender = $dep = "";

    if (isset($_POST['submit'])) {

        if (empty($_POST['first'])) {
            $first_error = "Field required";
        }else{
            $first = $_POST['first'];
            if (!preg_match("/^[a-zA-Z]*$/", $first)) {
                $first_error = "Only letters needed";
            }
        }
        if (empty($_POST['last'])) {
            $last_error = "Field required";
        }else{
            $last = $_POST['last'];
            if (!preg_match("/^[a-zA-Z]*$/", $last)) {
                $last_error = "Only letters needed";
            }
        }
        if (empty($_POST['mail'])) {
            $mail_error = "Field required";
        }else{
            $mail = $_POST['mail'];
            if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
                $mail_error = "Invalid mail format";
            }
        }
        if (empty($_POST['gender'])) {
            $gender_error = "Field required";
            $gender = $_POST['gender'];
        }
        if ($_POST['dep'] == "none") {
            $dep_error = "Select a department";
            $dep = $_POST['dep'];
        }
    }
?>