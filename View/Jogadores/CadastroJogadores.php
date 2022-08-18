<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogadores</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/jogadores/save" method="post">
        <fieldset>
            <legend>Cadastro de Jogadores</legend>

            <input name="id" 
                   id="id" 
                   type="hidden" 
                   value="<?= $model->id ?>" />
            
           
            <label for="nome">Nome:</label>
            <input name="nome" 
                   id="nome" 
                   type="text" 
                   value="<?= $model->nome ?>" />
             
            
            <label for="rating">Rating:</label>
            <input name="rating" 
                   id="rating" 
                   type="number" 
                   value="<?= $model->rating ?>"/>

            
            <label for="data_nascimento">Data Nascimento:</label>
            <input name="data_nascimento"
                   id="data_nascimento" 
                   type="date" 
                   value="<?= $model->data_nascimento ?>" />

            
            <label for="cidade">Cidade:</label>
            <input name="cidade" 
                   id="cidade" 
                   type="text"
                   value="<?= $model->cidade ?>" />



            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>