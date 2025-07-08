<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo "Exception in PHP<br>";
    function divide($a, $b) {
        if ($b == 0) {
            // Throw an exception if division by zero is attempted
            throw new Exception("Division by zero is not allowed.");
        }
        return $a / $b;

    }
    try{
        echo divide(10, 2) . "<br>"; 
        echo divide(10, 0);
        echo "No error.";
    }catch(Exception $e){
        // Catch the exception and display the error message
        echo "Error: " . $e->getMessage();
    }
?>