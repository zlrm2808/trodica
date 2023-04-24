<?php
    // Incluimos el archivo de conexión
    require_once "conexion.php";

    // Hacemos la consulta SQL
    $sql = "SELECT  
                    MOV_CODIGO AS 'CODIGO DE PRODUCTO', 
                    INV_DESCRI AS 'DESCRIPCION', 
                    MOV_CODALM AS 'CODIGO DE ALMACEN', 
                    ALM_DESCRI AS 'ALMACEN', 
                    SUM(MOV_CANTID*MOV_FISICO) AS 'CANTIDAD' 
            FROM dpmovinv 
            INNER JOIN dpinv ON INV_CODIGO = MOV_CODIGO 
            INNER JOIN dpalmacen ON ALM_CODIGO = MOV_CODALM 
            WHERE MOV_FECHA <= CURDATE() 
            GROUP BY MOV_CODIGO,MOV_CODALM";
    $resultado = mysqli_query($conn, $sql);

    // Mostramos los datos en la tabla
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr style='height: 20px;'>";
        echo "<td>" . $fila['CODIGO DE PRODUCTO'] . "</td>";
        echo "<td>" . $fila['DESCRIPCION'] . "</td>";
        echo "<td>" . $fila['CODIGO DE ALMACEN'] . "</td>";
        echo "<td>" . $fila['ALMACEN'] . "</td>";
        echo "<td>" . $fila['CANTIDAD'] . "</td>";
        echo "</tr>";
    }

    // Cerramos la conexión a la base de datos
    mysqli_close($conn);
?>