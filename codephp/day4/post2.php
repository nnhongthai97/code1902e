<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/21/2019
 * Time: 2:40 AM
 */
// hàm isset() check xem giá trị hoặc biến có tồn tại không
if (isset($_POST) && isset($_POST["email"]) && isset($_POST["password"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo '<br>$email' . $email;
    echo '<br>$password' . $password;
}