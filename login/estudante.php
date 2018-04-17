<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudante                              username, password, nome, morada, idade
 *
 * @author lcs19
 */
class estudante {

    var $username;
    var $password;
    var $nome;
    var $morada;
    var $idade;

    function __construct($username, $password) {
        $this->setUsername($username);
        $this->setpassword($password);
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

}

$estudate = array();
$estudate1 = new estudante("leo", "123");
$estudate2 = new estudante("leo1", "1234");
$estudante=array($estudate1,$estudate2);


?>