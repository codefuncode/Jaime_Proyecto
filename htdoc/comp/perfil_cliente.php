<div class="w3-container w3-padding">
   <div class="w3-container" style="background-color: #343957; ">
      <h1 style="color:#f9fafc;">
         Perfil cliente
      </h1>
   </div>
   <div class="w3-container formulario_cliente" style="margin-top: 20px;">
      <div class="w3-row">
         <div class="w3-third w3-container ">
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Nombre:
                  <span>
                     <?=$nombre;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Apellidos:
                  <span>
                     <?=$apellidos;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Inicial:
                  <span>
                     <?=$inicial;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Dirección Postal:
               </h3>
               <p style="color: black;">
                  <?=$direccion_postal;?>
               </p>
            </div>
         </div>
         <div class="w3-third w3-container">
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Código  de área:
                  <span>
                     <?=$codigo_area;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  Dirección física:
               </h3>
               <p style="color: black;">
                  <?=$direccion_fisica;?>
               </p>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  fecha_de_naciminto:
                  <span>
                     <?=$fecha_de_naciminto;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  genero:
                  <span>
                     <?=$genero;?>
                  </span>
               </h3>
            </div>
         </div>
         <div class="w3-third w3-container">
            <div class="w3-panel w3-border-bottom">
               <h3>
                  email:
                  <span>
                     <?=$email;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  telefono:
                  <span>
                     <?=$telefono;?>
                  </span>
               </h3>
            </div>
            <div class="w3-panel w3-border-bottom">
               <h3>
                  ocupacion:
                  <span>
                     <?=$ocupacion;?>
                  </span>
               </h3>
            </div>
         </div>
      </div>
      <div class="w3-container">
         <input id="custId" name="id_cliente" type="hidden" value="<?=$id_cliente;?>"/>
         <button class="w3-button w3-red w3-left">
            Editar
         </button>
         <form action="abrir_caso.php" method="post">
            <input id="custId" name="id_cliente" type="hidden" value="<?=$id_cliente;?>"/>
            <input id="custId" name="nombre" type="hidden" value="<?=$nombre;?>"/>
            <input id="custId" name="apellidos" type="hidden" value="<?=$apellidos;?>"/>
            <input class="w3-button w3-green w3-right" name="enviar" type="submit" value="Abrir caso"/>
         </form>
      </div>
      <!--      <form action="">
         <div class="w3-border-bottom">
            <div class="custom-file mb-5">
               <input id="custId" name="custId" type="hidden" value="<?=$id_cliente;?>"/>
               <input class="custom-file-input" id="customFile" type="file"/>
               <label class="custom-file-label" for="customFile">
                  Choose file
               </label>
            </div>
            <button class="w3-button w3-block w3-green">
               Button
            </button>
         </div>
      </form> -->
   </div>
</div>
