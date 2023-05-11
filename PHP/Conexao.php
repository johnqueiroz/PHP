<?php

class Conexao{

    public $host = 'localhost';
    public $user = 'root';
    public $password = "";
    public $dbname = 'impresb';
    public $port = 3306;
    public $connect = null;



    public function conectar(){

        try{
            // Conexao com a porta
            new PDO("mysql:host" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $this->connect;

        }catch(Execption $erro){
            echo "Conexão não relizada com sucesso" . $erro;
            echo "Tente novamente mais tarde";
            return false;
        }

    }

}