<?php

class Aposentados extends Conexao{

    public object $conn;
    public array $formData;

    public function inserirAposentado(): bool{

        $this->conn = $this->conectar();

        $query_inserirAposentado = "INSERT INTO `aposentados` (`cpf`, `nome`, `rg`, `ctps`, `email`, `celular`, `sexo`, `salario`, `data_nascimento`) 
                            VALUES (:cpf, :nome, :rg, :ctps, :email, :celular, :sexo, :salario, :data_nascimento)";
        $cadastrarAposentado = $this->conn->prepare($query_inserirAposentado);

        $cadastrarAposentado->bindParam(':cpf', $this->formData['cpf'], PDO::PARAM_STR);
        $cadastrarAposentado->bindParam(':nome', $this->formData['nome'], PDO::PARAM_STR);
        $cadastrarAposentado->bindParam(':rg', $this->formData['rg'], PDO::PARAM_INT);
        $cadastrarAposentado->bindParam(':ctps', $this->formData['ctps'], PDO::PARAM_STR);
        $cadastrarAposentado->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
        $cadastrarAposentado->bindParam(':celular', $this->formData['celular'], PDO::PARAM_STR);
        $cadastrarAposentado->bindParam(':sexo', $this->formData['sexo'], PDO::PARAM_INT);
        $cadastrarAposentado->bindParam(':salario', $this->formData['salario'], PDO::PARAM_INT);
        $cadastrarAposentado->bindParam(':data_nascimento', $this->formData['data_nascimento'], PDO::PARAM_STR);

        $cadastrarAposentado->execute();

        if ($cadastrarAposentado->rowCount()){
        return true;
        }else{
        return false;
        }
    }



    public function inserirEnderecoAposentado():bool{

        $this->conn = $this->conectar();

        $query_inserirEnderecoAposentado = "INSERT INTO `enderecos` (`logradouro`, `numero`, `bairro`, `cidade`, `estado`, `aposentado_cpf`)
                                         VALUES (:logradouro, :numero, :bairro, :cidade, :estado, :cpf)";
        $cadastrarEnderecoAposentado = $this->conn->prepare($query_inserirEnderecoAposentado);

        $cadastrarEnderecoAposentado->bindParam(':logradouro', $this->formData['logradouro'], PDO::PARAM_STR);
        $cadastrarEnderecoAposentado->bindParam(':numero', $this->formData['numero'], PDO::PARAM_STR);
        $cadastrarEnderecoAposentado->bindParam(':bairro', $this->formData['bairro'], PDO::PARAM_INT);
        $cadastrarEnderecoAposentado->bindParam(':cidade', $this->formData['cidade'], PDO::PARAM_STR);
        $cadastrarEnderecoAposentado->bindParam(':estado', $this->formData['estado'], PDO::PARAM_STR);
        $cadastrarEnderecoAposentado->bindParam(':cpf', $this->formData['cpf'], PDO::PARAM_STR);


        $cadastrarEnderecoAposentado->execute();

        if ($cadastrarEnderecoAposentado->rowCount()){
        return true;
        }else{
        return false;
        }
        
    }

    public function quantidadeAposentados():string{

        $this->conn = $this->conectar();
        
        $queryQuantidadeAposentados = "SELECT COUNT(*) FROM aposentados";
        $verificarQuantidadeAposentados = $this->conn->prepare($queryQuantidadeAposentados);
        $verificarQuantidadeAposentados->execute();

        // Fetch the result from the PDOStatement object
        $count = $verificarQuantidadeAposentados->fetchColumn();
        
        // Convert the result to a string
        $countAsString = strval($count);
        
        return $countAsString;
    }




}