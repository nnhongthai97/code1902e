<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
        Vòng lặp foreach chỉ dùng để lặp mảng
        cú pháp rút gọn
        foreach($mang as $value) {
            // code thực thi
            echo "br".$value;
        }
        cú pháp đầy đủ
        foreach($mang as $key => $value) {
            // code thực thi
            echo "br" . $key . " - " .$value;
        }
    </pre>
<?php
// Danh sách các năm
$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);

//Dùng foreach xuất ra các năm trong $nam
foreach ($nam as $key => $value){
    echo $value;
}
    /*Vòng lặp foreach tự động lặp qua các phần tử trong mảng,
    nó lặp cho khi nào tới phần tử cuối cùng thì thôi.
    Như ở ví dụ trên thì $nam là mảng ta truyền vào,
    $key và $value là 2 tham số mà ở mỗi vòng lặp nó tự động truyền giá trị vào đó và
    chúng ta chỉ việc sử dụng
    */
?>
</body>
</html>