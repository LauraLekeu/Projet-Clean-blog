<?php
/*

      .app/vues/template/defaut.php

*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once '../app/vues/template/partials/_head.php'; ?>
  </head>
  <body>
    <!-- Navigation -->
    <?php include_once '../app/vues/template/partials/_nav.php'; ?>
    <!-- CONTENU -->
    <main>
    <?php echo $content; ?>
    <hr>
    </main>
    <!-- Footer -->
    <?php include_once '../app/vues/template/partials/_footer.php'; ?>
    <!-- Scripts -->
    <?php include_once '../app/vues/template/partials/_scripts.php'; ?>
  </body>
</html>
