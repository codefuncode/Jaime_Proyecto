
	<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
// $user = "adminl";
// $pass = "admin";

$resultado      = "";
$existe_usuario = usuario_esiste($user);

if ($existe_usuario["resultado"]) {

   $usuario = valida_usuario($user, $pass);

   if ($usuario['resultado']) {

      $cookie_name  = "user";
      $cookie_value = $usuario['dato']['id_usuario'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      header("Location: ../index.php");

   } else {
      $resultado =
         header("Location: ../page-login.php");
   }

} else {
//  Cuando habilitemos el registro de usuyario debemos redirigir
   // $resultado = "{$resultado} usuario no existe <br/>";
}
usuario_esiste($user);
echo "====================<br/>====================";
valida_usuario($user, $pass);
function usuario_esiste($user)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * from Usuario
   				WHERE usuario=:user"
      );

      $stmt->bindParam(':user', $user);

      $stmt->execute();
      $count = $stmt->rowCount();

      if ($count == 1) {
         $resultado = array(
            "resultado" => true);
         return $resultado;
         // var_dump($resultado);
      } else {
         $resultado = array(
            "resultado" => false);
         return $resultado;
         // var_dump($resultado);
      }

   } catch (PDOException $e) {

      $resultado = array(
         "resultado" => false);
      return $resultado;
      // var_dump($resultado);
   }
   $conn = null;
}

function valida_usuario($p_user, $p_pass)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * from Usuario
   				WHERE usuario=:user
   				AND pass=:pass"
      );
      $stmt->bindParam(':user', $p_user);
      $stmt->bindParam(':pass', $p_pass);

      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $count  = $stmt->rowCount();

      if ($count == 1) {

         $resultado = array(
            "resultado" => true,
            "dato"      => $result);
         return $resultado;
         // var_dump($resultado);
         // echo $result['id_usuario'];
      } else {
         $resultado = array(
            "resultado" => false);
         return $resultado;
         // var_dump($resultado);
      }

   } catch (PDOException $e) {

      $resultado = array(
         "resultado" => false);
      return $resultado;
      // var_dump($resultado);
   }
   $conn = null;
}
