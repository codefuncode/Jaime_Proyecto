<?php
//  Llamada ala función
inserta_cliente();

function inserta_cliente()
{

   include "conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare(
         "INSERT INTO Cliente (nombre, apellidos, inicial, apodo, direccion_postal, codigo_area, direccion_fisica, pueblo, fecha_de_naciminto, genero, email, telefono, ocupacion)
         VALUES (:nombre, :apellidos, :inicial, :apodo, :direccion_postal, :codigo_area, :direccion_fisica, :pueblo, :fecha_de_naciminto, :genero, :email, :telefono, :ocupacion)");

      // Se recupera nos datos vía pos y guardando los mismos
      // en variables que se usan como parámetro de la consulta preparada
      // ****** elimina y muestra campos requere convertir a nulo un valor vacio  ******
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

      //  Se aplican los valores de la consulta preparada  usando la funcion bindParam()
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

      //  Verificamos si d=se ejecuto la sentencia
      if ($stmt->execute()) {

         //  Capturamos el id de le registro que se
         // acaba de insertar en tiempo de ejecución
         $last_id = $conn->lastInsertId();

         // Llamada a la función  para buscar
         // los datos del mismo récord previamente insertado
         // ** se le pasa el id recuperado como parámetro a la función para la búsqueda ***
         datos_clinete($last_id);

      } else {
         //  Error si algo no esta bien aquí
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
      // =====
      //  Recurearndo datos por id del cliente
      $stmt = $conn->prepare("SELECT * FROM Cliente  WHERE id_cliente=:id_cliente");
      $stmt->bindParam(':id_cliente', $id);
      $stmt->execute();
      // =====
      //  Se recuperan datos
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //  Se almacenan los datos en variables
      // que se usaran el etiquetas HTML
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
      //  se incluye interfaz html para desplegar datos de variables
      include "comp/perfil_cliente.php";

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

// echo "Hola";
