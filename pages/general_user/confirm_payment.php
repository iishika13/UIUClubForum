<?php
    include '../sqlCommands/connectDb.php';
    if(!isset($_SESSION)) 
        { 
            session_start(); 
        }

    $email = $_SESSION['email'];
    
    $sql2 = "SELECT * FROM {$_SESSION['type']} WHERE email = '$email';";
    $result1 = mysqli_query($sql, $sql2);
    $num1 = mysqli_num_rows($result1);


while ($row = $result1->fetch_assoc()) {
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $phone = $row["phone_number"];
   
  }


    $room_id = $_POST['room_id'];
    // $forum_name = $_POST['forum_name'];

    $amount = $_POST['taka'];
   
    $p_number = $_POST['number'];

    
    if ($amount == 500)
    {
        $sql4 = "INSERT INTO `club_payment`(`first_name`, `last_name`, `email`, `phone_number`, `payment_number`, `amount`, `forum_name`) VALUES ('$first_name','$last_name','$email','$phone','$p_number','$amount','$f_name')";
        $result3 = mysqli_query($sql, $sql4);
        
        
        ?>
        <script>
        window.location.replace("club_forum.php");
        alert("<?php echo "Successfully Done !"?>");
       </script>

        <?php
    }
    else
    {
       ?>
        <script>
        window.location.replace("payment.php");
        alert("<?php echo "Please enter a valid amount. Please try again later"?>");
       </script>

        <?php
        // header('Location:shuttle_booking.php');

    }
    
?>