<?php

class Institucional{
    
    private $idInstitucional;
    private $nome;
    private $cpf_cnpj;
    private $tipoPessoa;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $email;
    private $logo;
   
    public function getIdInstitucional(){
        return $this->idInstitucional;
    }

    public function setIdInstitucional($idInstitucional){
        $this->idInstitucional = $idInstitucional;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function setCpf_cnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
    }

    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa){
        $this->tipoPessoa = $tipoPessoa;
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

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
    }

}

 ?>