<div class="w3-container">
   <!--  Resive  las variabes de ejecucion dentro de la funbcion para obtener los valores
    ESta sirve para enviar el fichero a la base de datos  -->
   <form action="inserta_ficheros.php" method="post" enctype="multipart/form-data">
      <div class="w3-border-bottom">
         <div class="custom-file mb-5">
            <input accept=".pdf,.doc" class="custom-file-input" name="fichero" type="file"/>
            <label class="custom-file-label">
               Choose file
            </label>
         </div>
         <input name="id_cliente" type="hidden" value="<?=$id_cliente;?>"/>
         <input name="id_caso" type="hidden" value="<?=$id_caso;?>"/>
         <input name="id_tipo_caso" type="hidden" value="<?=$id_tipo_caso;?>"/>
         <input name="enviar"class="w3-button w3-block w3-green" type="submit" value="Enviar"/>
      </div>
   </form>
</div>