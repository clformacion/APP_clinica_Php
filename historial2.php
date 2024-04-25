<?php
$conexion =mysqli_connect("localhost","root","","clinica")or die("problema de conexion");

mysqli_query($conexion,"INSERT INTO historial(codigo,paciente, nombre_medico, fecha_revision,telefono_paciente,telefono_medico,medicamento,docificacion,freq1,medico_medicamento, fecha_medicamento_inicio,fecha_medicamento_fin,
proposito,medicamento2,procedimiento,freq2,medico_quirurgico,fecha_quirurgico,hospital,observacion,vacuna_tetanos,docificacion_tetanos,vacuna_fiebre_amarilla,docificacion_fiebre_amarilla) VALUES ('$_REQUEST[codigo]','$_REQUEST[paciente]','$_REQUEST[nombre_medico]','$_REQUEST[fecha_revision]',
'$_REQUEST[telefono_paciente]','$_REQUEST[telefono_medico]','$_REQUEST[medicamento]','$_REQUEST[docificacion]','$_REQUEST[freq1]','$_REQUEST[medico_medicamento]','$_REQUEST[fecha_medicamento_inicio]','$_REQUEST[fecha_medicamento_fin]','$_REQUEST[proposito]','$_REQUEST[medicamento2]','$_REQUEST[procedimiento]','$_REQUEST[freq2]', '$_REQUEST[medico_quirurgico]','$_REQUEST[fecha_quirurgico]','$_REQUEST[hospital]','$_REQUEST[observacion]', '$_REQUEST[vacuna_tetanos]', '$_REQUEST[docificacion_tetanos]','$_REQUEST[vacuna_fiebre_amarilla]',$_REQUEST[docificacion_fiebre_amarilla])")or die("problemacon la seleccion ". mysqli_error($conexion));

mysqli_close($conexion);

echo "los datos del paciente fueron guardado correctamente";

?>