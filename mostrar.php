<?php
$inc = include ("acme_bd.php");
if ($inc){
$consulta = "SELECT * FROM informacion ";
$resultado = mysqli_query ($conexion,$consulta);

if ($resultado){
    while ($row = $resultado->fetch_array()){

    $cedula = $row['cedula'];
    $primer = $row['primer_nombre'];
    $segundo = $row['segundo_nombre'];
    $apellido = $row['apellidos'];
    $direccion = $row['direcion'];
    
    

    ?>
    <div>
        <h2><?php echo $primer;?></h2>
        <div>
            <p>
                <b>cedula:</b><?php echo $cedula ?><br>
                <b>primer nombre:</b><?php echo $primer ?><br>
                <b>segundo nombre</b><?php echo $segundo?><br>
                <b>apellido</b><?php echo $apellido ?><br>
                
            </p>
        </div>
    </div>
    <?php
    }
}



}

?>