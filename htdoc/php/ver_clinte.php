<?php

function prueba()
{
   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM Cliente");

      if ($stmt->execute()) {
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

         for ($i = 0; $i < count($data); $i++) {

            $id_cliente = $data[$i]["id_cliente"];
            $nombre     = $data[$i]["nombre"];
            $apellidos  = $data[$i]["apellidos"];
            $pueblo     = $data[$i]["pueblo"];
            $telefono   = $data[$i]["telefono"];

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$apellidos</td>";
            echo "<td>$pueblo</td>";
            echo "<td>$telefono</td>";
            echo "<td>$nombre</td>";
            echo "<form action="" method="">";
            echo " <input type='hidden' name='id_cliente' value='$id_cliente'/>";
            echo "<td><input class='w3-button w3-black' type='submit' value='Editar'/></td>";
            echo "</form>";
            echo "<form action="" method="">";
            echo " <input type='hidden' name='id_cliente' value='$id_cliente'/>";
            echo "<td><input class='w3-button w3-black' type='submit' value='Ver detalles'/></td>";
            echo "</form>";
            echo "</tr>";
         }

      }
      // echo count($data);

   } catch (PDOException $e) {

   }
   $conn = null;
}
