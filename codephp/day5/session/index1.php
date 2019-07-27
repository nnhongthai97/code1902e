<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Session trong PHP</h1>
<pre>
    https://viblo.asia/p/session-cookie-va-cache-ban-da-thuc-su-hieu-chung-3P0lPv3PKox
    Ví dụ :
    Một session hay còn gọi là một phiên làm việc.
    Trong khoa học máy tính, Nó đơn giản là cách giao tiếp giữa client
    (ở đây là trình duyệt web hoặc ứng dụng trên thiết bị của bạn) với server.
    Một session bắt đầu khi client gửi request đến sever, nó tồn tại xuyên suốt từ trang này đến trang khác
    trong ứng dụng và chỉ kết thúc khi hết thời gian timeout hoặc khi bạn đóng ứng dụng.
    Giá trị của session sẽ được lưu trong một tệp tin trên máy chủ.
    Chính vì điều này, nếu bạn dùng session một cách vô tội vạ
    thì sẽ khiến cho máy chủ phải lưu rất nhiều.
    Đặc biệt nếu ứng dụng đó có đến vài triệu người dùng chẳng hạn thì ... điều đó thật là kinh khủng.
    Thông thường chúng ta chỉ nên lưu trữ những thông tin tạm thời trong session VD như:
    thông tin đăng nhập, thông tin các sản phẩm trong giỏ hàng (đối với các trang web thương mại điện tử)...

    Để bắt đầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
    hàm này sẽ khởi đầu session trong php
    Biến session được đặt trong 1 biến global của php là $_SESSION
</pre>
</body>
</html>