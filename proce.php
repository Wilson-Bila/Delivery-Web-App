<!DOCTYPE html>
<html>
<head>
    <title>Tabela Encomenda</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
            <th>Morada principal</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Morada Secundaria</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Localidade</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Codigo postal</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Contacto</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Email</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>Produto</th>
            <th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
			<th>     </th>
            <th>Categoria</th>
            <th>     </th>
        </tr>
        <?php
        $nome = $_POST['nome'];
        $morada1 = $_POST['morada1'];
		$morada2 = $_POST['morada2'];
		$localidade = $_POST['localidade'];
		$codigopostal = $_POST['codigoPostal'];
		$contacto = $_POST['contacto'];
		$email = $_POST['email'];
		$produto = $_POST['produto'];
        $categoria = $_POST['categoria'];

        echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
        echo "<td>|  $morada1</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	   echo "<td>|  $morada2</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	   echo "<td>|  $localidade</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	   echo "<td>|  $codigopostal</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	   echo "<td>|  $contacto</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	    echo "<td>|  $email</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
	    echo "<td>|  $produto</td>";
        echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
		echo "<td>   </td>";
        echo "<td>|  $categoria</td>";
        echo "<td>   </td>"."<br>";
        echo "<strong>"."Encomenda efectuada com sucesso:"."</strong>";
		echo "<a href="."Shopping.php>"."Regressar</a>". "<br> <br>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>