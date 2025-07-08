<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'components/header.php';

$name = $email = $body = '';
$name_error = $email_error = $body_error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $name_error = "Name is required";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $email_error = "Email is required";
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    if (empty($_POST['body'])) {
        $body_error = "Body is required";
    } else {
        $body = htmlspecialchars($_POST['body']);
    }
    $validate_sucess = empty($name_error)
                        &&empty($email_error)
                        &&empty($body_error);
    if($validate_sucess){
        $sql = "INSERT INTO feedback(name, email, body) VALUE(?,?,?)";
        try{
            $statemet =$connection->prepare($sql);
            $statemet ->bindParam(1, $name);
            $statemet ->bindParam(2, $email);
            $statemet ->bindParam(3, $body);
            $statemet ->execute();
            echo "feedback inserted susscessfully";

    }catch(PDOException $e){
        echo "Cannot insert feeback into database".$e->getMessage();
    }
}

}
?>

<h1>Feedback Project</h1>
<p>This project demonstrates how to connect PHP with MySQL database and execute SQL commands.</p>
<h1>Enter your feedback here</h1>

<!-- ✅ Sửa action và thêm method POST -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3">
        <input type="text"  class ="form-control  <?php echo $name_error ? 'is-invalid' : ''; ?>" 
               name="name" 
               placeholder="What is your name?"
               value="<?php echo $name; ?>">
        <small style="color:red;"><?php echo $name_error; ?></small>
    </div>

    <div class="mb-3">
        <input type="email" 
               class="form-control
               <?php echo $name_error ? 'is-invalid' : ''; ?>" 
               name="email"
               placeholder="Enter your email"
               value="<?php echo $email; ?>">
        <small style="color:red;"><?php echo $email_error; ?></small>
    </div>

    <div class="mb-3">
        <textarea class="form-control
                  <?php echo $name_error ? 'is-invalid' : ''; ?>" 
                  name="body" 
                  placeholder="Enter your feedback"
                  rows="2"><?php echo $body; ?></textarea>
        <small style="color:red;"><?php echo $body_error; ?></small>
    </div>

    <div class="mb-3">
        <input type="submit" 
               class="btn btn-primary" 
               name="submit" 
               value="Send">
    </div>
</form>

<?php include 'components/footer.php'; ?>