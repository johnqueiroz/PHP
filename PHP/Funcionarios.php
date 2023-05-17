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

  public function verificarConta(): array
    {
        $this->conn = $this->conectar();
        $query_verificar = "SELECT email, senha FROM funcionarios WHERE email";
        $verificar_entrada = $this->conn->prepare($query_verificar);
        $verificar_entrada->execute();
        $retorno = $verificar_entrada->fetchAll();

        return $retorno;

        /*if(password_verify(:senha, $retorno['senha'])){
          $verificar_entrada->bindParam(':senha', $this->formData['senha'], PDO::PARAM_STR);
          return true;
        }else{
          return false;
        }*/
    }
}