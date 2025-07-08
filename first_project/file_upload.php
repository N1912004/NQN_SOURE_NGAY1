<pre>
<?php
// kiểm tra lỗi và hiển thị chúng
error_reporting(E_ALL);
ini_set('display_errors', 1);
//print_r($_FILES);
if(isset($_POST['submit'])){
    // Cần nơi chứa cái file được upload
    $permitted_extensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf']; 
    $file_name = $_FILES['upload']['name'];
    if(!empty($file_name)){
        //print_r($_FILES);
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $generated_name = time().'-'.$file_name; // Tạo tên file duy nhất
        $destination_path = "uploads/${generated_name}"; // Đường dẫn đến thư mục uploads
        $file_extension = explode('.', $file_name); // Tách phần mở rộng của file
        $file_extension = strtolower(end($file_extension));
        echo "$file_name, $file_size, $file_tmp_name, $destination_path, $file_extension";
        if(in_array($file_extension, $permitted_extensions)){
            // Kiểm tra kích thước file
            if($file_size <= 1000000){ // 5MB
                //chú ý các file ảnh tải ảnh lên trùng tên sẽ bị ghi đè
                // Di chuyển file từ thư mục tạm thời đến thư mục uploads
                move_uploaded_file($file_tmp_name, $destination_path);
                    $message = '<p style="color:green"> 
                    File uploaded successfully</p> ';
                }else{
                    $message = '<p style="color:red"> 
                    Error moving the file</p> ';
                }
            }else{
                $message = '<p style="color:red"> 
                File size exceeds the limit of 1MB</p> ';
            }
    }else{
        $message = '<p style="color:red"> 
        No file selected, please try again</p> ';
    }
}
?>
</pre>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload in PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>File Upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"
            method="post" 
            enctype="multipart/form-data">
            <label for="file">Choose a file to upload:</label><br>
            <input type="file" name="upload">
            <input type="submit" value="submit" name="submit">
            <?php $message ?? '' ?>
</body>
</html>


