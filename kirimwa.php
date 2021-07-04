<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pilih = $_POST['pilih'];
    $message = $_POST['message'];
    $nowa = $_POST['nowa'];
    header("location:https://api.whatsapp.com/send?phone=$nowa&text=Hallo My Name is : %20$name%20%0DMy Email : %20$email%20%0DI Want To : %20$pilih%20%0DMy Message is : %20$message");
}
?>