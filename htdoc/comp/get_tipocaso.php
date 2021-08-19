<?php
get_tipocaso();
function get_tipocaso()
{
   include '../conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM TipoCaso");
      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // echo count($data);

      echo "<select class='w3-select' name='id_tipo_caso'>";
      echo '<option value="" disabled selected>Choose your option</option>';

      for ($i = 0; $i < count($data); $i++) {

         $id_de_caso = $data[$i]["id_tipo_caso"];
         echo "<option  value='$id_de_caso'>";
         echo $data[$i]['tipo_caso'];
         echo "</option>";

      }
      echo "<select/>";

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
