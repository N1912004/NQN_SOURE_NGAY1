<!DOCTYPE html>
<html>
<head>
    <title>File Handling in PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>      
    <h1>File Handling in PHP</h1>
    <p>This page demonstrates how to read and write files in PHP.</p>
    <pre><?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    //OPEN AND READ A TEXT FILE
    //UPLOAD AN IMAGE USING FORM
    $filePath = 'fruits.txt'; // Path to the text file
    if (file_exists($filePath)) {
        echo readFile($filePath); // Read the file content
        $file_handle = fopen($filePath, 'r'); // Open the file for reading
        $file_content = fread($file_handle, filesize($filePath)); // Read the entire file
        fclose($file_handle); // Close the file handle
        echo "<br>File content:<br>" . htmlspecialchars($file_content); // Display the

    }else{
        //Trong trường hợp không tim thấy file thì tạo mới file mới. 
        echo "File does not exist. Creating a new file...<br>";
        $file_handle = fopen($filePath, 'w'); // Open the file for writing
        
        $file_content = 'banana' . PHP_EOL . 'apple' . PHP_EOL . 'orange'; // Content to write
      
        fwrite($file_handle, $file_content); // Write the content to the file
        fclose($file_handle); // Close the file handle
        echo "File created successfully.<br>";
    }
    ?>
    </pre>
    <p>Enjoy your stay!</p>
</body>
</html>
