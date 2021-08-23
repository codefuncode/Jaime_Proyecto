<div class="w3-container w3-padding">
   <div class="w3-container" style="background-color: #343957; ">
      <h1 style="color:#f9fafc;">
         My Header
      </h1>
   </div>
   <div class="w3-container formulario_cliente" style="margin-top: 20px;">
      <!--  Formulario para ser enviado todos los elementos 
       con atributo nombre son considerados  para capturar 
       los datos que se ingresaros dentro del mismo. 
       Los datos son enviados al fichero del atributo action -->
      <form action="perfil_cleinte.php" class="w3-container" method="post">
         <p>
            <input class="w3-input w3-border" name="nombre" required="" type="text"/>
            <label>
               Nombre
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="apellidos" required="" type="text"/>
            <label>
               Apellidos
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="inicial" required="" type="text"/>
            <label>
               Inicial
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="apodo" required="" type="text"/>
            <label>
               Apodo
            </label>
         </p>
         <p>
            <textarea id="" name="direccion_postal" style="height: 75px;width: 100%;">
            </textarea>
            <label>
               Dirección postal
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="codigo_area" required="" type="numeric"/>
            <label>
               Código de área
            </label>
         </p>
         <p>
            <textarea id="" name="direccion_fisica" style="height: 75px;width: 100%;">
            </textarea>
            <label>
               Dirección física
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="pueblo" required="" type="text"/>
            <label>
               Pueblo
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="fecha_de_naciminto" required="" type="date"/>
            <label>
               Fecha de nacimiento
            </label>
         </p>
         <p>
            <input class="w3-radio" name="genero" required="" type="radio" value="Masculino"/>
            <label>
               Masculino
            </label>
            <input class="w3-radio" name="genero" required="" type="radio" value="Femenino"/>
            <label>
               Femenino
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="email" required="" type="email"/>
            <label>
               Correo electrónico
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="telefono" required="" type="tel"/>
            <label>
               Teléfono
            </label>
         </p>
         <p>
            <input class="w3-input w3-border" name="ocupacion" required="" type="text"/>
            <label>
               Ocupación
            </label>
         </p>
         <p>
            <input class="w3-btn w3-green" required="" type="submit" value="Registrar"/>
         </p>
      </form>
   </div>
</div>
