<?php
//  Crea caso se espera que capture el ID del récord generado en la tabla visita para pasar e valor diatónicamente  al insert referente a el caso
$visita = crea_visita();

// var_dump($visita);

if ($visita['exito']) {
// array(4) { ["exito"]=> bool(true) ["id_visita"]=> string(1) "1" ["id_cliente"]=> string(2) "72" ["id_tipo_caso"]=> string(1) "2" }

   inserta_caso($visita["id_cliente"], $visita["id_visita"], $visita["id_tipo_caso"], $_POST['descripcion_caso']);
} else {
   echo "error";
}

function inserta_caso(
   $id_cliente,
   $id_visita,
   $id_tipo_caso,
   $descripcion_caso) {
   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "INSERT INTO Casos
         (id_cliente, id_visita, id_tipo_caso, descripcion_caso)
            VALUES
             (:id_cliente, :id_visita, :id_tipo_caso, :descripcion_caso)");
      // use exec() because no results are returned
      $stmt->bindParam(':id_cliente', $id_cliente);
      $stmt->bindParam(':id_visita', $id_visita);
      $stmt->bindParam(':id_tipo_caso', $id_tipo_caso);
      $stmt->bindParam(':descripcion_caso', $descripcion_caso);

      if ($stmt->execute()) {

         $id_caso = $conn->lastInsertId();
         include "comp/inserta_ficheros.php";

      }
      // // insert a row
      // $id_cliente    = $_POST['id_cliente'];
      // $razon_visita  = $_POST['razon_visita'];
      // $estado_visita = $_POST['estado_visita'];
      // $facha_visita  = $_POST['facha_visita'];
      // $facha_visita  = $_POST['facha_visita'];

   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}

function crea_visita()
{

   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "INSERT INTO Visita
         (id_cliente, razon_visita, estado_visita, facha_visita)
            VALUES
            (:id_cliente, :razon_visita, :estado_visita, :facha_visita)");
      // use exec() because no results are returned
      $stmt->bindParam(':id_cliente', $id_cliente);
      $stmt->bindParam(':razon_visita', $razon_visita);
      $stmt->bindParam(':estado_visita', $estado_visita);
      $stmt->bindParam(':facha_visita', $facha_visita);

      // insert a row
      $id_cliente    = $_POST['id_cliente'];
      $razon_visita  = $_POST['razon_visita'];
      $estado_visita = $_POST['estado_visita'];
      $facha_visita  = $_POST['facha_visita'];
      $id_tipo_caso  = $_POST['id_tipo_caso'];

      if ($stmt->execute()) {
         $last_id = $conn->lastInsertId();

         $resultado = array(
            "exito"        => true,
            "id_visita"    => $last_id,
            "id_cliente"   => $id_cliente,
            "id_tipo_caso" => $id_tipo_caso,
         );
         return $resultado;

      } else {

         $resultado = array("exito" => false);
         return $resultado;
      }

   } catch (PDOException $e) {
      // echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}
