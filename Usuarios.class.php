<?php

class Usuarios{
    
    private $idUsuario;
    private $email;
    private $senha;
    private $IdNivelUsuario;
    private $nome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $foto;
    private $ativo; 

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getIdNivelUsuario(){
        return $this->IdNivelUsuario;
    }

    public function setIdNivelUsuario($IdNivelUsuario){
        $this->IdNivelUsuario = $IdNivelUsuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

}

?>