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
        <tr>
    <?php
    }
    ?>
</table>