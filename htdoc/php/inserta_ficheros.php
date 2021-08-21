<?php

// error_reporting(0);
$fichero          = $_FILES['fichero'];
$id_cliente       = $_POST['id_cliente'];
$id_caso          = $_POST['id_caso'];
$id_tipo_caso     = $_POST['id_tipo_caso'];
$nombre_tipo_caso = nombre_tipoCaso($_POST['id_tipo_caso']);

// // $fichero          = $_FILES['fichero'];
// var_dump($_FILES['fichero']);
// $id_cliente       = 20;
// $id_caso          = 5;
// $id_tipo_caso     = 1;
// $nombre_tipo_caso = nombre_tipoCaso($id_tipo_caso);

$url1 = "../doc_cliente/{$id_cliente}";
$url2 = "../doc_cliente/{$id_cliente}/{$id_caso}";
$url3 = "../doc_cliente/{$id_cliente}/{$id_caso}/$nombre_tipo_caso";

vardump($fichero);
vardump($id_cliente);
vardump($id_caso);
vardump($id_tipo_caso);
vardump($nombre_tipo_caso);

// if (mkdir($url1, 0777, true)) {

//    if (mkdir($url2, 0777, true)) {

//       if (mkdir($url3, 0777, true)) {

//       } else {

//       }

//    } else {

//    }
// } else {

//    if (mkdir($url2, 0777, true)) {

//       if (mkdir($url3, 0777, true)) {

//       } else {

//       }

//    } else {

//       if (mkdir($url3, 0777, true)) {

//       } else {

//       }
//    }
// }

// function inserta_fichero($value = '')
// {

//    try {
//       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//       // set the PDO error mode to exception
//       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//       // prepare sql and bind parameters
//       $stmt = $conn->prepare(
//          "INSERT INTO Documento
//          (id_cliente,directorio,id_caso,id_tipo_caso,subdirectorio_caso,subdirectorio_tipocaso,url_fichero)
//          VALUES
//       (:id_cliente,:directorio,:id_caso,:id_tipo_caso,:subdirectorio_caso,:subdirectorio_tipocaso,:url_fichero)");
//       $stmt->bindParam(':firstname', $firstname);
//       $stmt->bindParam(':lastname', $lastname);
//       $stmt->bindParam(':email', $email);

//       // insert a row
//       $firstname = "John";
//       $lastname  = "Doe";
//       $email     = "john@example.com";
//       $stmt->execute();

//       // insert another row
//       $firstname = "Mary";
//       $lastname  = "Moe";
//       $email     = "mary@example.com";
//       $stmt->execute();

//       // insert another row
//       $firstname = "Julie";
//       $lastname  = "Dooley";
//       $email     = "julie@example.com";
//       $stmt->execute();

//       echo "New records created successfully";
//    } catch (PDOException $e) {
//       echo "Error: " . $e->getMessage();
//    }
//    $conn = null;
// }

function nombre_tipoCaso($id_tipo_caso)
{
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare(
         "SELECT `tipo_caso` FROM `TipoCaso` WHERE id_tipo_caso=:id_tipo_caso");
      $stmt->bindParam(':id_tipo_caso', $id_tipo_caso);
      if ($stmt->execute()) {
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $data[0]["tipo_caso"];
      }

   } catch (PDOException $e) {
      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
