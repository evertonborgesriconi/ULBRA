<h1>Detalhes do Cliente</h1>


<table class="table table-striped">
    <tr>
        <th>Id Clientes</th>
        <td>
            <?=$client['idClient']?>
        </td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>
            <?=$client['name']?>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?=$client['email']?></td>
    </tr>
    <tr>
        <th>Telefone</th>
        <td><?=$client['phone']?></td>
    </tr>
    <tr>
        <th>Endereço</th>
        <td><?=$client['address']?></td>
    </tr>
</table>