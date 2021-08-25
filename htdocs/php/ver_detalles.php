<?php

// $id = $_POST['id_cliente'];
$id      = 87;
$cliente =
   get_cilentedatos($id);

$documentos =
   get_documentos_datos($cliente['id_cliente']);

$datos_visita =
   get_visita_datos($cliente['id_cliente']);

var_dump($cliente);
echo "<br/>";
echo "<br/>";
var_dump($documentos);
echo "<br/>";
echo "<br/>";
var_dump($datos_visita);

function get_cilentedatos($id)
{
   include '../conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM Cliente WHERE id_cliente=:id_cliente");
      $stmt->bindParam(':id_cliente', $id);
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;

   } catch (PDOException $e) {
      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function get_documentos_datos($id)
{
   include '../conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT Documento.url_fichero,Documento.directorio, Documento.subdirectorio_tipocaso, TipoCaso.tipo_caso, Casos.descripcion_caso FROM Documento, TipoCaso, Casos WHERE Documento.id_cliente = :id_cliente AND Casos.id_cliente = :id_cliente AND TipoCaso.id_tipo_caso = Documento.id_tipo_caso");
      // $stmt = $conn->prepare("SELECT * FROM Documento, TipoCaso, Casos WHERE Documento.id_cliente = :id_cliente AND Casos.id_cliente = :id_cliente AND TipoCaso.id_tipo_caso = Documento.id_tipo_caso");

      $stmt->bindParam(':id_cliente', $id);
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   } catch (PDOException $e) {
      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function get_visita_datos($id)
{
   include '../conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM Visita WHERE id_cliente=:id_cliente");
      $stmt->bindParam(':id_cliente', $id);
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   } catch (PDOException $e) {
      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

?>
<div class="w3-container">
   <h2>
      <?=$cliente['nombre'];?>
   </h2>
   <p>
      <?=$cliente['apellidos'];?>
   </p>
   <p>
      <?=$cliente['inicial'];?>
   </p>
   <p>
      <?=$cliente['apodo'];?>
   </p>
   <p>
      <?=$cliente['direccion_postal'];?>
   </p>
   <p>
      <?=$cliente['codigo_area'];?>
   </p>
   <p>
      <?=$cliente['direccion_fisica'];?>
   </p>
   <p>
      <?=$cliente['fecha_de_naciminto'];?>
   </p>
   <p>
      <?=$cliente['email'];?>
   </p>
   <p>
      <?=$cliente['telefono'];?>
   </p>
   <p>
      <?=$cliente['ocupacion'];?>
   </p>
   <p>=====================</p>

   <?php
$temp_directorio = array();
$temp_fichero    = array();
// array_push($stack, "apple", "raspberry");
for ($i = 0; $i < count($documentos); $i++) {
   echo "<br/>";

   array_push($temp_directorio, $documentos[$i]['directorio']);
   echo $documentos[$i]['subdirectorio_tipocaso'];
   echo "<br/>";
   echo "<br/>";
   // echo $documentos[$i]['url_fichero'];

   array_push($temp_fichero, $documentos[$i]['url_fichero']);

}

array_unique($temp_directorio);
array_unique($temp_fichero);

echo "Usted tiene " . count($temp_directorio) . " Directorios";
echo "Usted tiene " . count($temp_fichero) . " Directorios";
?>
   <p>
   <?php

echo "Usted ha visitado " . count($datos_visita) . " veces";
?>
   </p>




   <div class="w3-card-4" style="width:100%;">
      <header class="w3-container ">
         <h1>
            Header
         </h1>
      </header>
      <div class="w3-container">
         <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         </p>
      </div>
      <footer class="w3-container ">
         <h5>
            Footer
         </h5>
      </footer>
   </div>
</div>

