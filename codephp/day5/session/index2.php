<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Cách tạo ra 1 session trong PHP</h1>

<?php
// tạo ra 1 session trong php
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";
$location = "hà nội";
$_SESSION["user_location"] = "hà nội";

// xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// in ra từng session trong $_SESSION

echo "<br> tên của người dùng : " . $_SESSION['user_name'];
echo "<br> email của người dùng : " . $_SESSION['user_email'];
echo "<br> địa điểm của người dùng : " . $_SESSION['user_location'];

//sửa session
$_SESSION['user_location'] = "hồ chí minh";
echo "<br> địa điểm của người dùng : " . $_SESSION['user_location'];

// huy session
unset($_SESSION['user_location']);
?>
<?php
// remove all session variables
session_unset();

// xóa session
session_destroy();
echo "<br> In ra session sau khi hủy toàn bộ";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

</body>
</html>

