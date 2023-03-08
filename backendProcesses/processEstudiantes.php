<?php

include('connect.php');



$query ="INSERT INTO `estudiantes` (`student_id`, `first_name`, `middle_name`, `last_name`) VALUES ({$student_number}, '{$first_name}', '{$middle_name}',  '{$apellidos}')";

$q = mysqli_query($conn, $query);

//header("Location: ../views/viewEstudiantes.php");
?>