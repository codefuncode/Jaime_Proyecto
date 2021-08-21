<div class="w3-container">
   <form action="php/inserta_ficheros.php" method="post">
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
         <input class="w3-button w3-block w3-green" type="submit" value="Enviar"/>
      </div>
   </form>
</div>