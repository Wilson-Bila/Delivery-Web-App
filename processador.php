<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Dados</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>     </th>
            <th>E-mail</th>
            <th>     </th>
            <th>Contacto</th>
            <th>     </th>
            <th>Senha</th>
            <th>     </th>
        </tr>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $contacto = $_POST['contacto'];
        $senha = $_POST['password'];

        echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td>   </td>";
        echo "<td>|  $email</td>";
        echo "<td>   </td>";
        echo "<td>|  $contacto</td>";
        echo "<td>   </td>";
        echo "<td>|  $senha</td>";
        echo "<td>   </td>"."<br>";
        echo "<strong>"."Cadastro efectuado com sucesso:"."</strong>";
		echo "<a href="."Login.php>"."Fazer Login</a>". "<br> <br>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
