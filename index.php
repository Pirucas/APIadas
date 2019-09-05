<?php
	require('connection.php');
	$result = mysqli_query($conectionanimation,"SELECT * FROM ahahQuePiada WHERE activo=1 ORDER BY RAND() limit 1");
	$linha = mysqli_fetch_assoc($result);
	$piadas=array(
		"id" => $linha['ID'],
		"inicio_piada" => $linha['piada_inicio'],
		"fim_piada" => $linha['piada_fim'],
		"categoria" => $linha['categoria'],
		"tipo" => $linha['tipo']
	);
    http_response_code(200);
    echo json_encode($piadas, JSON_UNESCAPED_UNICODE);
?>