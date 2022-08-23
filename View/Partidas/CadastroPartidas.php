<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Partidas</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/partidas/save" method="post">
        <fieldset>
            <legend>Cadastro de Partidas</legend>

            <input name="id" 
                   id="id" 
                   type="hidden" 
                   value="<?= $model->id ?>" />

           
            
            <label for="data_partida">Data da Partida:</label>
            <input name="data_partida"
                   id="data_partida" 
                   type="date" 
                   value="<?= $model->data_partida ?>" /> <br>


             <label for="resultado">Brancas:</label>
             <select name="id_jogador1">
                <?php foreach($model->arr_jogadores as $jogador ):?>
                    <option value="<?= $jogador['id']?>"><?= $jogador['nome']?></option>
                <?php endforeach?>
             </select>
             <label for="">x</label>
             <label for="resultado">Pretas:</label>
             <select name="id_jogador2">
                <?php foreach($model->arr_jogadores as $jogador ):?>
                    <option value="<?= $jogador['id']?>"><?= $jogador['nome']?></option>
                <?php endforeach?>
             </select>

             
             
             <br> <label for="resultado">Resultado:</label>
            <input name="resultado" 
                   id="resultado" 
                   type="text" 
                   value="<?= $model->resultado ?>" /> <br>
            
                   
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>