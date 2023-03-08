<?php
include ('../headerFiles/header.php')
?>

<?php 
include('../headerFiles/navbar.php');
include('../backendProcesses/connect.php');

//No es la mejor manera de hacer las cosas !!! pero

$query = "select * from estudiantes order by `last_name`";

$results = mysqli_query($conn, $query );
print_r($results);



?>
<br>
<br>
<div class ="row">
    <div class = 'col-1'>

    </div>

    <div class = "col-10">
        <table class = 'table table-striped table-hover table-light'>
            <thead>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Segundo Nombre
                    </th>
                    <th>
                        Apellido Paterno
                    </th>
                    <th>
                        Apellido Materno
                    </th>
                    <th>
                        # estudiante
                    </th>
                <th>
                    Editar info
                </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while( $row = mysqli_fetch_assoc($results)){
                       $apellidos = explode(' ', $row['last_name']);  
                        ?>

                        <tr>
                            <td>
                                <?php echo $row['first_name'];?>
                            </td>
                            <td>
                            <?php echo $row['middle_name'];?>
                            </td>
                            <td>
                            <?php echo $apellidos[0];?>
                            </td>
                            <td>
                            <?php echo $apellidos[1];?>
                            </td>
                            <td>

                            <?php echo $row['student_id'];?>
                            </td>
                            <td>
                                <a type='button' class = "btn btn-warning" href="./formEstudiantes.php?id=<?php echo $row["id"];?>">Editar</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class = 'col-1'>

    </div>
</div>





<?php include('../headerFiles/footer.php');?>