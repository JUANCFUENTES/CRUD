<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <h1>Formulario</h1>
        
            <a href="index.php">
            <button type="button" class="btn btn-outline-primary">Inicio  </button>
            </a> 
       
        <div class="col-md-4">
            <br>
            <div class="card card-body">
               
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" required autofocus> <br> <br>
                    </div>
                    <div class="form-group">
                        <label for="apellidoP">Apellido Paterno:</label>
                        <input type="text" name="apellidoP" required autofocus> <br> <br>
                    </div>
                    <div class="form-group">
                        <label for="apellidoM">Apellido Materno:</label>
                        <input type="text" name="apellidoM" required autofocus> <br> <br>
                    </div>
                    <div class="form-group">
                        <label for="codigo">Codigo de estudinte:</label>
                        <input type="text" name="codigo" required autofocus> <br> <br>
                    </div>
                    <div class="form-group">
                        <label for="promedio">Promedio:</label>
                        <input type="number" name="promedio" min="0" max="100" value="0" autofocus> <br> <br>
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block" value="Enviar" name="enviar">
                </form>
            </div>
        </div>        
    </div>
    
</div>

  <?php include("includes/footer.php") ?>