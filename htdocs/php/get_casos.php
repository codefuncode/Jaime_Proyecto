<?php
get_casos();
function get_casos()
{

   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM Caso");

      if ($stmt->execute()) {
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         echo "<select class='w3-select'name='id_de_caso'>";
         echo '<option value="" disabled selected>Choose your option</option>';

         for ($i = 0; $i < count($data); $i++) {

            $id_de_caso = $data[$i]["id_caso "];
            echo "<option  value='$id_de_caso'>";
            echo $data[$i]['id_caso '];
            echo "</option>";

         }
         echo "<select/>";
      }
      // echo count($data);

   } catch (PDOException $e) {
      echo "<select class='w3-select'name='id_de_caso'>";
      echo '<option value="" disabled selected>Choose your option</option>';

      echo "<select/>";
   }
   $conn = null;

}
