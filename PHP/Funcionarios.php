<?php

require '../PHP/Conexao.php';

class Funcionarios{

    public $conexao;

    public function conectar_Bd(){
      $conn = new Conexao;
      $this->conexao = $conn->conectar();
    }


    public function inserir_Bd(){
        conectar_Bd();

        $dados_Funcionarios = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados_Funcionarios);

        //$query_inserir = "INSERT INTO `funcionarios` (`nome`, `email`, `senha`, `niveis_acesso_id`) VALUES ('John Emerson Ferreira Regis Filho\', \'johnemerson67@gmail.com\', \'john123123\', \'1\');";
    }
}