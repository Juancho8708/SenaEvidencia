<?php 

include ("acme_bd.php");

if (isset($_POST['register'])){
    if (strlen ($_POST['cedula'])>= 1 && 
        strlen ($_POST['primer_nombre'])>=1 &&
        strlen ($_POST['segundo_nombre'])>=1 &&
        strlen ($_POST['apellido'])>=1 &&
        strlen ($_POST['direccion'])>=1 &&
        strlen ($_POST['tel'])>=1 &&
        strlen ($_POST['ciudad'])>=1)

        $cedula = trim($_POST['cedula']);
        $primer = trim($_POST['primer_nombre']);
        $segundo = trim($_POST['segundo_nombre']);
        $apellido = trim($_POST['apellido']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['tel']);
        $ciudad = trim($_POST['ciudad']);
        $fechareg = date("d/m/y");

        $consulta = "INSERT INTO informacion(cedula, primer_nombre, segundo_nombre, apellidos, direcion, telefono, ciudad) VALUES ('$cedula','$primer','$segundo','$apellido','$direccion','$telefono','$ciudad' '$fechareg')";
        $resultado = mysqli_query ($conexion,$consulta);

        if ($resultado){
            ?>
            <h3 class="ok">inscribio en correctamente en la base de datos</h3>
            <?php 
          }else{
             ?>
             <h3 class="bad">ocurrio un error</h3>
             <?php
          }
         } else {
             ?>
             <h3 class="bad">completar los cargos porfavor</h3>
             <?php  
         }

?>