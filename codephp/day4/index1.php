<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for($i = 1; $i < 10; $i++) {
if ($i == 5) {
// câu lệnh break sẽ tiến hành dừng vòng lặp
break;
}
echo '<br>' . $i;
}
?>
</body>
</html>