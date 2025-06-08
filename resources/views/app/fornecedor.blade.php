<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        caption {
            caption-side: bottom;
            padding: 10px;
            font-weight: bold;
        }

        thead,
        tfoot {
            background-color: rgb(228 240 245);
        }

        th,
        td {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
        }

        td:last-of-type {
            text-align: center;
        }

        tbody>tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }

        tfoot th {
            text-align: right;
        }

        tfoot td {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table>
        <caption>
            Lista de fornecedores
        </caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <th scope="row">{{ $fornecedor['id'] }}</th>
                    <td>{{ $fornecedor['nome'] }}</td>
                    <td>{{ isset($fornecedor['cpf']) == true ? $fornecedor['cpf'] : $fornecedor['cnpj'] }}</td>
                    <td>{{ $fornecedor['status'] == 'true' ? 'Ativo' : 'Inativo' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>