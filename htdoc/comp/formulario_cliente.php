<div class="w3-container w3-padding">
   <div class="w3-container"style="background-color: #343957; ">
  <h1 style="color:#f9fafc;">My Header</h1>
</div>
   <div class="w3-container formulario_cliente" style="margin-top: 20px;">
      <form action="perfil_cleinte.php" class="w3-container" method="post">
         <p>
            <input  required="" class="w3-input w3-border" name="nombre" type="text"/>
            <label>
               Nombre
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="apellidos" type="text"/>
            <label>
               Apellidos
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="inicial" type="text"/>
            <label>
               Inicial
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="apodo" type="text"/>
            <label>
               Apodo
            </label>
         </p>
         <p>
            <textarea  style="height: 75px;width: 100%;" id="" name="direccion_postal" >
            </textarea>
               <!-- <input  required="" class="w3-input w3-border" name="xxxxxx" type="text"/> -->
            <label>
             Dirección postal
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="codigo_area" type="numeric"/>
            <label>
               Código de área
            </label>
         </p>
         <p>
            <textarea  style="height: 75px;width: 100%;" id="" name="direccion_fisica" >
            </textarea>
             <label>
               Dirección física
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="pueblo" type="text"/>
            <label>
               Pueblo
            </label>

         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="fecha_de_naciminto" type="date"/>
            <label>
               Fecha de nacimiento
            </label>
         </p>
         <p>
            <input  required="" class="w3-radio" name="genero" type="radio" value="Masculino"/>
            <label>
               Masculino
            </label>
            <input  required="" class="w3-radio" name="genero" type="radio" value="Femenino"/>
            <label>
               Femenino
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="email" type="email"/>
            <label>
               Correo electrónico
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="telefono" type="tel"/>
            <label>
               Teléfono
            </label>
         </p>
         <p>
            <input  required="" class="w3-input w3-border" name="ocupacion" type="text"/>
            <label>
               Ocupación
            </label>
         </p>
         <p>
            <input  required="" class="w3-btn w3-green" type="submit" value="Registrar"/>
         </p>
      </form>
   </div>
</div>
