
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="container">
  <?php
    include("registrar.php");
    ?>
    <h1>Ingreso de Datos</h1>
    <form method="post">
      <div class="column-container">
        

          <label for="dpi">No DPI:</label>
          <input type="text" id="dpi" name="dpi"><br><br>
          <label for="primernombre">Primer Nombre:</label>
          <input type="text" id="primer_nombre" name="primer_nombre"><br><br>
          <label for="segundonombre">Segundo Nombre:</label>
          <input type="text" id="segundo_nombre" name="segundo_nombre"><br><br>
          <label for="primerapellido">Primer Apellido:</label>
          <input type="text" id="primer_apellido" name="primer_apellido"><br><br>
          <label for="segundoapellido">Segundo Apellido:</label>
          <input type="text" id="segundo_apellido" name="segundo_apellido"><br><br>
       
        
          <label for="direccion">Direccion:</label>
          <input type="text" id="direccion" name="direccion"><br><br> 
          <label for="telefono">Telefono:</label>
          <input type="text" id="tel" name="tel"><br><br>
          <label for="celular">Celular:</label>
          <input type="text" id="celular" name="celular"><br><br>
          <label for="salario">Salario Base:</label>
          <input type="text" id="salario" name="salario"><br><br>
          <label for="bonificacion">Bonificacion:</label>
          <input type="text" id="bonificacion" name="bonificacion"><br><br>
   
      </div>  
      <input type="submit" name="inserccion" value="Inserccion">
      <input type="submit" name="actualizacion" value="Actualizacion">
      <input type="submit" name="eliminacion" value="Eliminacion"><br><br>
      
    </form>
   
  </div>
</body>
</html>