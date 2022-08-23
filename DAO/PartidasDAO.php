<?php

class PartidasDAO
{

    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_jogos";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }



    function insert(PartidasModel $model) 
    {
  
        $sql = "INSERT INTO partida 
                (data_partida, id_jogador1, id_jogador2, resultado) 
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->data_partida);
        $stmt->bindValue(2, $model->id_jogador1);
        $stmt->bindValue(3, $model->id_jogador2);
        $stmt->bindValue(4, $model->resultado);

        $stmt->execute();      
    }



    public function select()
    {
        $sql = "SELECT * FROM partida ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $partidas = $stmt->fetchAll(PDO::FETCH_CLASS);

        for($i=0; $i<count($partidas); $i++)
        {
            include 'JogadoresDAO.php';

            $jogador = new JogadoresDAO();

            $partidas[$i]->jogador1 = $jogador->selectById($partidas[$i]->id_jogador1);
            $partidas[$i]->jogador2 = $jogador->selectById($partidas[$i]->id_jogador2);
        }


        return $partidas;
    }



    public function selectById(int $id)
    {
        $sql = "SELECT * FROM partida WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function update(PartidasModel $model)
    {
        $sql = "UPDATE partida SET data_partida=?, id_jogador1=?, id_jogador2=?, resultado=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->data_partida);
        $stmt->bindValue(2, $model->id_jogador1);
        $stmt->bindValue(3, $model->id_jogador2);
        $stmt->bindValue(4, $model->resultado);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM partida WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}