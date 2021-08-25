<?php
// eliminar parate de la ruta para ejecucion en la raiz
// error_reporting(0);

// if (isset($_POST['enviar'])) {

// } else {

//    echo "<div class='w3-panel w3-pale-green w3-border'>";
//    echo "<h3>Error</h3>";
//    echo "<p>xxxxxxxxxxxxxxx </p>";
//    echo "</div>";
// }
// unset($_POST['enviar']);

$fichero          = $_FILES['fichero']["name"];
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

$url1 = "doc_cliente/{$id_cliente}";
$url2 = "doc_cliente/{$id_cliente}/{$id_caso}";

$url3 = "doc_cliente/{$id_cliente}/{$id_caso}/$nombre_tipo_caso";

$rutas = [$url1, $url2, $url3];

// var_dump($fichero);
// echo "<br/><br/>";
// var_dump($id_cliente);
// echo "<br/><br/>";
// var_dump($id_caso);
// echo "<br/><br/>";
// var_dump($id_tipo_caso);
// echo "<br/><br/>";
// var_dump($nombre_tipo_caso);
// echo "<br/><br/>";

for ($i = 0; $i < count($rutas); $i++) {
   crea_directorio($rutas[$i]);
}

function crea_directorio($url)
{
   try {
      mkdir($url, 0777, true);
   } catch (Exception $e) {

   }

}

$tmp_name = $_FILES["fichero"]["tmp_name"];
// echo $tmp_name;
$nombre = "$url3/" . basename($_FILES["fichero"]["name"]);
// echo "<br/>";
// echo $nombre;
move_uploaded_file($tmp_name, "$nombre");

$directorio             = $url1;
$subdirectorio_caso     = $url2;
$subdirectorio_tipocaso = $url3;
$url_fichero            = $nombre;

registra_fichero($id_cliente, $directorio, $id_caso, $id_tipo_caso, $subdirectorio_caso, $subdirectorio_tipocaso, $url_fichero);

echo "<div class='w3-panel w3-pale-green w3-border'>";
echo "<h3>Documento insertado </h3>";
echo "<p>Dirigase a listado de clinet epara mas opciones </p>";
echo "</div>";

function registra_fichero($id_cliente, $directorio, $id_caso, $id_tipo_caso, $subdirectorio_caso, $subdirectorio_tipocaso, $url_fichero)
{
   include 'conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare(
         "INSERT INTO Documento
         (id_cliente,directorio,id_caso,id_tipo_caso,subdirectorio_caso,subdirectorio_tipocaso,url_fichero)
         VALUES
      (:id_cliente,:directorio,:id_caso,:id_tipo_caso,:subdirectorio_caso,:subdirectorio_tipocaso,:url_fichero)");
      $stmt->bindParam(':id_cliente', $id_cliente);
      $stmt->bindParam(':directorio', $directorio);
      $stmt->bindParam(':id_caso', $id_caso);
      $stmt->bindParam(':id_tipo_caso', $id_tipo_caso);
      $stmt->bindParam(':subdirectorio_caso', $subdirectorio_caso);
      $stmt->bindParam(':subdirectorio_tipocaso', $subdirectorio_tipocaso);
      $stmt->bindParam(':url_fichero', $url_fichero);

      $stmt->execute();

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function nombre_tipoCaso($id_tipo_caso)
{
   include 'conn/conn.php';
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
// unset($_POST['enviar']);
