<?php

class Estoque{
    
    private $idEstoque;
    private $idProduto;
    private $dtEntrada;
    private $quantidade;
    private $dtFabricacao;
    private $dtVencimento;
    private $nfCompra;
    private $precoCompra;
    private $icmsCompra;
    private $precoVenda;
    private $qtdVendida;
    private $qtdOcorrencia;
    private $ocorrencia;
   

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }

    public function getDtEntrada(){
        return $this->dtEntrada;
    }

    public function setDtEntrada($dtEntrada){
        $this->dtEntrada = $dtEntrada;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getDtFabricacao(){
        return $this->dtFabricacao;
    }

    public function setDtFabricacao($dtFabricacao){
        $this->dtFabricacao = $dtFabricacao;
    }

    public function getDtVencimento(){
        return $this->dtVencimento;
    }

    public function setDtVencimento($dtVencimento){
        $this->dtVencimento = $dtVencimento;
    }

    public function getNfCompra(){
        return $this->nfCompra;
    }

    public function setNfCompra($nfCompra){
        $this->nfCompra = $nfCompra;
    }

    public function getPrecoCompra(){
        return $this->precoCompra;
    }

    public function setPrecoCompra($precoCompra){
        $this->precoCompra = $precoCompra;
    }

    public function getIcmsCompra(){
        return $this->icmsCompra;
    }

    public function setIcmsCompra($icmsCompra){
        $this->icmsCompra = $icmsCompra;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda){
        $this->precoVenda = $precoVenda;
    }

    public function getQtdVendida(){
        return $this->qtdVendida;
    }

    public function setQtdVendida($qtdVendida){
        $this->qtdVendida = $qtdVendida;
    }

    public function getQtdOcorrencia(){
        return $this->qtdOcorrencia;
    }

    public function setQtdOcorrencia($qtdOcorrencia){
        $this->qtdOcorrencia = $qtdOcorrencia;
    }

    public function getOcorrencia(){
        return $this->ocorrencia;
    }

    public function setOcorrencia($ocorrencia){
        $this->ocorrencia = $ocorrencia;
    }

}

?>