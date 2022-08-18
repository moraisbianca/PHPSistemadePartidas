<?php

class PartidasModel
{

    public $id, $data_partida, $id_jogador1, $id_jogador2, $resultado;
    public $arr_jogadores = array();
    public $rows;

    public function save()
    {
        include 'DAO/PartidasDAO.php';

        $dao = new PartidasDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }


    public function getAllRows()
    {
        include 'DAO/PartidasDAO.php';

        $dao = new PartidasDAO();

        $this->rows = $dao->select();
    }

    public function getAllJogadores()
    {
        include 'DAO/JogadoresDAO.php';

        $dao = new JogadoresDAO();

        $this->arr_jogadores = $dao->select();
    }


    public function getById(int $id)
    {
        include 'DAO/PartidasDAO.php';

        $dao = new PartidasDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        include 'DAO/PartidasDAO.php';

        $dao = new PartidasDAO();

        $dao->delete($id);
    }
}