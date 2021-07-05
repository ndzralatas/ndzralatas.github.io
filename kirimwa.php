<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pilih = $_POST['pilih'];
    $message = $_POST['message'];
    $nowa = $_POST['nowa'];
    header("location:https://api.whatsapp.com/send?phone=$nowa&text=berhasil");
}
?>