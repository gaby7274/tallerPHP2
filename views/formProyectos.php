<?php
include ('../headerFiles/header.php');
include ("../backendProcesses/connect.php");
$query = "select * from estudiantes order by `last_name` ";

$results = mysqli_query($conn, $query );

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
            <h2 style="text-align:center">Inserte Proyecto</h2>
            <form method="POST" action="../backendProcesses/processProyectos.php">
                
            <label for='Nombre'>Nombre del Proyecto</label>
            <div class="input-group mb-3">
              
                <input type="text" id="Nombre" name = 'project_name' aria-label="Nombre" placeholder='El proyecto' class="form-control">
            </div>
            <label>Descripción del proyecto</label>
            <div class="input-group mb-3">
                
                <textarea class='form-control' name = 'description' aria-label="Descripción" placeholder='Paterno' class="form-control"></textarea>
               </div>

            <label>Link del proyecto</label>

            <div class="mb-3">
            <textarea class="form-control" name='project_link'></textarea>

            </div>

            <label>Autores</label>
            <div id = "addSelect">
                <div class="mb-3" >
                    <select class="form-control" name='project_authors[]'>
                        <option value = "0">Nothing Selected</option>

                    <?php while($row = mysqli_fetch_assoc($results)) {?>
                        <option value="<?php echo $row["id"]?>"><?php echo $row["last_name"] . ", " . $row["first_name"]?></option>


                        <?php
                        }
                        ?>

                    </select>

                </div>
            
                <button class='btn btn-secondary btn-add' >Añadir autor</button>
                <br>
            </div>

            
            <div class = "d-grid gap-2"> 

            <button class ="btn btn-success btn-block" type="submit">Estamos Ready</button>

            </div>
           

            </form>
        </div>
        <div class = 'col-2'></div>
    </div>
</div>

<script>

    $(document).ready(function(){

        $("button.btn-add").on("click", function(e){
            e.preventDefault();
            parent_div = $(this).parent();
        select_div = parent_div.children('div.mb-3').eq(0);
        clone = select_div.clone();
        $(this).before(clone);
        })
    })

    function addSelect(button){


        parent_div = $(button).parent();
        select_div = parent_div.children('div.mb-3').eq(0);
        clone = select_div.clone();
        $(button).before(clone);

    }

    </script>


<?php include('../headerFiles/footer.php');?>