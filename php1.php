<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Planetas do Sistema Solar</title>
    <style>
        .info {
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="info">
        <?php
        echo "Thiago Grasso<br>";
        echo date("d/m/Y");
        ?>
    </div>
    <table>
        <tr>
            <th>Número</th>
            <th>Planeta</th>
        </tr>
        <?php
        $planetas = [
            "Mercúrio",
            "Vênus",
            "Terra",
            "Marte",
            "Júpiter",
            "Saturno",
            "Urano",
            "Netuno"
        ];

        foreach ($planetas as $numero => $planeta) {
            echo "<tr>";
            echo "<td>" . ($numero + 1) . "</td>";
            echo "<td>" . $planeta . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
