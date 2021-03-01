<h1>Lista de Clintes</h1>
<table class="table table-striped">
    <tr>
        <th>Id Clients</th>
        <th>Name</th>
        <th>Email</th>
        
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
                <a href="<?=base_url("clientslist/{$client['idClient']}")?>" > Ver detalhes</a>
            </td>
            
        <tr>
    <?php
    }
    ?>
</table>