<!--
Condicional para detectar la galleta
insertada en el navegador "Cooke"
-->
<?php if (!isset($_COOKIE["user"])):
   header("Location: page-login.php");?>
		<?php else: ?>
<!DOCTYPE html>
<html lang="en">
   <!--
   Cabecera del documento incluye enlace a hojas externas y etiquetas meta entre otros
   -->
   <?php include_once "comp/head.php";?>
   <body>
      <!--  Componente previo a la carga total del; fichero actual  -->
      <?php include_once "comp/preloader.php";?>
      <div id="main-wrapper">
         <div class="nav-header">
            <a class="brand-logo" href="index.html">
               <img alt="" class="logo-abbr" src="./images/logo.png"/>
               <img alt="" class="logo-compact" src="./images/logo-text.png"/>
               <img alt="" class="brand-title" src="./images/logo-text.png"/>
            </a>
            <div class="nav-control">
               <div class="hamburger">
                  <span class="line">
                  </span>
                  <span class="line">
                  </span>
                  <span class="line">
                  </span>
               </div>
            </div>
         </div>
         <!--  Cabecera del documento  -->
         <?php include_once "comp/header.php";?>
         <!--
         Menú contiene solo la barra lateral y ademas enlaces de navegación
         -->
         <?php include_once "comp/menu.php";?>
         <div class="content-body">
            <table class="w3-table w3-bordered">
               <tr>
                  <th>
                     Nombre
                  </th>
                  <th>
                     Apellido
                  </th>
                  <th>
                     Points
                  </th>
                  <th>
                     pueblo
                  </th>
                  <th>
                     # tel
                  </th>
                  <th>
                  </th>
                  <th>
                  </th>
               </tr>

               <?php

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
         echo "<form action='' method=''>";
         echo " <input type='hidden' name='id_cliente' value='$id_cliente'/>";
         echo "<td><input class='w3-button w3-black' type='submit' value='Editar'/></td>";
         echo "</form>";
         echo "<form action='' method=''>";
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
?>
            </table>
         </div>
         <!--  Pie de la pagina web o aplicación  -->
         <?php include_once "comp/footer.php";?>
      </div>
      <!--
      Contiene enlaces a ficheros externos de JavaScript
      -->
      <?php include_once "comp/javascript_pie.php";?>
   </body>
</html>
<?php endif;?>
