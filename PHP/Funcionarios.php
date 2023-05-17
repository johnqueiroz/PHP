<?php

class Funcionarios extends Conexao{

  public object $conn;
  public array $formData;

  public function inserir(): bool{

    $this->conn = $this->conectar();

    $query_inserir = "INSERT INTO `funcionarios` (nome, email, senha) VALUES (:nome, :email, :senha)";
    $cadastrarFuncionario = $this->conn->prepare($query_inserir);

    $cadastrarFuncionario->bindParam(':nome', $this->formData['nome'], PDO::PARAM_STR);
    $cadastrarFuncionario->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);

    $senha_cript = password_hash( $this->formData['senha'], PASSWORD_DEFAULT);
    $cadastrarFuncionario->bindParam(':senha', $senha_cript);

    $cadastrarFuncionario->execute();

    if ($cadastrarFuncionario->rowCount()){
      return true;
    }else{
      return false;
    }
  }

  public function verificarConta(): bool
    {
        $this->conn = $this->conectar();
        $query_verificar = "SELECT email, senha FROM funcionarios WHERE email =:email  LIMIT 1";
        $verificar_entrada = $this->conn->prepare($query_verificar);

        $verificar_entrada->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
        $verificar_entrada->execute();
        $retorno = $verificar_entrada->fetch();

        if(password_verify($this->formData['senha'], $retorno['senha'])){
          return true;
        }else{
          return false;
        }
    }
}