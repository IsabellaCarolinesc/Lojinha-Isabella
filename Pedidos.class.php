<?php

class Pedidos{
    private $idPedido;
    private $idUsuario;
    private $dtPedido;
    private $dtPagamento;
    private $dtNotaFiscal;
    private $notaFiscal;
    private $dtEnvio;
    private $dtRecebimento;
    private $tipofrete;
    private $rastreioFrete;
    private $etregaendereco;
    private $entregaNumero;
    private $entregaCompl;
    private $entregaBairro;
    private $entregaCidade;
    private $entregaUF;
    private $entregaCEP;
    private $entregaTelefone;
    private $entregaRefer;
    private $valorTotal;
    private $qtdItems;
    private $dtDevolucao;
    private $motivoDevolucao;

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getDtPedido(){
        return $this->dtPedido;
    }

    public function setDtPedido($dtPedido){
        $this->dtPedido = $dtPedido;
    }

    public function getDtPagamento(){
        return $this->dtPagamento;
    }

    public function setDtPagamento($dtPagamento){
        $this->dtPagamento = $dtPagamento;
    }

    public function getDtNotaFiscal(){
        return $this->dtNotaFiscal;
    }

    public function setDtNotaFiscal($dtNotaFiscal){
        $this->dtNotaFiscal = $dtNotaFiscal;
    }

    public function getNotaFiscal(){
        return $this->notaFiscal;
    }

    public function setNotaFiscal($notaFiscal){
        $this->notaFiscal = $notaFiscal;
    }

    public function getDtEnvio(){
        return $this->dtEnvio;
    }

    public function setDtEnvio($dtEnvio){
        $this->dtEnvio = $dtEnvio;
    }

    public function getDtRecebimento(){
        return $this->dtRecebimento;
    }

    public function setDtRecebimento($dtRecebimento){
        $this->dtRecebimento = $dtRecebimento;
    }

    public function getTipofrete(){
        return $this->tipofrete;
    }

    public function setTipofrete($tipofrete){
        $this->tipofrete = $tipofrete;
    }

    public function getRastreioFrete(){
        return $this->rastreioFrete;
    }

    public function setRastreioFrete($rastreioFrete){
        $this->rastreioFrete = $rastreioFrete;
    }

    public function getEtregaendereco(){
        return $this->etregaendereco;
    }

    public function setEtregaendereco($etregaendereco){
        $this->etregaendereco = $etregaendereco;
    }

    public function getEntregaNumero(){
        return $this->entregaNumero;
    }

    public function setEntregaNumero($entregaNumero){
        $this->entregaNumero = $entregaNumero;
    }

    public function getEntregaCompl(){
        return $this->entregaCompl;
    }

    public function setEntregaCompl($entregaCompl){
        $this->entregaCompl = $entregaCompl;
    }

    public function getEntregaBairro(){
        return $this->entregaBairro;
    }

    public function setEntregaBairro($entregaBairro){
        $this->entregaBairro = $entregaBairro;
    }

    public function getEntregaCidade(){
        return $this->entregaCidade;
    }

    public function setEntregaCidade($entregaCidade){
        $this->entregaCidade = $entregaCidade;
    }

    public function getEntregaUF(){
        return $this->entregaUF;
    }

    public function setEntregaUF($entregaUF){
        $this->entregaUF = $entregaUF;
    }

    public function getEntregaCEP(){
        return $this->entregaCEP;
    }

    public function setEntregaCEP($entregaCEP){
        $this->entregaCEP = $entregaCEP;
    }

    public function getEntregaTelefone(){
        return $this->entregaTelefone;
    }

    public function setEntregaTelefone($entregaTelefone){
        $this->entregaTelefone = $entregaTelefone;
    }

    public function getEntregaRefer(){
        return $this->entregaRefer;
    }

    public function setEntregaRefer($entregaRefer){
        $this->entregaRefer = $entregaRefer;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }

    public function getQtdItems(){
        return $this->qtdItems;
    }

    public function setQtdItems($qtdItems){
        $this->qtdItems = $qtdItems;
    }

    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
    }

    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
    }

}

?>