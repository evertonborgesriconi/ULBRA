<h1>Lista de Clintes</h1>
<table class="table table-striped">
    <tr>
        <th>Id Clients</th>
        <th>Name</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>endereço</th>
    </tr>
    <?php
    foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
                <?=$client["idClient"]?>
            </td>
            <td>
                <?=$client["name"]?>
            </td>
            <td>
                <?=$client["phone"]?>
            </td>
            <td>
                <?=$client["email"]?>
            </td>
            <td>
                <?=$client["address"]?>
            </td>
            <td>
            <a class="button is-warning" href="?controller=clients&action=updateClient&id=<?= $client['idClient'] ?>">
                Editar
            </a>
            </td>
            <td>
            <a class="button is-danger" href="?controller=clients&action=deleteClient&id=<?= $client['idClient'] ?>">
                Exlcuir
            </a>
            </td>
        <tr>
    <?php
    }
    ?>
</table>