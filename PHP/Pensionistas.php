<?php

class Pensionistas extends Conexao{

    public object $conn;
    public array $formData;

    public function inserirPensionista(): bool{

        $this->conn = $this->conectar();

        $query_inserirPensionista = "INSERT INTO `pensionistas` (`cpf`, `nome`, `rg`, `data-casamento`, `data-obito`, `data-nascimento`, `email`, `celular` , `sexo`, `aposentados_cpf`, `salario`) 
                            VALUES (:cpf, :nome, :rg, :data-casamento, :data-obito, :data-nascimento, :email, :celular , :sexo, :aposentados_cpf, :salario)";
        $cadastrarPensionista = $this->conn->prepare($query_inserirPensionista);

        $cadastrarPensionista->bindParam(':cpf', $this->formData['cpf'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':nome', $this->formData['nome'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':rg', $this->formData['rg'], PDO::PARAM_INT);
        $cadastrarPensionista->bindParam(':data-casamento', $this->formData['data-casamento'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':data-obito', $this->formData['data-obito'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':data-nascimento', $this->formData['data-nascimento'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
        $cadastrarPensionista->bindParam(':celular', $this->formData['celular'], PDO::PARAM_INT);
        $cadastrarPensionista->bindParam(':sexo', $this->formData['sexo'], PDO::PARAM_INT);
        $cadastrarPensionista->bindParam(':aposentados_cpf', $this->formData['aposentados_cpf'], PDO::PARAM_INT);
        $cadastrarPensionista->bindParam(':salario', $this->formData['salario'], PDO::PARAM_INT);

        $cadastrarPensionista->execute();

        if ($cadastrarPensionista->rowCount()){
        return true;
        }else{
        return false;
        }
    }



    public function inserirEnderecoPensionista():bool{

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

    public function quantidadePensionistas():string{

        $this->conn = $this->conectar();
        
        $queryQuantidadePensionistas = "SELECT COUNT(*) FROM pensionistas";
        $verificarQuantidadePensionistas = $this->conn->prepare($queryQuantidadePensionistas);
        $verificarQuantidadePensionistas->execute();

        // Fetch the result from the PDOStatement object
        $count = $verificarQuantidadePensionistas->fetchColumn();
        
        // Convert the result to a stringaaaaaaa
        $countAsString = strval($count);
        
        return $countAsString;
    }




}