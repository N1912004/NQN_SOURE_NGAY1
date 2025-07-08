<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
    <p>This is a simple PHP page.</p>   
   <!-- Vòng lặp for trong PHP
    <pre> -->
    <pre><?php
    //Dùng pre giữ nguyên định dạng của code 
    /*$index =0;
    for($i=0; $i<5; $i++){
        $index++;
        echo"Vòng lặp thứ: ".$index."<br>";
    }
    */
    //Vòng lặp while trong PHP
    /*
    $index = 0;
    while($index < 5) {
        $index++;
        echo "Vòng lặp thứ: ".$index."<br>";
    }
        */
    //Vòng lặp foreach trong PHP
    $comments = [
        "GOOD",
        "PHP, I like it",
        "How are you"
    ];
    //Dùng vòng lặp foreach để lặp qua mảng
    //Dùng htmlspecialchars để bảo mật dữ liệu đầu vào
    foreach($comments as $comment) {
        echo "<br> - " . htmlspecialchars($comment);
    }
    $persons = [
            "full_name" => "John Dang",
            "age" => 18,
            "email" => "John312@gmail.com"
    ];
    echo "<br>";
    foreach($persons as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
     </pre>

</body>
</html>
