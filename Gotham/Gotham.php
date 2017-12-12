<!DOCTYPE html>

<html>

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gotham</title>
        <link rel="stylesheet" href="../style/GothamStyle.css">
    </head>
    <body>

        <p>
          Gotham es una serie estrenada en el año 2017
        </p>

        <p>
            <em>Sinopsis</em>
            Gotham sigue el ascenso de James Gordon a través de una ciudad peligrosamente corrupta balanceándose al borde del mal. Creciendo en los suburbios que rodean Gotham, Gordon idealizó la ciudad como una glamurosa y emocionante metrópolis donde su difunto padre sirvió como un exitoso fiscal de distrito. Gordon llega al Departamento de Policía de Gotham. Valiente, honesto y listo para probarse a sí mismo, el recién nombrado detective se asocia con Harvey Bullock, mientras se hacen cargo del caso de más alto nivel en la historia de Gotham: el asesinato de los millonarios locales Thomas y Martha Wayne. En la escena del crimen, Gordon conoce al único superviviente: el hijo de 12 años de los Wayne, Bruce. Movido por la profunda pérdida del chico, Gordon promete atrapar al asesino.
            A lo largo de la historia, Gordon forma una extraña amistad con el joven heredero de la fortuna Wayne, que está siendo criado por su imperturbable mayordomo Alfred. Es una amistad que durará toda su vida, jugando un papel crucial en ayudar al muchacho a convertirse más adelante en el legendario vigilante nocturno que está destinado a ser: Batman.
        </p>

        <h2>Gotham</h2>

        <a>
            <img src="gotham.jpg" WIDTH=200 HEIGHT=300/>
        </a>


            <table width="620px">
	<tr>
		<td width="20px"></td>
		<td width="200px">Titulo</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
<?php
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id'>Leer</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("d-m-y,$fecha")."</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>
<a href="formulario.php"> nuevo tema </a>
    </body>

    </html>
