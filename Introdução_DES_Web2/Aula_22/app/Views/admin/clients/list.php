<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>Id Clients</th>
        <th>Name</th>
        <th>Email</th>
        <th>Informações</th>
        <th></th>
        <th></th>
        
    </tr>
    <?php
    foreach($clients as $client){
    ?>
        <tr>
            <td>
                <?=$client["idClient"]?>
            </td>
            <td>
                <?=$client["name"]?>
            </td>
            <td>
                <?=$client["email"]?>
            </td>
            

            <td>
                <a class="btn btn-secondary" href="<?=base_url("admin/clients/{$client['idClient']}")?>" > Ver detalhes</a>
            </td>
            <td>
                <a class="btn btn-info"  href="<?=base_url("admin/clients/update/{$client['idClient']}")?>" > Update</a>
            </td>
            <td>
                <a class="btn btn-danger" href="<?=base_url("admin/clients/delete/{$client['idClient']}")?>" > Delete</a>
            </td>
            
        <tr>
    <?php
    }
    ?>
</table>