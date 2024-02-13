<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge":>
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <title>Test Base</title>
</head>
<body>
  <ul>
    <form  method="post" autocomplete="off">

      <li>
        <label for="name">Nombresss:</label>
        <input type="text" id="nombre" name="nombre" />
      </li>

      <li>
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" />
      </li>

      <li>
        <label for="msg">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea>
      </li>

    </ul>
    <input type="submit" name="send" class="button" value="Enviazar">
  </form>
  <?php
  include("send.php");
  ?>
</body>
</html>