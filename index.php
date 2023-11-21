<html>
    <head>
        <title>Evaluable 1 Docker</title>
        
    </head>
    <body>
        
            <?php
                echo "<h1>Actividad Evaluable 1 Docker</h1>";

                $conn = mysqli_connect('database', 'root', 'root', "examen");
                $query = 'SELECT * FROM alumno';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo 'ID NOMBRE EDAD ESTILO';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        
    </body>
</html>