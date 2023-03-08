<?php

include('connect.php');
print_r($_POST);



$query ="INSERT INTO `proyectos` ( `project_name`, `project_link`, `project_description`)  VALUES ({$project_name}, '{$project_link}', '{$project_description}')";

$q = mysqli_query($conn, $query);

$query= "select * from proyectos order by `id` DESC LIMIT 1";

$results = mysqli_query($conn, $query);

$first_row = mysqli_fetch_assoc($results);

//Loop por autor?


//$query = "INSERT INTO `estudiantes_proyectos` ( `student_id`, `project_id`) VALUES ( {$}, {$});"

header("Location: ../views/viewEstudiantes.php");
?>