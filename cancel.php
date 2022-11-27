<?php 
    include_once 'database.php';
    if(isset($_POST['cancel']))
        {
            $reason = $_POST['reason'];
            $ref = $_POST['ref_num'];

            $checkRef = "SELECT * FROM `reservation` WHERE ref_num = $ref";
            $result = $conn->query($checkRef);
            $cancel = $result->fetch_assoc();

            if($cancel){
                $f_name = $cancel['f_name'];
                $l_name = $cancel['l_name'];
                $email = $cancel['email'];
                $contact = $cancel['contact_no'];
                $address = $cancel['address'];
                $valid = $cancel['valid_ID'];
                $date = $cancel['app_date'];
                $time = $cancel['app_time'];
                $receipt = $cancel['receipt'];
                $id = $cancel['id'];

                $cancelled = "INSERT INTO `cancel_appointment`(`f_name`, `l_name`, `email`, `contact_no`, 
                `address`, `valid_ID`, `app_date`, `app_time`, `receipt`, `ref_num`, `id`, `reason`) VALUES 
                ('$f_name', '$l_name', '$email', '$contact', '$address', '$valid', '$date', '$time'
                ,'$receipt','$ref','$id','$reason')";

                $cancelledResult = mysqli_query($conn, $cancelled);

                if($cancelledResult)
                    {
                        echo 'successfully inserted in cancel_appointment table';
                        $del = "DELETE FROM `reservation` WHERE ref_num = $ref";
                        $deleteResult = mysqli_query($conn, $del);
                        if($deleteResult)
                            {
                                header("location: successful.html");    
                            }
                else
                    {
                        echo 'inserting error';
                    }
            }
            else {
                echo "<title>invalid reference number</title>";
            }
        }
    }
?>