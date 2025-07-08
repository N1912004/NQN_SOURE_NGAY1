<!DOCTYPE html>
<html>
<head>
    <title>OOP in php </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
">
</head>
<body>
    <h1>PHP oop</h1>
    <p>This page oop in PHP.</p>

    <pre><?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo "This lesson is about OOP in PHP.<br>";
    class User{
        protected $name;
        public $email;
        public $age;
        public $password;
        public function __construct($name, $email, $age, $password){
            echo "constructor is called when an object is created.<br>";

            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;
        }

        //method : a funtion that belongs to a class
        // function set_name($name){
        //     $this->name = $name;
        // }
        // function get_name(){
        //     return $this->name;
        // }
    }
    
    //init o object 
    //Mặc dù ta truy cập được vào các thuộc tính của user name khi để protected nhưng chúng ta không thẻ
    //truy cập trực tiếp vào các thuộc tính của class User từ bên ngoài class.
    $user1 = new User('Nghi', 'nguyen321@gmail.com', 18, '123');
    $user2 = new User('Hoang', 'H3421@gmail.com', 18, '4432');
    // $user1->name = "Nghi";
    // $user1->email = "nqs123@gmail.com";
    // $user1->age = 18;
    // $user1->password = "123456";
    //thay đổi bănng cac giá trị mminh truyền vào
    // $user1->set_name("Nghi");
    // $user2->set_name("Hoàng");
    // print_r($user1);
    // print_r($user2);
    // echo $user = $user1->get_name();
    // echo "<br>";
    // echo $user = $user2->get_name();
    // echo "<br>";
    //Kế thừa trong PHP: Employee kế thừa từ User lấy tất cả thuộc tính của User và thêm các thuộc tính riêng.
    class Employee extends User {
        public $gender;

        public function __construct($name, $email, $age, $password, $gender) {
            //gọi hàm khởi tạo của class cha
            parent::__construct($name, $email, $age, $password);
            $this->gender = $gender;
        }

        //Kế thừa từ các thuộc tính của class User
        public function get_age() {
            return $this->age; 
        }
    }
    $employee1 = new Employee('Nghi', 'nguyen321@gmail.com', 18, '123', 'Male');
    echo $employee1->get_age();
   ?>
    </pre>