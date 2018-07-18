<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Elementos</title>
</head>
<body>
    <?php
        include("conexion.php");
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM imagenes WHERE id='$id'";
        $resultado = $conn->query($query);
        $row = $resultado-> fetch_assoc();
    
    ?>
    <center>
        <form action="proceso_modificar.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="nombre" placeholder="Nombre" value=" <?php echo $row['nombre']; ?>"><br><br>
              <img height="300px" width="300px" src="data:image/jpg;base64,
							<?php echo base64_encode($row['ruta']);?>"/>
             <br><br>
              <input type="file" name="Imagen">
              <input type="submit" value="Agregar">
          </form>
    </center>
</body>
</html>