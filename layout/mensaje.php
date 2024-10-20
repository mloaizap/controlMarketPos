<?php

if(isset($_SESSION['mensaje'])){
    $respuesta = $_SESSION['mensaje']; ?>
   
    <script>
     Swal.fire({
     icon: "error",
     title: <?php echo $respuesta; ?>,
     timer: 2500
     })
    </script>
    <?php
    unset($_SESSION['mensaje']);
   }

   ?>