<?php

class JogadoresController 
{

    public static function index() 
    {
        include 'Model/JogadorModel.php';

        $model = new JogadorModel();
        $model->getAllRows();

        include 'View/Jogadores/ListaJogadores.php';
    }

    public static function form()
    {
        include 'Model/JogadorModel.php';

        $model = new JogadorModel();
        
        if(isset($_GET['id']))
            $model = $model->getById($_GET['id']);

        include 'View/Jogadores/CadastroJogadores.php';
    }

    public static function save() {

        include 'Model/JogadorModel.php';

        $pessoa = new JogadorModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rating = $_POST['rating'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->cidade = $_POST['cidade'];

        $pessoa->save();

        header("Location: /jogadores");
    }

    public static function delete()
    {
        include 'Model/JogadorModel.php';

        $model = new JogadorModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /jogadores");

    }
}
