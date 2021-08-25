<?php
//  Crea caso se espera que capture el ID del récord
// generado en la tabla visita para pasar el valor
// diatónicamente  al insert referente a el caso

//  Los datos deben estar llenos
if (
   isset($_POST['id_cliente']) &&
   isset($_POST['razon_visita']) &&
   isset($_POST['estado_visita']) &&
   isset($_POST['fecha_visita']) &&
   isset($_POST['id_tipo_caso'])) {
   //  Se genera una visita con los datos recibidos
   $visita = crea_visita();

//  Si el dato que retorna la función === si
   if ($visita['exito'] == "si") {
      //  Pasa a llamar la función y con los valores
      // recibidos  de la funciona anterior ejecutar esta función
      inserta_caso($visita["id_cliente"], $visita["id_visita"], $visita["id_tipo_caso"], $_POST['descripcion_caso']);
   } else {
      echo "error";
   }

} else {

   echo "Campo vacío";
}

function inserta_caso($id_cliente, $id_visita, $id_tipo_caso, $descripcion_caso)
{

   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "INSERT INTO Casos
         (id_cliente, id_visita, id_tipo_caso, descripcion_caso)
         VALUES
         (:id_cliente, :id_visita, :id_tipo_caso, :descripcion_caso)");

      $stmt->bindParam(':id_cliente', $id_cliente);
      $stmt->bindParam(':id_visita', $id_visita);
      $stmt->bindParam(':id_tipo_caso', $id_tipo_caso);
      $stmt->bindParam(':descripcion_caso', $descripcion_caso);
      //  Se inserta un caso  haciendo referencia al id de la visita previamente generada
      // e insertada en la base de datos
      if ($stmt->execute()) {
         //  recuperamos id del caso para insertar ficheros con un formulario
         //  id del caso ya en esta sección tiene el cliente identificado por su id
         $id_caso = $conn->lastInsertId();
         //  Se incluye la interfaz para agregar un fichero al caso
         include "comp/inserta_ficheros.php";

      }

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
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "INSERT INTO Visita
         (id_cliente, razon_visita, estado_visita, fecha_visita)
         VALUES
         (:id_cliente, :razon_visita, :estado_visita, :fecha_visita)");

      $stmt->bindParam(':id_cliente', $id_cliente);
      $stmt->bindParam(':razon_visita', $razon_visita);
      $stmt->bindParam(':estado_visita', $estado_visita);
      $stmt->bindParam(':fecha_visita', $fecha_visita);

      $id_cliente    = $_POST['id_cliente'];
      $razon_visita  = $_POST['razon_visita'];
      $estado_visita = $_POST['estado_visita'];
      $fecha_visita  = $_POST['fecha_visita'];
      $id_tipo_caso  = $_POST['id_tipo_caso'];

      //  si la inserción de la visita fue  exitosa ,
      // procede a retornar una maTtriz con los datos
      // necesarios para ejecutar la próxima función
      if ($stmt->execute()) {
         //  Recupera id de inserción actual
         $last_id = $conn->lastInsertId();

         $resultado = array(
            "exito"        => "si",
            "id_visita"    => $last_id,
            "id_cliente"   => $id_cliente,
            "id_tipo_caso" => $id_tipo_caso,
         );

         return $resultado;

      } else {

         $resultado = array("exito" => "no");
         return $resultado;
      }

   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}
