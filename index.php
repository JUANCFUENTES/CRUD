<?php include("<includes/header.php") ?>

 <div class="container p-4">

    <div class="row">

        <h1>Alumnos</h1>
           
        <div class="col-md-8">
        <br> 
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Promedio</th>
                    </tr>
                </thead>
                 <tbody>
        
                <?php
                $sql = "SELECT * FROM alumnos";
	
                 $stmt = $conn->prepare($sql);
      
                $stmt->execute();
      
      
                // Configura los resultados como un arreglo asociativo
      
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
      
                 // $stmt->fetchAll() Obtiene el arreglo asociativo
      
                foreach ($stmt->fetchAll() as $row) { ?>
         
                 <tr>
                    <td> <?php echo $row['codigo']; ?></td>
                    <td> <?php echo $row['nombre']; ?> </td>
                    <td> <?php echo $row['apellidoP']; ?> </td>
                    <td> <?php echo $row['apellidoM']; ?> </td>
                    <td> <?php echo $row['promedio']; ?> </td>
                </tr>
        
                    <?php }
                    ?>
                 </tbody>
             </table>

        </div>
        <a href="formulario.php">
                <button type="button" class="btn btn-outline-primary">Registra a un alumno</button>    
                </a>

    </div>
</div>

   <?php include("includes/footer.php") ?>