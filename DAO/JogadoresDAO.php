<?php

class JogadoresDAO
{

    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_jogos";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }



    function insert(JogadorModel $model) 
    {
  
        $sql = "INSERT INTO jogador 
                (nome, rating, data_nascimento, cidade) 
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rating);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->cidade);

        $stmt->execute();      
    }



    public function select()
    {
        $sql = "SELECT * FROM jogador ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM jogador WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function update(JogadorModel $model)
    {
        $sql = "UPDATE jogador SET nome=?, rating=?, data_nascimento=?, cidade=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rating);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->cidade);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM jogador WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}