<!DOCTYPE html> 
<html>
<head>
    <title>Superglobals in PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Superglobals in PHP</h1>
    <p>This page demonstrates the use of superglobals in PHP.</p>       


<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Bật hiển thị lỗi nếu có
 echo "supper globals.php<br>";
// Superglobals là các biến toàn cục trong PHP, có thể truy cập từ bất kỳ đâu trong mã nguồn.
// Chúng bao gồm: $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION.
// Dưới đây là một ví dụ về cách sử dụng một số superglobals trong PHP:
    //var_dump($_SERVER);
    //print_r($_GET);
    //print_r($_POST);
    /*
    if(isset($_GET['name']) && isset($_GET['age'])) {
        // Kiểm tra xem các tham số 'name' và 'age' có tồn tại trong URL hay không
        echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
        echo "Age: " . htmlspecialchars($_GET['age']) . "<br>";
    } else {
        echo "Không có dữ liệu để hiển thị.";
    }
    */

?>
</pre>
  <h2>Nhập thông tin:</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Xử lý dữ liệu sau khi submit
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $password = htmlspecialchars(trim($_POST["password"]));

        echo "<h2>Submitted Data:</h2>";
        echo "Name: $name<br>";
        echo "Password: $password<br>";
    }
    ?>
</body>
</html>
<!--
