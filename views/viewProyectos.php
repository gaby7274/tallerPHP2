<?php
include ('../headerFiles/header.php')
?>

<?php 
include('../headerFiles/navbar.php');
include('../backendProcesses/connect.php');

//No es la mejor manera de hacer las cosas !!! pero

$query = "select * from proyectos ";

$results = mysqli_query($conn, $query );
//print_r($results);

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
                        Nombre del proyecto
                    </th>
                    <th>
                        Descripción del proyecto
                    </th>
                    <th>
                        Autores del proyecto
                    </th>
                    <th>
                        Link del proyecto
                    </th>
                <th>
                    Editar info
                </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while( $row = mysqli_fetch_assoc($results)){
                      $query
                      ?>

                        <tr>
                            <td>
                                <?php echo $row['project_name'];?>
                            </td>
                            <td>
                            <?php echo $row['project_description'];?>
                            </td>
                            <td>
                            <?php 
                            
                            $query_for_students = "select * from estudiantes inner join estudiantes_proyectos on estudiantes.id = estudiantes_proyectos.student_id";
                            $results2 = mysqli_query($conn, $query_for_students);
                            while($row2 = mysqli_fetch_assoc($results2)){

                                ?>
                                <p><?php echo $row2['last_name']. ' ' . $row2['first_name'] ?></p>

                                <?php

                            }

                            ?>
                            </td>
                            <td>
                            <?php echo $row['project_link'];?>
                            </td>
                            
                            <td>
                                <a type='button' class = "btn btn-warning" href="./formProyectos.php?id=<?php echo $row["id"];?>">Editar</a>
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