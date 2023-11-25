
<?php
include 'db_config.php';

// Consulta SQL para obter dados da folha de salários
$sql = "SELECT nome, cargo, presenca, salario FROM funcionarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Folha de Salários</h2>";
    echo "<table>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Presença</th>
                <th>Salário</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["nome"]."</td>
                <td>".$row["cargo"]."</td>
                <td>".($row["presenca"] ? 'Presente' : 'Ausente')."</td>
                <td>R$ ".$row["salario"]."</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados";
}

// Fechar conexão com o banco de dados
$conn->close();
php?>
