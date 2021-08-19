<?php

inserta_cliente();
function inserta_cliente()
{

   include "conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare("INSERT INTO Cliente (nombre, apellidos, inicial, apodo, direccion_postal, codigo_area, direccion_fisica, pueblo, fecha_de_naciminto, genero, email, telefono, ocupacion )
  VALUES (:nombre, :apellidos, :inicial, :apodo, :direccion_postal, :codigo_area, :direccion_fisica, :pueblo, :fecha_de_naciminto, :genero, :email, :telefono, :ocupacion)");
      $stmt->bindParam(':nombre', $nombre);
      $stmt->bindParam(':apellidos', $apellidos);
      $stmt->bindParam(':inicial', $inicial);
      $stmt->bindParam(':apodo', $apodo);
      $stmt->bindParam(':direccion_postal', $direccion_postal);
      $stmt->bindParam(':codigo_area', $codigo_area);
      $stmt->bindParam(':direccion_fisica', $direccion_fisica);
      $stmt->bindParam(':pueblo', $pueblo);
      $stmt->bindParam(':fecha_de_naciminto', $fecha_de_naciminto);
      $stmt->bindParam(':genero', $genero);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':telefono', $telefono);
      $stmt->bindParam(':ocupacion', $ocupacion);

      $nombre             = $_POST['nombre'];
      $apellidos          = $_POST['apellidos'];
      $inicial            = $_POST['inicial'];
      $apodo              = $_POST['apodo'];
      $direccion_postal   = $_POST['direccion_postal'];
      $codigo_area        = $_POST['codigo_area'];
      $direccion_fisica   = $_POST['direccion_fisica'];
      $pueblo             = $_POST['pueblo'];
      $fecha_de_naciminto = $_POST['fecha_de_naciminto'];
      $genero             = $_POST['genero'];
      $email              = $_POST['email'];
      $telefono           = $_POST['telefono'];
      $ocupacion          = $_POST['ocupacion'];

      if ($stmt->execute()) {
         $last_id = $conn->lastInsertId();

         datos_clinete($last_id);

      } else {

         header("Location: page-error-500.php");

      }

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function datos_clinete($id)
{
   include "conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM Cliente  WHERE id_cliente=:id_cliente");

      $stmt->bindParam(':id_cliente', $id);

      $stmt->execute();

      // set the resulting array to associative
      $data               = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $id_cliente         = $data[0]['id_cliente'];
      $nombre             = $data[0]['nombre'];
      $apellidos          = $data[0]['apellidos'];
      $inicial            = $data[0]['inicial'];
      $apodo              = $data[0]['apodo'];
      $direccion_postal   = $data[0]['direccion_postal'];
      $codigo_area        = $data[0]['codigo_area'];
      $direccion_fisica   = $data[0]['direccion_fisica'];
      $pueblo             = $data[0]['pueblo'];
      $fecha_de_naciminto = $data[0]['fecha_de_naciminto'];
      $genero             = $data[0]['genero'];
      $email              = $data[0]['email'];
      $telefono           = $data[0]['telefono'];
      $ocupacion          = $data[0]['ocupacion'];
      include "comp/perfil_cliente.php";

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

// echo "Hola";
