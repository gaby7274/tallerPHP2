<?php
include ('../headerFiles/header.php')
?>

<?php 
include('../headerFiles/navbar.php');
?>

<div class ="container">
    <div class ="row">
        <div class ="col-2">

        </div>
        <div class ="col-8">

            <br><br>
            <h2 style="text-align:center">Inserte a un estudiante</h2>
            <form method="POST" action="../backendProcesses/processEstudiantes.php">
                
            <label for='Nombre'>Nombre y Segundo Nombre</label>
            <div class="input-group mb-3">
              
                <input type="text" id="Nombre" name = 'primer-nombre' aria-label="Nombre" placeholder='Gabriel' class="form-control">
                <input type="text" name ='segundo-nombre' aria-label="Segundo Nombre" placeholder='A' class="form-control">
            </div>
            <label>Apellidos</label>
            <div class="input-group mb-3">
                
                <input type="text" name = 'apellidos[]' aria-label="Apellido Paterno" placeholder='Paterno' class="form-control">
                <input type="text" name ='apellidos[]' aria-label="Apellido Materno" placeholder='Materno' class="form-control">
            </div>

            <label>Número de estudiante</label>

            <div class="mb-3">
            <input class="form-control" type="number" placeholder="801188367" name = 'student_number'>

            </div>
            
            <div class = "d-grid gap-2"> 

            <button class ="btn btn-success btn-block" type="submit">Estamos Ready</button>

            </div>
           

            </form>
        </div>
        <div class = 'col-2'></div>
    </div>
</div>


<?php include('../headerFiles/footer.php');?>