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
                echo "<title>Reservation Completed</title>";
            }
        else
            {
                echo "<title>Reservation Error</title>";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="receipt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Poppins:ital,wght@0,400;1,500&family=Roboto:wght@300;400&family=Source+Code+Pro:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="go-home"><a id="#circle" href="index.html">←</a></div>
            <table>
                <tr>
                    <td class="np"><img class="logo" src="img/2.png" alt="Nails Haven"></td>
                    <td colspan="2" class="np"><p>MVP3 Bldg. MC Arthur Hiway, Abangan Sur, Marilao, Bulacan (infront of TOYOTA MARILAO)</p></td>
                </tr>
                <tr>
                    <td colspan="3">Hi, <?php echo $fname." ".$lname; ?></td>
                </tr>
                <tr>
                    <td class="wid" colspan="2">Appointment Time:</td>
                    <td><?php echo $app_time ?></td>
                </tr>
                <tr>
                    <td class="wid" colspan="2">Appointment Date:</td>
                    <td><?php echo $app_date ?></td>
                </tr>
                <tr>
                    <td class="wid" colspan="2">Reference Number:</td>
                    <td><?php echo $ref ?></td>
                </tr>
                <tr>
                    <td colspan="3">Please be on time!</td>
                </tr>

                <tr class="footer">
                    <td class="np f h"><ion-icon name="call-outline"></ion-icon></td>
                    <td class="np f"><p>096-8842-283</p></td>
                    <td class="np f"><p></p></td>
                </tr>
                <tr class="footer">
                    <td class="np f h"><ion-icon name="logo-facebook"></ion-icon></td>
                    <td class="np f"><p>www.facebook.com</p></td>
                    <td class="np f"><p></p></td>
                </tr>
                <tr class="footer">
                    <td class="np f h"><ion-icon name="logo-instagram"></ion-icon></td>
                    <td class="np f"><p>www.instagram.com</p></td>
                    <td class="np f"><p></p></td>
                </tr>
            </table>
        <button onclick="window.print()">Print Receipt</button>

    <script src="hover.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
