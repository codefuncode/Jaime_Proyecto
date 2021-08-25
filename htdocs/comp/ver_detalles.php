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
$temp_docuementos = array();
for ($i = 0; $i < count($documentos); $i++) {

   echo "<br/>";
   echo "<br/>";
   echo $documentos[$i]['directorio'];
   echo "<br/>";
   $documentos['url_fichero'];

}
?>
   <p>
      <?=$documentos['url_fichero'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
   </p>
   <p>
      <?=$cliente['nombre'];?>
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
<?php

array(2) {
   [0] => array(11) {
      ["id_documento"] => string(1)"2"
      ["id_cliente"] => string(2)"87"
      ["directorio"] => string(14)"doc_cliente/87"
      ["id_caso"] => string(2)"25"
      ["id_tipo_caso"] => string(1)"1"
      ["subdirectorio_caso"] => string(17)"doc_cliente/87/25"
      ["subdirectorio_tipocaso"] => string(25)"doc_cliente/87/25/familia"
      ["url_fichero"] => string(40)"doc_cliente/87/25/familia/Plain Text.doc"
      ["tipo_caso"] => string(7)"familia"
      ["id_visita"] => string(2)"29"
      ["descripcion_caso"] => string(21)" fgdbsdfghbfd"}

   [1] => array(11) {["id_documento"] => string(1)"3"["id_cliente"] => string(2)"87"["directorio"] => string(10)"directorio"["id_caso"] => string(2)"25"["id_tipo_caso"] => string(1)"1"["subdirectorio_caso"] => string(18)"subdirectorio_caso"["subdirectorio_tipocaso"] => string(22)"subdirectorio_tipocaso"["url_fichero"] => string(11)"url_fichero"["tipo_caso"] => string(5)"civil"["id_visita"] => string(2)"29"["descripcion_caso"] => string(21)" fgdbsdfghbfd"}}
?>
