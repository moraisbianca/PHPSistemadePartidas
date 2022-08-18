<?php

class PartidasController{
    
    public static function index() 
    {
        include 'Model/PartidasModel.php';

        $model = new PartidasModel();
        $model->getAllRows();
        

        include 'View/Partidas/ListaPartidas.php';
    }

    public static function form()
    {
        include 'Model/PartidasModel.php';

        $model = new PartidasModel();
        $model->getAllJogadores();    
   
        
        
        if(isset($_GET['id'])){
            $model = $model->getById($_GET['id']);   
              
        }
            
      
           

        include 'View/Partidas/CadastroPartidas.php';
    }

    public static function save() {

        include 'Model/PartidasModel.php';

        $pessoa = new PartidasModel();
        $pessoa->id = $_POST['id'];
        $pessoa->data_partida = $_POST['data_partida'];
        $pessoa->id_jogador1 = $_POST['id_jogador1'];
        $pessoa->id_jogador2 = $_POST['id_jogador2'];
        $pessoa->resultado = $_POST['resultado'];

        $pessoa->save();

        header("Location: /partidas");
    }

    public static function delete()
    {
        include 'Model/PartidasModel.php';

        $model = new PartidasModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /partidas"); 
    }

}