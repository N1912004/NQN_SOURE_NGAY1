<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
    <p>This is a simple PHP page.</p>
    <pre>
    <?php
        echo "Today's date is: " . date("Y-m-d")."<br>";
        $aray = [
            [
                "full_name" => "John Dang",
                "age" => 18,
                "email" => "John321@gmail.com"
            ],
             [
                "full_name" => "Tri Nguyen",
                "age" => 38,
                "email" => "Tri321@gmail.com"
            ],
            [
                "full_name" => "Nghi Nguyen Quoc",
                "age" => 18,
                "email" => "Nghi321@gmail.com"
            ]
    ];
       echo $aray[0]["age"];
       //chuyển array sang json để mang sang ngôn ngữ khác...
    var_dump(json_encode($aray));
    ?>
    </pre>
    <p>Enjoy your stay!</p>
</body>
</html>
