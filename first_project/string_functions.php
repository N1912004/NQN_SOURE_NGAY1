<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "STRING function in PHP<br>";
$full_name= "John Dang";
print_r($full_name);
echo "Lenght: ".strLen($full_name)."<br>";
echo strtolower($full_name)."<br>";
echo strtoupper($full_name)."<br>";
echo str_replace("Dang", "Nghi", $full_name)."<br>";

echo "<h1>Chao cac tinh yeu!</h1>";
echo htmlspecialchars("<h1>Chao cac tinh yeu!</h1>");
?>
</pre>