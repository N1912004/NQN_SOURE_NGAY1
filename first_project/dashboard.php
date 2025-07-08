<?php
    session_start();
    if (isset($_SESSION['name'])){
        echo "Welcome to Dashboard page<br>";
        echo "name: ".$_SESSION['name']."<br>";
        echo "<a href='sessions.php'>Login</a>";
        echo "<a href='logout.php'>Logout</a>"; // Hiển thị liên kết đăng xuất

    }else{
        echo "Welcome guest to Dashboard page";
        echo "<a href='sessions.php'>Login</a>";
    }   
 
?>