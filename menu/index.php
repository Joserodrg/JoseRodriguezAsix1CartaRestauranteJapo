<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tac+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Carta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body class="carta">

    <?php
    if (file_exists("./xml/carta.xml")) {
        // Recupera el contenido del fichero y lo reserva en una variable.
        $menu = simplexml_load_file('./xml/carta.xml');
    } else {
        exit('Error abriendo carta.xml');
    }
    ?>


    <div class="fila">
        <h1 class="textofinal">SushiSakai</h1>
    </div>
    <br>
    <br>
    <h1 class="titulo">Entrantes</h1>
    <hr>
    <div class="contenedor">
        <?php
        foreach ($menu->plato as $fila) {
            if ((string) $fila['tipo'] == 'entrante') {
                echo "<div class='columna'>";
                echo "<div class='name'>" . $fila->nombre . "</div>";

                foreach ($fila->ingrediente->item as $item) {
                    if ($item == 'vegetariano') {
                        echo ' <i class="fa-solid fa-carrot" style="color: #f59b00;"></i>';
                    }
                    if ($item == 'mariscos') {
                        echo '<i class="fa-solid fa-shrimp" style="color: #ff57b9;"></i>';
                    }
                    if ($item == 'carne') {
                        echo '<i class="fa-solid fa-drumstick-bite" style="color: #994805;"></i>';
                    }
                }

                echo '<br>';
                echo "<div class='descrip'>" .$fila->descripcion . "</div><br>";
                echo "<div class='calorias'>" .$fila->calorias . "</div><br>";
                echo "<div class='price'>" .$fila->precio. "</div><br>";
                echo '</br>';

                echo "</div>";
            }
        }
        ?>


    </div>


    </div>
    <hr>
    <h1 class="titulo">Sushi</h1>
    <hr>
    <div class="contenedor">
        <?php
        foreach ($menu->plato as $fila) {
            if ($fila['tipo'] == 'sushi') {
                echo "<div class='columna'>";
                echo "<div class='name'>" . $fila->nombre . "</div>";

                foreach ($fila->ingrediente->item as $item) {
                    if ($item == 'pescado') {
                        echo '<i class="fa-solid fa-fish-fins" style="color: #74C0FC;"></i>';
                    }
                    if ($item == 'mariscos') {
                        echo '<i class="fa-solid fa-shrimp" style="color: #ff57b9;"></i>';
                    }
                    if ($item == 'carne') {
                        echo '<i class="fa-solid fa-drumstick-bite" style="color: #994805;"></i>';
                    }

                    if ($item == 'pescadoymariscos') {
                        echo '<i class="fa-solid fa-fish-fins" style="color: #74C0FC;"></i>';
                        echo '<i class="fa-solid fa-shrimp" style="color: #ff57b9;"></i>';
                    }
                }

                echo '<br>';
                echo "<div class='descrip'>" .$fila->descripcion . "</div><br>";
                echo "<div class='calorias'>" .$fila->calorias . "</div><br>";
                echo "<div class='price'>" .$fila->precio." </div><br>";
                echo '</br>';

                echo "</div>";
            }
        }
        ?>


    </div>
    <hr>
    <h1 class="titulo">Platos</h1>
    <hr>
    <div class="contenedor">
        <?php
        foreach ($menu->plato as $fila) {
            if ($fila['tipo'] == 'plato') {
                echo "<div class='columna'>";
                echo "<div class='name'>" . $fila->nombre . "</div>";
                foreach ($fila->ingrediente->item as $item) {
                    if ($item == 'carne') {
                        echo '<i class="fa-solid fa-drumstick-bite" style="color: #994805;"></i>';
                    }
                    if ($item == 'mariscos') {
                        echo '<i class="fa-solid fa-shrimp" style="color: #ff57b9;"></i>';
                    }
                    if ($item == 'mariscoOvegetal') {
                        echo '<i class="fa-solid fa-shrimp" style="color: #ff57b9;"></i> ';
                        echo 'or ';
                        echo '<i class="fa-solid fa-leaf" style="color: #07df20;"></i>';
                    }
                }
                echo '<br>';
                echo "<div class='descrip'>" .$fila->descripcion . "</div><br>";
                echo "<div class='calorias'>" .$fila->calorias . "</div><br>";
                echo "<div class='price'>" .$fila->precio." </div><br>";
                echo '</br>';
                echo "</div>";
            }
        }
        ?>
    </div>
    <hr>
    <h1 class="titulo">Postres</h1>
<hr>
<div class="contenedor">
    <?php
    foreach ($menu->plato as $fila) {
        if ($fila['tipo'] == 'postre') {
            echo "<div class='columna'>";
            echo "<div class='name'>" . $fila->nombre . "</div><br>";
            foreach ($fila->ingrediente->item as $item) {
                if ($item == 'gluten') {
                    echo '<strong>Con Gluten</strong> <i class="fa-solid fa-wheat-awn-circle-exclamation" style="color: #d60000;"></i><br>';
                }
            echo  "<div class='descrip'>" .$fila->descripcion . "</div><br>";
            echo "<div class='calorias'>" .$fila->calorias . "</div><br>";
            echo "<div class='price'>" .$fila->precio . "</div><br>";
            echo "</div>";
        }
    }
}
    ?>
</div>
<hr>
<h1 class="titulo">Bebidas Japonesas</h1>
<hr>
<div class="contenedor">
    <?php
    foreach ($menu->plato as $fila) {
        if ($fila['tipo'] == 'bebida-japonesa') {
            echo "<div class='columna'>";
            echo "<div class='name'>" . $fila->nombre . "</div><br>";
            foreach ($fila->ingrediente->item as $item) {
                if ($item == '+18') {
                    echo '🔞<br>';
                }
            echo "<div class='descrip'>" .$fila->descripcion . "</div><br>";
            echo "<div class='price'>" .$fila->precio . "</div><br>";
            echo "</div>";
        }
    }
}
    ?>
</div>

    <hr>
    <h1 class="titulo">Bebidas</h1>
    <hr>
    <div class="contenedor">
    <?php
foreach ($menu->plato as $fila) {
    if ($fila['tipo'] == 'bebida') {
        echo "<div class='columna'>";
        echo "<div class='name'>" . $fila->nombre . "</div><br>";
        
        foreach ($fila->ingrediente->item as $item) {
            if ($item == '+18') {
                echo '🔞<br>';
            }
        }
        
        echo "<div class='descrip'>" .$fila->descripcion . "</div><br>";
        echo "<div class='price'>" . $fila->precio . "</div><br>";
        echo "</div>"; 
    }
}
?>

    </div>


    <script src="https://kit.fontawesome.com/2f6c7b754b.js" crossorigin="anonymous"></script>
</body>

</html>



</body>

</html> 