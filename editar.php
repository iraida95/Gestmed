
<html>
<body>

<form action="editar.php" method="get">
    <label>Nombre:</label><input type="text" name="nombre" ><br>
    <label>Sevicio:</label> <input type="text" name="servicio"  required><br>
    <label>Ncolegiado:</label> <input type="text" name="ncolegiado" required><br>
    <label>Contraseña: </label><input type="password" name="contraseña" required><br>
    <br>
<button><input   value="Actualizar" type="submit" onclick="="myFunction()"></button>
</form>

</body>
</html>

<?php
include_once "dbconfig.php";
$link = mysqli_connect("localhost", "root", "root", "GESTMED");
$var = mysqli_query($link,'SELECT * from medico');
$row = mysqli_fetch_array($var);
echo"<table>";
echo"<tr>
        <th> Nombre </th>
        <th> Servicio </th>
        <th> Ncolegiado </th>
        <th> Foto    </th>
        <th> Contraseña    </th>
    </tr>";
foreach($var as $variables){
    echo"<tr>";
    echo"<td> {$variables['Nombre']}</td>";
    echo"<td> {$variables['Servicio']}</td>";
    echo"<td> {$variables['NColegiado']}</td>";

    $foto='<img src="data:image/jpeg;base64,'.base64_encode( $variables['Foto']).'"/>';

    echo"<td> {$foto}</td>";
    $contraseña=md5($variables['Password']);
    echo"<td> {$contraseña}</td>";
}
echo"</tr>";
echo"</table>";

    $servicio=$_GET['servicio'];
    $ncolegiado=$_GET['ncolegiado'];
    $contraseña=$_GET['contraseña'];
    $nombre=$_GET['nombre'];
    $var = mysqli_query($link, "UPDATE medico SET Servicio = '$servicio', NColegiado = '$ncolegiado', Password = '$contraseña' WHERE Nombre = '{$variables['Nombre']}'");
    $row = mysqli_fetch_row($var);
    echo $row[0];


?>
<script>
    function myFunction() {
        alert("Campos actualizados");
    }
</script>

