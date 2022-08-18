<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Resultado</th>
        <th>Data da partida</th>          
        <th>Brancas</th>       
        <th>Pretas</th>       
          
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>      
        <td>
            <a href="/partidas/delete?id=<?= $item['id'] ?>">X</a>
        </td>
        
        <td><?= $item['id'] ?></td> 
        
        <td>
            <a href="/partidas/cadastrar?id=<?= $item['id'] ?>"><?= $item['resultado'] ?></a> 
        </td>
        
        <td><?= $item['data_partida'] ?></td>
        
        <td><?= $item['id_jogador1'] ?></td>
        
        <td><?= $item['id_jogador2'] ?></td>
        
        <td></td>

        
    </tr>
    <?php endforeach ?>

</table>