<!DOCTYPE html> 
<html>
<head>          
    <title>Cookies Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Cookies Example</h1>
    <p>This page demonstrates how to set and retrieve cookies in PHP.</p>   
    <pre>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    // Bật hiển thị lỗi nếu có
    setcookie("name", "Nghi", time() + 24*3600); // Cookie sẽ hết hạn sau 1 ngày
    if(isset($_COOKIE["name"])) {
        echo "Cookie 'name' is set to: " . htmlspecialchars($_COOKIE["name"]) . "<br>";
    } else {
        echo "Cookie 'name' is not set.<br>";
    }

?>
</pre>
</body>
</html>
