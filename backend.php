// BACKEND PHP
<?php
  if (!empty($_POST['name'])) {
    echo '<h2>Hello '.$_POST['name'].'!</h2>';
  }
?>