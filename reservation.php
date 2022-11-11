<?php
    include_once 'database.php';
    if(isset($_POST['save']))
    {
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $val_id = $_POST['valid-id'];
        $app_date = $_POST['appointment-date'];
        $app_time = $_POST['appointment-time'];
        $receipt = $_POST['receipt'];
        $ref = $_POST['ref_num'];

        //query
        $sql = "INSERT INTO `reservation`(`f_name`, `l_name`, `email`, `contact_no`, `address`, `valid_ID`, `app_date`, `app_time`, `receipt`, `ref_num`) 
        VALUES ('$fname','$lname','$email','$contact','$address','$val_id','$app_date','$app_time','$receipt','$ref')";

        //inserting
        $inserting = mysqli_query($conn, $sql);

        if($inserting)
            {
                echo "success!";
                mysqli_close($conn);
            }
    }
?>