<?php
//  Crea caso se espera que capture el ID del récord generado en la tabla visita para pasar e valor diatónicamente  al insert referente a el caso
$id_visita = crea_visita();

if ($id_visita['exito']) {

} else {
   echo "error";
}

function inserta_caso(
   $id_cliente,
   $id_visita,
   $id_tipo_caso,
   $descripcion_caso) {
   include '../conn/conn.php';
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
      $stmt->bindParam(':razon_visita', $razon_visita);
      $stmt->bindParam(':estado_visita', $estado_visita);
      $stmt->bindParam(':facha_visita', $facha_visita);

      // insert a row
      $id_cliente    = $_POST['id_cliente'];
      $razon_visita  = $_POST['razon_visita'];
      $estado_visita = $_POST['estado_visita'];
      $facha_visita  = $_POST['facha_visita'];
      $facha_visita  = $_POST['facha_visita'];

   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}

function crea_visita()
{

   include '../conn/conn.php';
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
            "id_tipo_caso" => $id_tipo_caso;,
         );
         return $resultado;

      } else {

         $resultado = array("exito" => false);
         return $resultado;
      }

   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}
