 <?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "jaimedb";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare("SELECT * FROM Usuario");
   $stmt->execute();

   // set the resulting array to associative
   $result = $stmt->fetch(PDO::FETCH_ASSOC);

   var_dump($result);

} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}
$conn = null;

?>