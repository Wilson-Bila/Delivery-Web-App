<!DOCTYPE html>
<html>
<head>
    <title>Tabela Login</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
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
            <th>Senha</th>
            <th>     </th>
        </tr>
        <?php
        $nome = $_POST['nome'];
        $contacto = $_POST['contacto'];
        $senha = $_POST['password'];

        echo "<tr>";
        echo "<td>$nome</td>";
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
        echo "<td>|  $senha</td>";
        echo "<td>   </td>"."<br>";
        echo "<strong>"."Login efectuado com sucesso:"."</strong>";
		echo "<a href="."Home.php>"."Aceder a pagina principal</a>". "<br> <br>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>

