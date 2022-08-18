<table>
    <tr>
        <th></th>
        <th></th>
        <th>Id</th>
        <th></th>
        <th>Nome</th>
        <th></th>
        <th>Rating</th>
        <th></th>
        <th>Data de Nasc.</th>
        <th></th>
        <th>Cidade</th>
        <th></th>


    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>      
        <td>
            <a href="/jogadores/delete?id=<?= $item['id'] ?>">X</a>
        </td>
        <th></th>
        <td><?= $item['id'] ?></td> 
        <th></th>
        <td>
            <a href="/jogadores/cadastrar?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a> 
        </td>
        <th></th>
        <td><?= $item['rating'] ?></td>
        <th></th>
        <td><?= $item['data_nascimento'] ?></td>
        <th></th>
        <td><?= $item['cidade'] ?></td>

        
    </tr>
    <?php endforeach ?>

</table>