<?php require "./includes/header.php";

$message_response = $_POST['response'];
$ticket_id = $_POST['tid'];
//$adminid = admin key frop session get


 $thequery = "INSERT INTO t_ticket_admin_message (tm_t_id,tm_a_id,tm_message_text)
 VALUES ('$ticket_id','0','$message_response');"; // admin id must use here but i wrote that to deafult 0
 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Message Submited","","","Result response ticket Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","$te","","","response ticket Lc Melody","current");
 }

require "./includes/footer.php";?>