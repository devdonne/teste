<?php
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
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  if (empty($nome)){
    echo('O nome não pode ser vazio!');
  }else if (strlen($nome) < 3){
    echo('Não pode menos de 3 letras!');
  }else if(strlen($nome) > 40){
    echo('Não pode maior que 40 caracteres');
  }
  if (!is_numeric($idade)){
    echo 'Infome um número pra idade';
  }
  else{
    $pessoa = new Pessoa($nome, $idade);  
    var_dump($pessoa->getNome());
    var_dump($pessoa->getIdade());
  }
