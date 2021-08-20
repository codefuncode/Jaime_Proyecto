<?php

$id_cliente = $_POST['id_cliente'];
$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];

?>
<div class="w3-container">
   <h2>
      Abrir nuevo caso para
      <?=$nombre;?>
      ,
      <?=$apellidos;?>
   </h2>
</div>
<form action="php/crea_caso.php" method="post">
   <div class="w3-row-padding">
      <div class="w3-col s12 m2 l2">
         <label for="">
            Estado de la visita
         </label>
         <input class="w3-input w3-border w3-margin-bottom" name="estado_visita" type="text"/>
         <label for="">
            Fecha
         </label>
         <input class="w3-input w3-border w3-margin-bottom" name="facha_visita" type="date"/>
      </div>
      <div class="w3-col s12 m5 l5">
         <label for="">
            Razón de la visita
         </label>
         <textarea id="" name="razon_visita" rows="10" style="width:  90%; height: 200px; resize: none">
         </textarea>
      </div>
      <div class="w3-col s12 m5 l5">
         <label for="">
            Descripción de la visita
         </label>
         <textarea id="" name="descripcion_caso" rows="10" style="width:  90%; height: 200px; resize: none">
         </textarea>
      </div>
   </div>
   <div class="w3-row-padding" style="margin-top: 50px; margin-bottom: 30px;">
      <div class="w3-col s12 m6 l6">
         <label for="">
            Tipo de caso
         </label>
         <?php include "php/get_tipocaso.php";?>
      </div>
      <div class="w3-col s12 m6 l6">
         <label for="">
            Casos del cliente
         </label>
         <?php include "php/get_casos.php";?>
      </div>
   </div>
   <input id="custId" name="id_cliente" type="hidden" value="<?=$id_cliente;?>"/>
   <div class="w3-container w3-padding">
      <input class="w3-button w3-green w3-right" type="submit" value="Abrir"/>
   </div>
</form>
