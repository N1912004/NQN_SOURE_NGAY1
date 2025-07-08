<?php
require 'components/header.php';
 echo "<h1>list of feedbacks here</h1>";
 $sql = "SELECT name, email, body from feedback;";
 if($connection!=null)
 {
  try {
       //nếu không dùng repare() khi người dùng nhập vào OR 1=1 câu thực thi ỏ điều kiện sẽ trở thàh luôn đúng
       //(RẤT NGUY HIỂM)
        $statement = $connection->prepare($sql); 
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        echo '<ul class="list-group">';
        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';
            echo "<li class='list-group-item'>";
            echo "<p>$name</p>";
            echo "<p>$email</p>";
            echo "<p>$body</p>";
            //echo "<h3>$name, $email, $body</h3>";
        }

    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage(); // Thêm thông báo lỗi nếu có
    }
 }

include 'components/footer.php';
?>