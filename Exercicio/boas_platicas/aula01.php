<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>For</title>
</head>
<body>
   <h1>Exercício</h1>
   <br>
   <?php
    for ($i=0; $i <= 20; $i++) { 
      echo "<p>$i</p>";
    };
   ?>
   <br>
   <?php for ($m = 0; $m <= 20; $m++) {?>
     <p><?php echo "$m" ?></p>
   <?php }?> 

</body>
</html>