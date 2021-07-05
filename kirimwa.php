<?php 
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $pilih = $_GET['pilih'];
    $message = $_GET['message'];
    $nowa = $_GET['nowa'];
    header("location:https://api.whatsapp.com/send?phone=$nowa&text=berhasil");
}
?>