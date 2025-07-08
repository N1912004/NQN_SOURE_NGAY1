 <?php
    session_start(); // Bắt đầu phiên làm việc
    if(isset($_POST['submit'])){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($name== "admin" && $password == "123456")
        {
            $_SESSION['name'] = $name; // Lưu tên người dùng vào session
            header('Location: dashboard.php');
            exit(); // Dừng thực thi mã sau khi chuyển hướng
            
        }else{
            echo "<p style='color: red;'>Tên đăng nhập hoặc mật khẩu không đúng.</p>";
        }
    }
  
    ?>
<!DOCTYPE html> 
<html>
<head>
    <title>Sessions in PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Sessions in PHP</h1>   

</pre>
  <h2>Login </h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
       <table>
            <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password" required></td>
            </tr>
        </table>
        
        <input type="submit" value="Submit" name="submit">
    </form>

   
</body>
</html>
<!--
