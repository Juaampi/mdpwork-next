<?php

      $user = $_POST['b'];
      if(!empty($user)) {
            comprobar($user);
      }
      /*CAMBIAR DATOS DE LA BASE DE DATOS UNA VEZ EN EL HOSTING */

      function comprobar($b) {
        $mysqli = new mysqli("168.197.49.54", "root", "root", "mdpwork");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $sql = "SELECT * FROM users WHERE email = '$b'";
        $result = $mysqli->query($sql);
            if ($result->num_rows == 0){
                  echo 'no';
            }else{
                  echo 'yes';
            }
      }
?>
