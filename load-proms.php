<?php

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "SELECT * FROM promocao JOIN oferta ON oferta.idOf = promocao.oferta";
	$result = mysqli_query($link,$sql);

	echo'<tr>
		<th>Estabelecimento</th>
		<th>Oferta</th>
		<th>Desconto</th>
		<th>&#160;</th>
	</tr>';

	while($aux = mysqli_fetch_array($result)){
		echo"<tr>";
			echo"<td>".$aux["estabelecimento"]."</td>";
			echo"<td>".$aux["descricao"]."/".$aux["tipo"]."</td>";
			echo"<td>".$aux["desconto"]."%</td>";
			echo"<td><button onclick=\"genCupom(".$aux["idProm"].")\">Obter cupom</button></td>";
		echo"</tr>";
	}
?>