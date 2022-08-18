<?php

class JogadorModel
{

    public $id, $nome, $rating, $data_nascimento, $cidade;
    public $rows;

    public function save()
    {
        include 'DAO/JogadoresDAO.php';

        $dao = new JogadoresDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }


    public function getAllRows()
    {
        include 'DAO/JogadoresDAO.php';

        $dao = new JogadoresDAO();

        $this->rows = $dao->select();
    }


    public function getById(int $id)
    {
        include 'DAO/JogadoresDAO.php';

        $dao = new JogadoresDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        include 'DAO/JogadoresDAO.php';

        $dao = new JogadoresDAO();

        $dao->delete($id);
    }
}