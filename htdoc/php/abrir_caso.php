<?php

$id_cliente = $_POST['id_cliente'];
$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];

?>
<form action="">

<?php include "../comp/get_casos.php";?>
<?php include "../comp/get_tipocaso.php";?>

<textarea name="" id="" cols="30" rows="10"name="razon_visita">
</textarea>
<input type="text" name="razon_visita"/>
<input type="date"name="facha_visita"/>
<input type="date"name="descripcion_caso"/>
<textarea name="" id="" cols="30" rows="10"name="descripcion_caso">
</textarea>
<!-- descripcion_caso -->
<!-- razon_visita 	estado_visita 	facha_visita -->
  <input id="custId" name="id_cliente" type="hidden" value="<?=$id_cliente;?>"/>
</form>
