<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
    <p>Conditionals</p>
    <h2>Nhập tuổi của bạn:</h2>

    //FORM nhập tuổi và kiểm tra điều kiện
    <form method="post">
        <input type="number" name = "age" required>
        <input type ="submit" value="Kiểm tra">
    </form>
    <pre>
    <?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $age = $_POST["age"];
       if($age < 18) {
           echo "Bạn chưa đủ tuổi để vào quán bar.";
       } elseif($age >= 18 && $age < 21) {
           echo "Bạn có thể vào quán bar nhưng không được uống rượu.";
       } else {
           echo "Bạn có thể vào quán bar và uống rượu.";
       }}
       //Comment để kiểm tra điều kiện
       $comments = [
           "GOOD",
           "PHP, I like it",
           "How are you"
       ]; 
       if(empty($comments)) {
           echo "Không có bình luận nào.";
       } else {
           foreach($comments as $comment) {
               echo "<br> - " . htmlspecialchars($comment);
           }
       }
       $first_commet = empty($comments) ? "Không có bình luận nào." : $comments[0];
       echo $first_commet
       ?>
       </pre>
</body>   
       
</html>