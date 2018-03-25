<?php
if($_POST["message"]) {
    mail("Omar_q8@msn.com", "Form to email message", $_POST["message"], "From: OBPhotography@booking.com");
}
?>