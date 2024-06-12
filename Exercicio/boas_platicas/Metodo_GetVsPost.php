<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Método Get VS Post</title>
</head>
<body>
   <form id="Iform" action="index.php" method="get">
      <label for="iName">Nome:</label><br>
      <input type="text" name="text_name" id="iName"><br>
      <input type="submit" value="Enviar">
   </form>
   <form id="Iform" action="Exercicio\boas_platicas\processar.php" method="post">
      <label for="iName">username:</label><br>
      <input type="text" name="text_userName" id="iName"><br>
      <label for="iPassword">Password</label><br>
      <input type="password" name="text_password" id="iPassword"><br>
      <input type="submit" value="Enviar">
   </form>
</body>
</html>