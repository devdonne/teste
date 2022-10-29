<?php

use function PHPSTORM_META\type;

  class Pessoa{
    public String $nome;
    public String $idade;

    function __construct(String $nome, String $idade){
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getIdade(){
      return $this->idade;
    }
    public function setNome( $nome){
      $this->nome = $nome;
    }

    public function setIdade( $idade){
      $this->idade = $idade;
    }
  }
  function mensagem_de_erro(String $mensagem){
    $_SESSION['mensagem-de-erro'] = $mensagem;
    header('location: index.php');
  }
  session_start();
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  if (empty($nome)){
    mensagem_de_erro('O nome não pode ser vazio!');
  }else if (strlen($nome) < 3){
    mensagem_de_erro('Não pode menos de 3 letras!');
  }else if(strlen($nome) > 40){
     mensagem_de_erro('Não pode maior que 40 caracteres');
  }
  if (!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Infome um número pra idade';
    header('location: index.php');
  }
  else{
    $pessoa = new Pessoa($nome, $idade);  
    var_dump($pessoa->getNome());
    var_dump($pessoa->getIdade());
  }
