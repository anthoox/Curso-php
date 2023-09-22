<?php
if(isset($_COOKIE['unyear'])){
    unset($_COOKIE['unyear']);
    setcookie('unyear', '', time()-100); // Si se resta lo que sea, se borra la cookie. Sin esto no se borra.
}
header('Location:ver_cookies.php');
?>